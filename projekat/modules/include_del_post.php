<form method="post" action="">
    <input type="hidden" name="postID" value="<?php echo $row['postID']; ?>">
    <input type="submit" name="delete" value="Delete">
</form>

<?php
if (isset($_POST['delete'])) {
    $postID = $_POST['postID'];
    mysqli_query($connect, "DELETE FROM `blog_posts` WHERE postID = $postID");
    $_SESSION['message'] = "Location deleted";
    header('Location: index.php?page=news');
}



?>
