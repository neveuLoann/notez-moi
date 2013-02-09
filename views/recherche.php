<div id="content"><div class="ic">More Website Templates at TemplateMonster.com!</div>
	<div class="line-hor"></div>
	<div class="box">
		<div class="border-right">
			<div class="border-left">
				<div class="inner">
					<h3> Rechercher un film </h3>
						
					<p><b><?php echo validation_errors(); ?></b></p>
				
					<form id="recherche-form" action=<?php echo current_url(); ?> method="post" accept-charset="utf-8">
						<fieldset>
							<div class="field"><label>Mot clé (Film, acteur, réalisateur, genre) </label><input type="input" name="cle"/></div>
		
							<div class="wrapper">
								<a href="#" class="link2" >	
								<input type="submit" name="submit" value="Rechercher" />
								</a> 
							</div>
						</fieldset>
					</form>
					
					<ul class='list'>
						<li></li>
						<?php 
						if($result == array()){
							echo "<li> <p> Aucun résultat correspondant à votre recherche ! </p> </li>";
						}
						if($result != "" && $result !=array()){
							foreach ($result as $film):?>
								<li>
									<img src=<?php echo base_url()."ressources/affiches/".$film['slug'].".jpg" ?> alt="" />
									<a href= <?php echo 'films/fiche/'.$film['slug']; ?> class="link"> <?php echo $film['name']; ?> </a>
									<p> <?php echo $film['realisateur']." - ".$film['category']; ?> </p>
									<p> <?php echo "Date de sortie: ".$film['date_sortie']; ?> </p>
									<p> <?php echo $film['resume']; ?> </p>						
								</li>
							<?php endforeach; } ?>
					</ul>
				</div>
			</div>	
		</div>
	</div>
</div>