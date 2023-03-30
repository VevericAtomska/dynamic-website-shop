<?php


//if form has been submitted process it
if(isset($_POST['submit'])){

    $_POST = array_map( 'stripslashes', $_POST );

    //collect form data
    extract($_POST);

    //very basic validation
    if($postTitle ==''){
        $error[] = "<p style='color:red; border:2px white solid;'>Please enter the title</p>";
    }

    if($postDesc ==''){
        $error[] = "<p style='color:red; border:2px white solid;'>Please enter the description</p>";

    }


    if(!isset($error)){


        //insert into database
        $stmt = "INSERT INTO blog_posts (postTitle,postDesc, postDate) 
                         VALUES ('$postTitle', '$postDesc',  now()) " ;
        $results = mysqli_query($connect, $stmt);

        //redirect to index page
        header('Location: index.php?action=added');


        exit;

    }
}

//check for any errors
if(isset($error)){
    foreach($error as $error){
        echo '<p class="error">'.$error.'</p>';
    }
}

?>

<div id="wrapper">
    <form action='' method='post' >

        <p><label>Title</label><br />
            <input id="title" type='text' name='postTitle' value='<?php if(isset($error)){ echo $_POST['postTitle'];}?>'></p>

        <p><label>Description</label><br />
            <textarea  id="desc" name='postDesc' cols='60' rows='10'><?php if(isset($error)){ echo $_POST['postDesc'];}?></textarea></p>

        <p><input type='submit' name='submit' value='Submit'></p>

    </form>

</div>