<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="assets/img/flavi.png">
    <title>E.D.</title>

    <?php echo $css;?>

  </head>
  <body>
    <header class="site-header">
      <div class="site-header_menubalk">
        <h1 class="site-header__titel"><a href="index.php?page=index">Eva Denys</a></h1>
        <p><a href="index.php?page=index" class="site-header__titelAfkort">E.D.</a></p>
        <nav>
          <ul class="site-header__menu">
            <li class="site-header__items<?php if($currentPage == 'home') echo '-actief';?>"><a href="index.php?page=index">Production build</a></li>
            <li class="site-header__items<?php if($currentPage == 'about') echo '-actief';?>"><a href="index.php?page=about">About</a></li>
          </ul>
          <div hidden id="current"><q lang="en">Current page</q></div>
        </nav>
      </div>

      <?php
      if(!empty($_SESSION['error'])) {
        echo '<div class="errorBalk">' . $_SESSION['error'] . '</div>';
      }
      if(!empty($_SESSION['info'])) {
        echo '<div class="infoBalk">' . $_SESSION['info'] . '</div>';
      }
      ?>
    </header>
    <main id="main">
      <?php echo $content ?>
    </main>
    <footer>
      <p class="copyrightEva">©Eva Denys</p>
    </footer>
    <?php echo $js; ?>
  </body>
</html>
