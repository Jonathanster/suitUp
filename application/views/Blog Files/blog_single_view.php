
		<h1><?php echo $title; ?></h1>


		<?php foreach($posts as $post): ?>
			
			<div class="postbox">
				<h2><?php echo $post['title']; ?></h2>
				<p><?php echo $post['content']; ?></p> <!--the 'content' is what we called the textbox on the phpMyAdmin database-->
				&nbsp;
				<label>Tags</label>
				<p ID="taggies"><?php echo $post['categories']; ?></p>
			</div>

			<?php echo form_open("blog/comment"); ?>
			<label>Comment:</label>
			<textarea name="comment"></textarea>
			<input type="submit" name="submit" value="Create">
			<!--$p['____'] where '___' must be a data column in your COMMENTS database-->

			</form>
		<?php endforeach; ?>
		

		<ol>
		<?php foreach($posts as $post): ?>
			<li><a href="/~ccit1585/cct460/index.php/blog/comment/<?php echo $post['post_id']; ?>"><?php echo $post['comment']; ?></a></li>

		<?php endforeach; ?>
		</ol>

		<div class='searchbox'>
				<?php echo form_open("blog/search"); ?>
				<label>Search:</label>
				<input type="text" name="searchquery" />
				<input type="submit" name="submit" value="Go">
			</form>
			</div>
	
	
	<div class="linkbox">
		<a href="http://phoenix.sheridanc.on.ca/~ccit1585/cct460/index.php/Admin">Admin Page</a>
		| <a href="http://phoenix.sheridanc.on.ca/~ccit1585/cct460/index.php/blog">Blog Page</a>
	</div>

	