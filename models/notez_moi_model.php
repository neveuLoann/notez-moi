<?php
class notez_moi_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}

	public function get_movies_accueil()
	{
		$this->db->limit(3);
		$this->db->order_by("date_crea", "desc"); 
		$query = $this->db->get('movies');
		
		return $query->result_array();
	}

	public function get_list_movies()
	{
		$this->db->order_by("date_crea", "desc");
		$query = $this->db->get('movies');
		return $query->result_array();
	}
	
	public function get_movie($slug)
	{
		$this->db->from('movies');
		$this->db->where('slug',$slug);
		return $query= $this->db->get()->result_array();
	}

	public function get_avis($id)
	{
		$this->db->from('avis');
		$this->db->where('id_film',$id);
		return $query= $this->db->get()->result_array();
	}

	public function count_avis($id)
	{
		$this->db->from('avis');
		$this->db->where('id_film',$id);
		$query = $this->db->count_all_results();
		return $query;
	}

	public function set_avis($id)
	{
		$date = date("Y-m-d"); 
		$data = array(
			'id' => 0,
			'id_film' => $id,
			'note' => $this->input->post('note'),
			'person' => $this->input->post('person'),
			'age' => $this->input->post('age'),
			'content' => $this->input->post('content'),
			'date_crea' => $date
			);
		return $this->db->insert('avis', $data);
	}

	public function search_film()
	{
		$t = $this->input->post('cle');
		
		$this->db->from('movies');
		$this->db->like('name', $t); 
		$this->db->or_like('acteurs', $t);
		$this->db->or_like('category', $t); 
		$this->db->or_like('realisateur', $t); 

		$query = $this->db->get()->result_array();
		if($query != array()){
			return $query;
		}else{
			return array();
		}
		
	}

	public function maj_note_film($id)
	{	

		$avis = $this->notez_moi_model->get_avis($id);
		$nombre_note = $this->notez_moi_model->count_avis($id);
		$som_note = 0;
		$total_note = null;
		if($avis != null){
			foreach ($avis as $avi){
				$som_note = $som_note + $avi['note'];
			}
			$total_note = $som_note/$nombre_note;
		}

		$data = array(
               'note' => $total_note
            );
		$this->db->from('movies');
		$this->db->where('id', $id);
		$this->db->update('movies', $data); 
	}
}
?>