<?php include 'includes/header.php' ?>
<?php include 'includes/pdo-conn.php' ?>


<main>
    <section>
       <h3>Prisijungimo puslapis</h3>
        <p>
            Atsiprašome, ber prisijūngti gali tik tam skirti asmenys.
        </p>
    </section>
    
    <section class="login">
      <h3 class="login-header">Prisijungimas</h3>
      <form class="login-container" action="php/login.php" method="POST">
        <p><input type="email" placeholder="Email"></p>
        <p><input type="password" placeholder="Password"></p>
        <p><input type="submit" value="Patvirtinti"></p>
      </form>
    </section>
</main>