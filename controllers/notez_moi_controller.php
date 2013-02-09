<?php
class notez_moi_controller extends CI_Controller {

public function __construct()
{

	parent::__construct();
		$this->load->model('notez_moi_model');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('url');
	}

	public function index()
	{

	$data['movies_accueil'] = $this->notez_moi_model->get_movies_accueil();
	$data['title'] = 'Accueil - Notez-moi ! ';
	$this->load->view('templates/header', $data);
	$this->load->view('index.php');
	$this->load->view('templates/footer');
	}

	public function film($slug)
	{
	
	$data['film'] = $this->notez_moi_model->get_movie($slug);
	$data['title'] = $data['film'][0]['name']." - Notez-moi !";
	$id_film = $data['film'][0]['id'];
	$data['avis'] = $this->notez_moi_model->get_avis($id_film);
	$data['nbavis'] = $this->notez_moi_model->count_avis($id_film);
	
	$this->load->view('templates/header', $data);
	$this->load->view('article', $data);
	$this->create_avis($id_film);
	$this->load->view('article_avis',$data);
	$this->load->view('templates/footer');
	}

	public function create_avis($id_film)
	{
		$this->form_validation->set_rules('person','nom','required');
		$this->form_validation->set_rules('age','age','required');
		$this->form_validation->set_rules('note','note','required');
		$this->form_validation->set_rules('content','avis','required');
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('create_avis');
		}
		else
		{
			$this->notez_moi_model->set_avis($id_film);
			$this->notez_moi_model->maj_note_film($id_film);
			redirect(current_url(),'refresh');
		}
	}

	public function liste()
	{
		$data['films'] = $this->notez_moi_model->get_list_movies();
		$data['title'] = "Liste des films - Notez-moi !";
		$this->load->view('templates/header', $data);
		$this->load->view('liste', $data);
		$this->load->view('templates/footer');
	}
	
	public function recherche()
	{
		$data['title'] = "Rechercher un film - Notez-moi !";
		$data['result'] = "";
		$this->form_validation->set_rules('cle','Mot clé','required');

		if ($this->form_validation->run() === FALSE)
		{	
			$this->load->view('templates/header', $data);
			$this->load->view('recherche', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$data['result'] = $this->notez_moi_model->search_film();
			$this->load->view('templates/header', $data);
			$this->load->view('recherche', $data);
			$this->load->view('templates/footer');
		}

	}

	public function contact()
	{
		$data['title'] = "Contactez-nous - Notez-moi !";
		$this->load->view('templates/header', $data);
		$this->load->view('contact', $data);
		$this->load->view('templates/footer');
	}



}

?>