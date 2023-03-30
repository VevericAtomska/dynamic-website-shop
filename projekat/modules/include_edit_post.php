
<div id="wrapper">
    <form action='' method='post'>
        <input type='hidden' name='postID' value='<?php echo $row['postID'];?>'>

        <p><label>Title</label><br />
            <input type='text' name='postTitle' value='<?php echo $row['postTitle'];?>'></p>

        <p><label>Description</label><br />
            <textarea  name='postDesc' cols='60' rows='10'><?php echo $row['postDesc'];?></textarea></p>


<p><input type='submit' name='submit' value='Update'></p>

</form>

</div>

</body>
</html>

<?php
//if form has been submitted process it
if(isset($_POST['submit'])){

$error = '';

$_POST = array_map( 'stripslashes', $_POST );

//collect form data
extract($_POST);

//very basic validation

if($postTitle ==''){
$error = '';
}

if($postDesc ==''){
$error = '';
}


if(!isset($error)){

//insert into database
$stmt = "UPDATE blog_posts SET postTitle = ('$postTitle'),
postDesc = ('$postDesc'),
WHERE postID = ('$postID')";
$results1 = mysqli_query($connect, $stmt);

//redirect to index page
header('Location: index.php?action=updated');

exit;

}

}
?>


