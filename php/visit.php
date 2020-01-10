
<?php
  if (isset($_POST['visit'])) {
    $_SESSION['kliktArt'] = $_POST['visit'];
    header('Location: buy.php');
  }
  if (isset($_POST['sellpage'])) {
    $_SESSION['kliktArt'] = $_POST['sellpage'];
    header('Location: sell.php');
  }
 ?>
