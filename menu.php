<?php
  session_start();
  if (!isset($g_page)) {
      $g_page = '';
  }
?>
<ul id="menu">
    <li><a href="index.php" <?= ($g_page == 'index') ? "class='active'" : '' ?>>Home</a></li>
    <li><a href="create.php" <?= ($g_page == 'create') ? "class='active'" : '' ?>>New Post</a></li>
    
<?php

if(isset($_SESSION['username']) && trim($_SESSION['username']) !== ''){
?>
    <li><a href="logout.php" <?= ($g_page == 'logout') ? "class='active'" : '' ?>>Logout</a></li>
<?php
}
else{
?>
    <li><a href="login.php" <?= ($g_page == 'login') ? "class='active'" : '' ?>>Login</a></li>
    <li><a href="register.php" <?= ($g_page == 'register') ? "class='active'" : '' ?>>Register</a></li>

<?php
}
?>
    
    <li><a href="privacy.php" <?= ($g_page == 'privacy') ? "class='active'" : '' ?>>Privacy</a></li>
</ul> <!-- END div id="menu" -->

