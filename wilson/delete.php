<?php
include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
        $id = $_GET["id"];
        $result = $conn->query("SELECT * FROM posts WHERE id = $id");
        $row = $result->fetch_assoc();

        if ($row) {
            echo "<div class='delete-confirmation'>";
            echo "<h1>Confirm Deletion</h1>";
            echo "<p>Are you sure you want to delete the following post?</p>";
            echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
            echo "<h2>" . htmlspecialchars($row['author']) . "</h2>";
            echo "<p>" . htmlspecialchars($row['content']) . "</p>";
            echo "<form method='post' action='del.php'>
                        <input type='hidden' name='delete_id' value='" . htmlspecialchars($row['id']) . "'>
                        <button type='submit' class='btn-delete' name='delete'>Delete</button>
                  </form>";
            echo "<a href='index.php' class='btn-cancel'>Cancel</a>";
            echo "</div>";
        } else {
            echo "<p>Post not found.</p>";
        }
    } else {
        header("Location: index.php");
    }

    $conn->close();
    ?>
</body>
</html>
