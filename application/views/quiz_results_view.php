<!DOCTYPE html>
	
	<html>
	<body>
		<h2>Profile created!</h2>

			<iframe width="560" height="315" src="//www.youtube.com/embed/y6Sxv-sUYtM" frameborder="0" allowfullscreen></iframe>
			This page needs to show the results, perhaps user information, etc.
			
			<?php foreach($posts as $post): ?>
			
			<div class="postbox">
				<h2><?php echo $post['name']; ?></h2>
				<p><?php echo $post['age']; ?></p> <!--the 'content' is what we called the textbox on the phpMyAdmin database-->
				&nbsp;
				<label>Tags</label>
				<p ID="taggies"><?php echo $post['email']; ?></p>
			</div>
		<?php endforeach; ?>
			
			<form action="http://phoenix.sheridanc.on.ca/~ccit1585/suitUpFP/index.php/quiz">
    			<input type="submit" value="Go to Quiz">
			</form>
	</body>

	</html>

	
