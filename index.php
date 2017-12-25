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
    <p>Nuo pat Kovo 11-osios, kai buvo paskelbta apie atkuriamą Lietuvos Respubliką, labiausiai jutome politinių įžvalgų trūkumą: kaip atskleisti demokratinio, parlamentinio valdymo esmę piliečiams, kaip subrandinti politinės kultūros tradiciją, kad parlamentinėje valstybėje ji taptų puikiai suprantama sąvoka. Net didžiuodamiesi Vasario 16-osios Aktu ir trispalve, primiršdavome 1918 metais Lietuvos Tarybos pasirašyto nutarimo turinį: jame yra nurodyta perspektyva – valstybės santvarką bei santykius su užsieniu turėsiąs nustatyti parlamentas. Nors nenuostabu, kad 1920 metais gegužės 15-ąją susirinkusio Steigiamojo Seimo diena tapo valstybės švente ir buvo minima kaip išskirtinė diena Lietuvos Respublikoje kasmet iki 1926 metų.</p>
</section>
</main>
