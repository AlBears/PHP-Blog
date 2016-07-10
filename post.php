<?php include 'includes/header.php'; ?>
<?php

$id = $_GET['id'];

$db = new Database();

//Create query
$query = "SELECT * FROM posts WHERE id = ".$id;
//Use query
$post = $db->select($query)->fetch_assoc();

//Create query
$query = "SELECT * FROM categories";
//Use query
$categories = $db->select($query);

?>
<div class="blog-post">
            <h2 class="blog-post-title"><?php echo $post['title']; ?></h2>
            <p class="blog-post-meta"><?php echo formatDate($post['date']); ?> by <a href="#"><?php echo $post['author']; ?></a></p>
 			<p><?php echo $post['body']; ?></p>
      </div><!-- /.blog-post -->	      
<?php include 'includes/footer.php'; ?>