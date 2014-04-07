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
	</div>

		<div class="about">
		<p ID="group">
			About the creators:
		</p>
		</div>

</div>



</div>
