<?php
$db = new PDO('mysql:host=localhost;dbname=testcommentary', 'root', '');

$sql = "SELECT * FROM commentary";
$result = $db->prepare($sql);
$result->execute();

$data = $result->fetchALl();
?>

<!DOCTYPE html>
<head>
    <title>Test Commentaires</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="parent">
        <div class="top">
            <?php
                foreach($data as $commentary)
                {
                    echo '<h2 id="testcommentary">', $commentary['byuser'],' : ', $commentary['commentary'], ' ( ', $commentary['create_at'], ' ) </h2>';
                }
            ?>
        </div>
        <div class="bottom">
            <form action="create.php" method="POST">
                <input type="text" name="inputuser" id="inputuser" placeholder="pseudo" required>
                <p><textarea name="inputcomment" id="inputcomment" cols="30" rows="10" placeholder="commentaire" required></textarea></p>
                <p><button type="submit" id="button">Publier</button></p>
            </form>
        </div>
    </div> 
</body>