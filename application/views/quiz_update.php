<h1 id="titleBanner"><?php echo $title; ?></h1>




<div class="content">
	<h2>Welcome!</h2>


	<div class="container">





		
		<div class="profileCreate">


	<?php foreach($quiz as $p): ?>

		<?php echo form_open('quiz/update_quiz/' . $p['id']) ?>
		<p ID="PC">
		Create your profile
		</p>
		
		<p>
		<label ID="id">ID</label>
		<input type="int" name="id" value="<?php echo $p['id']; ?>">
		</p>
		
		<label ID="name">Name</label>
		<textarea name="name"><?php echo $p['name']; ?></textarea>
		</p>
		<p>
		<label ID="age">Age</label>
		<input type="int" name="age" value="<?php echo $p['age']; ?>">
		</p>
		<p>
		<label ID="email">Email</label>
		<textarea name="email"><?php echo $p['email']; ?></textarea>
		</p>

		<p>
		<label ID="id">Results</label>
		<input type="int" name="result" value="<?php echo $p['result']; ?>">
		</p>

		<input type="submit" name="submit" value="Save">
	</form>
<?php endforeach; ?>

<h2> Edit shit</h2>
<ul>
		<?php foreach($quizs as $quiz): ?>
			<li><a href="/~ccit158