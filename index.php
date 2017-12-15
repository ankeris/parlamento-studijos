<?php include 'includes/header.php' ?>
<?php include 'includes/pdo-conn.php' ?>
<?php 
    
$sth = $conn->prepare("SELECT * FROM publications ORDER BY number DESC LIMIT 4");
$sth->execute();
$publications = $sth->fetchAll();


?>


<section>
       <h3>Straipsniai</h3>
           <ul id="publication_list">
            <?php
            foreach ($publications as $publication) {
            ?>
                    <li>
                        <a href="publication.php?publicationindex=<?php echo $publication['number']?>">
                            <section>
                            <img src="media/covers/<?php echo $publication['image']?>" alt="" >

                            <p>Leidinys Nr: <?php echo $publication['number'] ?></p>
                            </section>
                        </a>
                    </li>
            <?php } ?>
            </ul>
            <button>Rodyti daugiau</button>
</section>
   
<section>
    <h3>Paskutiniame leidinyje</h3>
</section>

<section>
    <h3>Apie žurnalą</h3>
</section>
</main>
