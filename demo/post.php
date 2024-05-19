<?php
require 'function.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $userId = 1; // Assuming userId is 1 for simplicity

    $newPost = createPost($title, $body, $userId);
    if ($newPost) {
        $message = 'Post created successfully!';
    } else {
        $message = 'Failed to create post. Please try again.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a New Post</title>
</head>
<body>
    <h1>Create a New Post</h1>
    <a href="index.php">Back to Posts</a>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="body">Body:</label>
        <textarea id="body" name="body" required></textarea>
        <br>
        <button type="submit">Create Post</button>
    </form>
    <p><?php echo htmlspecialchars($message); ?></p>
</body>
</html>
