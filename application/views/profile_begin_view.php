<h1><?php echo $title; ?></h1>

	<div class="profileCreate">
		<?php echo form_open('quiz/create') ?>
		<p ID="PC">
		Create your profile
		</p>
		
		<p>
		<label ID="id">ID Number</label>
		<input type="int" name="id">
		</p>
		<p>
		<label ID="name">Name</label>
		<textarea name="name"></textarea>
		</p>
		<p>
		<label ID="age">Age</label>
		<input type="int" name="age">
		</p>
		<p>
		<label ID="email">Email</label>
		<textarea name="email"></textarea>
		</p>
		<input type="submit" name="submit" value="Create">
		</form
	</div>
