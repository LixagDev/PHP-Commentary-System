<?php
if (isset($_POST['inputuser']) && isset($_POST['inputcomment']))
{
    $user = $_POST['inputuser'];
    $comment = $_POST['inputcomment'];
    
    $db = new PDO('mysql:host=localhost;dbname=testcommentary', 'root', '');
    $sql = "SELECT * FROM commentary";
    $sql = "INSERT INTO `commentary` (`byuser`, `commentary`, `create_at`) VALUES ('$user', '$comment', NOW())";
    $result = $db->prepare($sql);
    $result->execute();

    header("Location: index.php");
}
else
{
    header("Location: index.php");
}
?>