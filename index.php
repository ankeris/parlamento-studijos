<?php include 'includes/header.php' ?>
<?php include 'includes/pdo-conn.php' ?>
<?php 
    
$sth = $conn->prepare("SELECT * FROM publications");
$sth->execute();
$publications = $sth->fetchAll();


?>

<main>
    <section>
    <h3>Straipsniai</h3>
        <ul>
            <?php
            foreach ($publications as $publication) {
            ?>
               
                    <li>
                        <a href="publication.php?publicationindex=<?php echo $publication['number']?>">
                            <section>
                            <img src="media/covers/<?php echo $publication['image']?>" alt="" style="width: 100px; height: 100px;">

                            <p>Leidinys Nr: <?php echo $publication['number'] ?></p>
                            </section>
                        </a>
                    </li>

                
            <?php } ?>
        </ul>
   </section>
</main>
