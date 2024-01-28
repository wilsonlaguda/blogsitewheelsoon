<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $content = $_POST["content"];

    $sql = "UPDATE posts SET title='$title', author='$author', content='$content' WHERE id=$id";
    $conn->query($sql);
    header("Location: index.php");
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $result = $conn->query("SELECT * FROM posts WHERE id=$id");
    $row = $result->fetch_assoc();
} else {
    header("Location: index.php");
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Post</h1>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>" required><br>

        <label for="title">Author:</label>
        <input type="text" id="author" name="title" value="<?php echo $row['author']; ?>" required><br>

        <label for="content">Content:</label>
        <textarea id="content" name="content" required><?php echo $row['content']; ?></textarea><br>

        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
