<h1 id="titleBanner"><?php echo $title; ?></h1>




<div class="content">
	<h2>Welcome!</h2>


	<div class="container">





		
		<div class="profileCreate">


		<?php echo form_open('quiz/create') ?>
		<p ID="PC">
		Create your profile
		</p>
		
		<p>
		<label ID="id">ID</label>
		<input type="int" name="id">
		</p>
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
			</form>

			<h2> Edit shit</h2>

<!--
<?php echo form_open('quiz/search_result') ?>
	<label>TESTING FOR SEARCH AND EDIT PROFILE</label>
	<input type="int" name="idNum">
	<input type="submit" name="submit" value="Search">
</form>
-->



<ul>
		<?php foreach($quizs as $quiz): ?>
			<li><a href="/~ccit1585/suitUpFP/index.php/quiz/upda
