<nav>
    <ul class="navBar">
      <li><a class="navHome" href="home.php">Home</a></li>
      <li><a class="verCasas" href="/index/casa.php">Casas</a></li>
      <li><a class="verUsuarios" href="/index/user.php">Usuarios</a></li>
      <li><a class="verUsuarios" href="/index/message.php">Mensajes</a></li>
      <li><a class="contact" href="/index/contact.php">¿Alquila o vende su propiedad? Hablemos...</a></li>
    </ul>	
</nav>

<?php 
if (isset($data['error'])){ ?>
    <h3 class="error" id="error">Error: <?=$data['error'];?> </h3>
<?php }?>
