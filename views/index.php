<!-- CONTENT -->
<div id="content"><div class="ic">More Website Templates at TemplateMonster.com!</div>
	<div class="line-hor"></div>
	<div class="box">
		<div class="border-right">
			<div class="border-left">
				<div class="inner">
					<h3>Bienvenue sur <b>Notez-</b><span>moi !</span></h3>
					<p>Notez-moi ! est un site qui vous permet de réagir à un film que vous venez de voir en laissant une critique et une note !</p>
					<p></p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="content">
		<h3>Les <span>nouveautés</span></h3>
		<ul class="movies">
			<?php foreach ($movies_accueil as $movies): ?>
				<li>
					<h4><?php echo $movies['name']; ?></h4><img src=<?php echo base_url()."/ressources/miniatures/".$movies['slug'].".jpg" ?> alt="" />
					<p><?php echo $movies['resume']; ?></p>
					<div class="wrapper"><a href= <?php echo 'index.php/films/fiche/'.$movies['slug']; ?> class="link2"><span><span>Notez-moi !</span></span></a></div>
				</li>
			<?php endforeach ?>
			<li class="clear">&nbsp;</li>
		</ul>
	</div>

</div>
