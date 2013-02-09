<h3> <span> CRITIQUES </span></h3>
	<?php if ($avis == null): ?>
		<p> Aucunes critiques ! </p>
	<?php else: ?>
			<p> <br>
			Trier par age :  <a href="#"> <15 </a>   |   <a href="#"> 15-18 </a>   |   <a href="#"> 18-25 </a>   |   <a href="#"> 25-35 </a>  |  <a href="#"> >35 </a> <br>  
			Trier par date : <a href="#"> Plus récent </a>   |   <a href="#"> Plus ancien </a> <br>
			Trier par note : <a href="#"> + au - </a>   |   <a href="#"> - au + </a>
			</p>
			<ul class="list">
				<?php foreach ($avis as $avi): ?>
					<li>
						<div class="avis">
							<h4> <span>Par </span><?php echo $avi['person']; ?> <span>(<?php echo $avi['age']; ?> ans) le <?php echo $avi['date_crea']; ?></span> </h4>
							<h3><b><?php echo $avi['note']; ?>/10</b></h3>
							<p> <?php echo $avi['content']; ?> </p>
						</div>	
					</li>
				<?php endforeach ?>
			</ul>
	<?php endif; ?>
	
<a href="#top" style="float : right"> Revenir en haut de page</a>
</div> <!-- END CONTENT -->