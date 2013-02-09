<!-- CONTENT -->
<div id="content"><div class="ic">More Website Templates at TemplateMonster.com!</div>
	<div class="line-hor"></div>
	<div class="box">
		<div class="border-right">
			<div class="border-left">
				<div class="inner">
					<h3><span><?php echo $film[0]['name'] ?></span></h3>
					
					<div class="img-box1 alt"><img src=<?php echo base_url()."ressources/affiches/".$film[0]['slug'].".jpg" ?> alt="" />
						<p> <b> Date de sortie :</b> <?php echo $film[0]['date_sortie']; ?> </p>
						<p> <b>Réalisateur :</b> <?php echo $film[0]['realisateur']; ?></p>
						<p> <b>Acteurs principaux :</b> <?php echo $film[0]['acteurs']; ?></p>
						<p> <b>Note :</b> <?php echo $film[0]['note'];?> <span><?php echo ("(".$nbavis." avis)"); ?></span></p>
					</div>
						
					<p> <?php echo $film[0]['content']; ?> </p>
				</div>
			</div>	
		</div>
	</div>

			