<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Post</title>
    <link rel="stylesheet" href="style.css"> <!-- Include your stylesheet here -->
</head>
<body>
    <section id="post-view">
       <!-- Blog Section -->
    <section id="blog">
    <h1>Your new Blog</h1>
    <?php
    include 'db.php';

    $result = $conn->query("SELECT * FROM posts");

    while ($row = $result->fetch_assoc()) {
        echo "<div class='post'>";
        echo "<div class='post-title'><strong>Title:</strong> <h2>" . htmlspecialchars($row['title']) . "</h2></div>";
        echo "<div class='post-author'><strong>Author:</strong> <h3>" . htmlspecialchars($row['author']) . "</h3></div>";
        echo "<div class='post-content'><strong>Content:</strong> <p>" . htmlspecialchars($row['content']) . "</p></div>";
        echo "<div class='post-actions'>";
        echo "<a href='edit.php?id=" . htmlspecialchars($row['id']) . "' target='_blank'>Edit</a> | ";
        echo "<a href='delete.php?id=" . htmlspecialchars($row['id']) . "' target='_blank'>Delete</a>";
        echo "</div>";
        echo "<hr>";
        echo "</div>";
    }

    echo "<a href='create.php' target='_blank'>Create New Post</a>";

    $conn->close();
    ?>
    </section>
</body>
</html>
