<div id="avis" class="content">
	<h3>Notez ce film !</h3>
	<p><b><?php echo validation_errors(); ?></b></p>
	<form id="contacts-form" action=<?php echo current_url(); ?> method="post" accept-charset="utf-8">
		<fieldset>
			<div class="field"><label>Votre nom :</label><input type="input" name="person"/></div>
			<div class="field"><label>Votre age :</label><input type="input" name="age" maxlength="2"/></div>
			<div class="field"><label>Votre note :</label><select name="note"> <option> 0 <option> 1 <option> 2  <option> 3 <option> 4 <option> 5 <option> 6 <option> 7 <option> 8 <option> 9 <option> 10 </select> </div>
			<div class="field"><label>Votre avis :</label><textarea type="input" cols="1" rows="1" name="content"></textarea></div>
			<div class="wrapper">
				<a href="#" class="link2" >	
					<input type="submit" name="submit" value="Envoyer l'avis" />
				</a> 
			</div>
		</fieldset>
	</form>
</div>

