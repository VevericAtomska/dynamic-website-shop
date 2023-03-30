<!--
<div class="news-box">
    <h3>Update 0.12.12.1.16069</h3>
    <ul>
        <li>Various adjustments to improve performance (especially at the Lighthouse location)</li>
        <li>Fixed an issue causing bots to appear inside objects or move inside objects</li>
        <li>Fixed sound "stuttering" when working with the inventory</li>
        <li>Other fixes</li>
    </ul>
    <p>We are pleased to announce the release of patch 0.12.12.0.16029 for Escape from Tarkov. Please find the full patch notes <a href="https://www.escapefromtarkov.com/news/id/218?lang=undefined" target="_blank">here</a>.</p>

    <h3>Update 0.12.12.2.16165</h3>
    <ul>
        <li>We have installed an update containing several bug fixes and changes</li>
    </ul>
    <p>Please find the full patch notes <a href="https://www.escapefromtarkov.com/news/id/219?lang=undefined" target="_blank">here</a>.</p>

    <h3>New Map: Streets of Tarkov</h3>
    <ul>
        <li>We are excited to announce the addition of a new map: Streets of Tarkov</li>
        <li>The map features a sprawling urban environment with many buildings to explore and loot</li>
        <li>Players should be aware of high levels of danger and should prepare accordingly</li>
    </ul>
    <p>Please find more information about the new map in our <a href="https://www.escapefromtarkov.com/news/id/220?lang=undefined" target="_blank">announcement post</a>.</p>
</div>
--!>

<?php if (isset($_SESSION['admin'])): ?>
    <?php

    include  DIR_MODULES . "include_post_entry.php";

    $sql = "SELECT postID, postTitle, postDesc, postDate 
                                    FROM blog_posts 
                                    ORDER BY postID DESC";
    $stmt =mysqli_query($connect,$sql);
    while($row = mysqli_fetch_assoc($stmt) ) {

        echo '<div class="edit">';
        echo '<h2><a href="index.php?page=viewpost' . $row['postID'] . '">' . $row['postTitle'] . '</a></h2>';
        echo '<div class="games">';
        echo '<div class="game-text"><p>' . $row['postDesc'] . '</p></div>';
        echo '<div class="game-text">Posted on ' . date('jS M Y H:i:s', strtotime($row['postDate'])) . '</div>';

        echo '</div>';
        echo '</div>';
        include DIR_MODULES . 'include_del_post.php';
        echo '<a href="index.php?del=' . $row['postID'] . '"></a>';

        include DIR_MODULES . "include_edit_post.php";
        //include DIR_MODULES . "include_del_post.php";

    };




    ?>
<?php endif ?>
<?php

$sql = " SELECT postID, postTitle, postDesc, postDate 
                                    FROM blog_posts 
                                    ORDER BY postID DESC ";
$stmt =mysqli_query($connect,$sql);
while($row = mysqli_fetch_assoc($stmt) ) {

    echo '<div class="edit">';
    echo '<h2><a href="index.php?page=viewpost' . $row['postID'] . '">' . $row['postTitle'] . '</a></h2>';
    echo '<div class="games">';
    echo '<div class="game-text"><p>' . $row['postDesc'] . '</p></div>';
    echo '<div class="game-text">Posted on ' . date('jS M Y H:i:s', strtotime($row['postDate'])) . '</div>';

    echo '</div>';
    echo '</div>';
}
?>
