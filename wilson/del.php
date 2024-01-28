<?php   
    include 'db.php';

    if(isset($_POST['delete'])) {
        $id = $_POST['delete_id'];

        mysqli_query($conn, "DELETE FROM posts WHERE id = '$id'");
        header("location: index.php");
    }