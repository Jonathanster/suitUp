<h1 id="titleBanner"><?php echo $title; ?></h1>




<div class="content">
	<h2>Welcome!</h2>


	<div class="container">

		
		<div class="profileCreate">


		<?php echo form_open('quiz/create') ?>
		<p>Begin your quiz!</p>
		<input type="submit" name="submit" value="Create">
			</form>

			<h2> View Past Results</h2>
			<h3>Please enter your ID Number</h3>

				<?php echo form_open('quiz/viewPast') ?>
				<input type="int" name="idNum">
				<input type="submit" name="submit" value="Create">
			</form>

<!--
<?php echo form_open('quiz/search_result') ?>
	<label>TESTING FOR SEARCH AND EDIT PROFILE</label>
	<input type="int" name="idNum">
	<input type="submit" name="submit" value="Search">
</form>
-->



<ul>
		<?php foreach($quizs as $quiz): ?>
			<li><a href="/~ccit1585/suitUpFP/index.php/quiz/update/<?php echo $quiz['id']; ?>"><?php echo $quiz['name']; ?></a></li>
		<?php endforeach; ?>

</ul>

	</div>

		<div class="about">
		<p ID="group">
			About the creators:
		</p>
		</div>

</div>



</div>
