	<h1><?php echo $title; ?> | Admin </h1>
		
		<form action="http://phoenix.sheridanc.on.ca/~ccit1585/cct460/index.php/Admin">
    			<input type="submit" value="Go to Admin Page">
			</form>

		<?php foreach($post as $p): ?>
			<?php echo form_open('Admin/update_post/' . $p['ID']) ?>
			<label>Title</label>
			<input type="text" name="title" value="<?php echo $p['title']; ?>">
			<label>Content</label>
			<textarea name="content"><?php echo $p['content']; ?></textarea>
			<label>Tags</label>
			<input type="text" name="categories" value="<?php echo $p['categories']; ?>">
			<input type="submit" name="submit" value="Save">
			</form>
		<?php endforeach; ?>
