		<h1><?php echo $title; ?></h1>
		<?php foreach($posts as $post): ?>
			
			<div class="postbox">
				<h2><?php echo $post['title']; ?></h2>
				<p><?php echo $post['content']; ?></p> <!--the 'content' is what we called the textbox on the phpMyAdmin database-->
				&nbsp;
				<label>Tags</label>
				<p ID="taggies"><?php echo $post['categories']; ?></p>
			</div>
		<?php endforeach; ?>
		
		<div class='searchbox'>
				<?php echo form_open("blog/search"); ?>
				<label>Search:</label>
				<input type="text" name="searchquery" />
				<input type="submit" name="submit" value="Go">
			</form>
			</div>
	
	<div class="quickCreate">
		<?php echo form_open('blog/create') ?>
		<p ID="QC">
		Quick Create TESTING123
		</p>
		<p>
		<label ID="titlebox1">Title</label>
		<input type="text" name="title">
		</p>
		<p>
		<label ID="titlebox2">Content</label>
		<textarea name="content"></textarea>
		</p>
		<p>
		<label ID="titlebox3">Categories</label>
		<textarea name="categories"></textarea>
		</p>
		<input type="submit" name="submit" value="Create">
	</form>
	</div>
	<div class="linkbox">
		<a href="http://phoenix.sheridanc.on.ca/~ccit1585/cct460/index.php/Admin">Admin Page</a>
		| <a href="http://phoenix.sheridanc.on.ca/~ccit1585/cct460/index.php/blog">Blog Page</a>
	</div>

	
