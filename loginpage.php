<?php include 'includes/header.php' ?>
<?php include 'includes/pdo-conn.php' ?>


<main>
    <section>
       <h3>Prisijungimo puslapis</h3>
        <p>
            Atsiprašome, ber prisijūngti gali tik tam skirti asmenys.
        </p>
        <?php
        if (isset($message)){
            echo $message;
        }
        ?>
    </section>
    
    <section class="login">
      <h3 class="login-header">Prisijungimas</h3>
      <form class="login-container" method="POST" action="php/login.php">
        <p><input type="text" name="username" placeholder="Prisijungimo vardas"></p>
        <p><input type="password" name="password" placeholder="Slaptažodis"></p>
        <p><input type="submit" name="login" value="Patvirtinti"></p>
      </form>
    </section>
</main> 