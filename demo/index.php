<?php require 'function.php';
$posts=fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>posts</h1>
    <?php
    if($posts)
    foreach($posts as $post):
    ?>
    <div>
        <h2><?php echo (htmlspecialchars( $post['title']))?></h2>
        <p><?php echo (htmlspecialchars( $post['body']))?></p>
    </div>
    <?php endforeach;?>
</body>
</html>