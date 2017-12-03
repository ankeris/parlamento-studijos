<?php include 'includes/header.php' ?>
<?php include 'includes/pdo-conn.php' ?>
<?php 
    
$sth = $conn->prepare("SELECT * FROM publications");
$sth->execute();
$publications = $sth->fetchAll();

var_dump($publications);
?>

<main>
    <section>
    <h3>Straipsniai</h3>
        <ul>
            <?php
            foreach ($publications as $publication) {
            ?>
            <li>
                <img src="img/covers/<?php echo $publication['image']?>" alt="" style="width: 100px; height: 100px;">
                <br>
                <h3>Leidinys Nr: <?php echo $publication['number'] ?></h3>
            </li>
            <?php
            }
            ?>
        </ul>
   </section>    
</main>

</body>
</html>