<h1 id="titleBanner"><?php echo $title; ?></h1>




<div class="content">
	<h2>Welcome!</h2>


	<div class="container">





		
		<div class="profileCreate">


	<?php foreach($quiz as $p): ?>

		<?php echo form_open('quiz/update_quiz/' . $p['id']) ?>
		<p ID="PC">
		Edit your profile
		</p>
		
		<p>
		<label ID="id">ID number: <?php echo $p['id']; ?></label>
		</p>
		
		<label ID="name">Name</label>
		<input type="text" name="name" value="<?php echo $p['name']; ?>">
		</p>
		<p>
		<label ID="age">Age</label>
		<input type="int" name="age" value="<?php echo $p['age']; ?>">
		</p>
		<p>
		<label ID="email">Email</label>
		<input type="text" name="email" value="<?php echo $p['email']; ?>">
		</p>

		<p>
		<label ID="id">Results</label>
		<a href="http://phoenix.sheridanc.on.ca/~ccit1585/suitUpFP/index.php/quiz/<?php echo $p['result']; ?>"><?php echo $p['result']; ?></a>
		</p>

		<input type="submit" name="submit" value="Save">
	</form>
<?php endforeach; ?>




	</div>

		<div class="about">
		<p ID="group">
			About the creators:
		</p>
		</div>

</div>



</div>