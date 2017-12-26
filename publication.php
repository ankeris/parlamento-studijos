<?php include 'includes/header.php' ?>
<?php include 'includes/pdo-conn.php' ?>
<?php
    
$currentPublication = $_GET['publicationindex'];

$sth = $conn->prepare("SELECT * FROM articles WHERE publication = '$currentPublication'");
$sth->execute();
$publications = $sth->fetchAll();

?>

<h2>
Žurnalas nr.
<?php 
foreach ($publications as $publication){
    echo $publication['publication'];
    break;
}
?>

</h2>

<table>
  <tr>
    <th>Autorius</th>
    <th>Turinys</th>
    <th>Pavadinimas</th>
  </tr>
  
<?php 
foreach ($publications as $publication){
?>
  <tr>
    <td><?php echo $publication['author']?></td>
    <td><?php echo $publication['topic']?></td>
    <td><a href="media/pdfs/<?php echo $publication['pdf_url']?>"><?php echo $publication['name']?></a></td>
  </tr>
<?php } ?>
</table>



