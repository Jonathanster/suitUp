
		<h1><?php echo $title; ?></h1>
		<h2>Search Results:</h2>
	
		<?php foreach($posts as $post): ?>
			<div class="postbox">
				<h2><?php echo $post['title']; ?></h2>
				<p><?php echo $post['content']; ?></p> 
				&nbsp;
				<label>Tags</label>
				<p ID="taggies"><?php echo $post['categories']; ?></p>
			</div>
		<?php endforeach; ?>
<!--
	
			<div class='searchbox'>
				<?php echo form_open("blog/search"); ?>
				<label>Search:</label>
				<input type="text" name="searchquery" />
				<input type="submit" name="submit" value="Go">
			</form>
			</div>
-->
		
		


	<div class="linkbox">
		<a href="http://phoenix.sheridanc.on.ca/~ccit1585/cct460/index.php/Admin">Admin Page</a>
		| <a href="http://phoenix.sheridanc.on.ca/~ccit1585/cct460/index.php/blog">Blog Page</a>
	</div>

	