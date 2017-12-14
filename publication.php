<?php include 'includes/header.php' ?>
<?php include 'includes/pdo-conn.php' ?>
<?php
    
$currentPublication = $_GET['publicationindex'];

$sth = $conn->prepare("SELECT * FROM articles WHERE publication = '$currentPublication'");
$sth->execute();
$publications = $sth->fetchAll();

?>


<?php 
foreach ($publications as $publication){
?>

<h4><?php echo $publication['topic']?>:</h4>

<h4><?php echo $publication['author']?></h4>

<h4><a href="media/pdfs/<?php echo $publication['pdf_url']?>"><?php echo $publication['name']?></a></h4>


<?php } ?>
