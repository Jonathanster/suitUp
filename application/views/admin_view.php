

		<h1><?php echo $title; ?> | Admin </h1>

			<form action="http://phoenix.sheridanc.on.ca/~ccit1585/cct460/index.php/Admin">
    			<input type="submit" value="Go to Admin Page">
			</form>
			&nbsp;
			
		<?php echo form_open('Admin/create') ?>
		<label>Title</label>
		<input type="text" name="title">
		<label>Content</label>
		<textarea name="content"></textarea>
		<label>Categories</label>
		<textarea name="categories"></textarea>
		<input type="submit" name="submit" value="Create">

	</form>

	<h2>Edit Posts</h2>
	<ul>
		<?php foreach($posts as $post): ?>
		<li><a href="/~ccit1585/cct460/index.php/Admin/update/<?php echo $post['ID']; ?>"><?php echo $post['title']; ?></a> | <a href="/~ccit1585/cct460/index.php/Admin/delete/<?php echo $post['ID']; ?>">Delete post</a></li>
	<?php endforeach;?>
	</ul>

	&nbsp;
	&nbsp;

	<div class="linkbox">
		<a href="http://phoenix.sheridanc.on.ca/~ccit1585/cct460/index.php/Admin">Admin Page</a>
		|
		<a href="http://phoenix.sheridanc.on.ca/~ccit1585/cct460/index.php/blog">Blog Page</a>
	</div>