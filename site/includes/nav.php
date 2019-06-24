<?php
    session_start();
?>

<header>
        <div class="h-logo">
            <a href="index.php"><img src="media/logo.svg"></a>
        </div>
        <nav class="h-nav">
            <ul>
                <a href="index.php">
                    <li class="ativo">Home</li>
                </a>
                <a href="sobrenos.php">
                    <li>Sobre nós</li>
                </a>
                <a href="servicos.php">
                    <li>Serviços</li>
                </a>
                <a href="precos.php">
                    <li>Preços</li>
                </a>
                <a href="index.php#contatos">
                    <li>Contactos</li>
                </a>
            </ul>
        </nav>
        <div class="h-login">   
        <?php 
            if (isset($_SESSION['u_id'])) {
              echo'            <form action="includes/logout.inc.php" method="POST">
              <button type="submit" name="submit">LogOut</button>
            </form>';
            } else {
              echo '            <form action="includes/login.inc.php" method="POST">
              <input type="text" name="uid" id="uid" placeholder="Username/email">
              <input type="password" name="pwd" id="pwd" placeholder="Password">
              <button value="submit" id="submit" name="submit">Login</button>
              <a href="signup.php">Sign Up</a>
          </form>';
            }
        ?>

        </div>
    </header>