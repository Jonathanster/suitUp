<h1 id="titleBanner"><?php echo $title; ?></h1>




<div class="content">
	<h2>Welcome!</h2>


	<div class="container">

		
		<div class="profileCreate">


		<?php echo form_open('quiz/create') ?>
		<h3>Begin your quiz!</h3>
		<input type="submit" name="submit" value="Create">
			</form>

			<p> View Past Results</p>
			<p>Please enter your ID Number</p>

				<?php echo form_open('quiz/viewPast') ?>
				<input type="int" name="idNum">
				<input type="submit" name="submit" value="Search">
				</form>
	</div>

		<div class="about">
		<p ID="group">
About the website:
</p>
<p ID="idk">
Guys, confused on what to wear? Suit Up is here to help!
Take our online quiz to find out what your fashion style is. We offer a personalized style philosophy as well as suggested stores to shop your look. Want to check back later? We save your result so you can check back anytime.
</p>
<p ID="group">
About the creators:
</p>
<p ID="idk">
We are a team of four CCIT students studying at UTM. Our inspiration for this project stems from our interest in fashion and clothing. We understand the challenges of not knowing what to wear and where to shop, so we decided to create an online styling website.
- Jonathan, David, Hana & Amy		</p>
<img ID="fashionGuy" src="/~ccit1585/suitUpFP/assets/fashionguy.jpg">
		</div>

</div>



</div>
