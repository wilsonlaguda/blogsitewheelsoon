<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $author = $_POST["author"];
    $content = $_POST["content"];

    $sql = "INSERT INTO posts (title, author, content) VALUES ('$title','$author', '$content')";
    $conn->query($sql);
    header("Location: index.php");
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create New Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Create New Post</h1>
    <form method="post" action="">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br>

        <label for="title">Author:</label>
        <input type="text" id="author" name="author" required><br>


        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea><br>

        <button type="submit">Create Post</button>
    </form>
</body>
</html>
