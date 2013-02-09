<div id="content"><div class="ic">More Website Templates at TemplateMonster.com!</div>
	<div class="line-hor"></div>
	<div class="box">
		<div class="border-right">
			<div class="border-left">
				<div class="inner">
					<h3> Liste des films </h3>
						
					<ul class='list'>
						<?php foreach ($films as $film):?>
						<li>
							<img src=<?php echo base_url()."ressources/affiches/".$film['slug'].".jpg" ?> alt="" />
							<a href= <?php echo 'films/fiche/'.$film['slug']; ?> class="link"> <?php echo $film['name']; ?> </a>
							<p> <?php echo $film['realisateur']." - ".$film['category']; ?> </p>
							<p> <?php echo "Date de sortie: ".$film['date_sortie']; ?> </p>
							<p> <?php echo $film['resume']; ?> </p>
						</li>
						<?php endforeach ?>
					</ul>

				</div>
			</div>	
		</div>
	</div>
</div>


	
