<?php

  if(isset($_POST['Sell']) && $_SESSION["wachtwoordCheckArt"] = "true"){

      $sellPrice = $_POST['price'];
      $checkOwn = false;

      $sql = "SELECT kunstwerken FROM `b4klant` WHERE gebruikersnaam = '$gebruikersnaamDB';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
             $colection = unserialize($row['kunstwerken']);
          }
      }

      for($i=0; $i<=count($colection)-1; $i++){
        if(!$checkOwn){
          if($colection[$i] == $clickt){
            $checkOwn = true;
            $loc = $i;
          }
        }
      }
      $colection[$loc] = "";
      $compressedColection = serialize($colection);

      if(empty($sellPrice)){
        $checkOwn = false;
      }

      if($checkOwn){
          $sql = "UPDATE `b4klant` SET `kunstwerken` = '$compressedColection'  WHERE gebruikersnaam = '$gebruikersnaamDB';";
          if ($conn->query($sql) === true) {
              $sql = "UPDATE `b4kunstwerken` SET `bought` = '0', `Prijs` = '$sellPrice',`seller` = '$gebruikersnaamDB', `Owner` = ' ' WHERE id = '$clickt';";
              if ($conn->query($sql) === true) {
              }
          }
          $_SESSION['kliktArt'] = $clickt;
          header('Location: buy.php');
      }
      reloadPost();
  }
 ?>
