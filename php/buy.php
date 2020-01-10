<?php

  if(isset($_POST['Buy']) && $_SESSION["wachtwoordCheckArt"] == "true"){

      $nieuweBalance = $geldDB -= $prijsCurrent;

      $sql = "SELECT bought,seller FROM `b4kunstwerken` WHERE id = '$clickt'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              $boughtCheck = $row['bought'];
              $seller = $row['seller'];
          }
      }

      $sql = "SELECT kunstwerken FROM `b4klant` WHERE gebruikersnaam = '$gebruikersnaamDB';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
             $colection = unserialize($row['kunstwerken']);
          }
      }
      if(empty($colection)){
         $colection = [$clickt];
      }
      else{
         array_push($colection,$clickt);
      }

      $compressedColection = serialize($colection);

      if(!$boughtCheck){
          $sql = "UPDATE `b4klant` SET `geld` = '$nieuweBalance',`kunstwerken` = '$compressedColection'  WHERE gebruikersnaam = '$gebruikersnaamDB';";
          if ($conn->query($sql) === true) {
              $sql = "UPDATE `b4kunstwerken` SET `bought` = '1', `Owner` = '$gebruikersnaamDB' WHERE id = '$clickt';";
              if ($conn->query($sql) === true) {
                  header('Location: auction.php');
              }
          }
          if(!empty($seller)){
              $sql = "SELECT geld FROM `b4klant` WHERE gebruikersnaam = '$seller';";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()){
                     $geldSeller = $row['geld'];
                  }
              }
              $geldSeller += $prijsCurrent;
              $sql = "UPDATE `b4klant` SET `geld` = '$geldSeller' WHERE gebruikersnaam = '$seller';";
              if ($conn->query($sql) === true) {
              }
          }
      }
      else {
       echo "All gekocht";
     }
     reloadPost();
  }

  if(isset($_POST['Stop']) && $_SESSION["wachtwoordCheckArt"] == "true"){

      $sellerCheck = false;

      $sql = "SELECT bought,seller FROM `b4kunstwerken` WHERE id = '$clickt'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              $boughtCheck = $row['bought'];
              $seller = $row['seller'];
          }
      }

      if($seller == $gebruikersnaamDB){
        $sellerCheck = true;
      }

      $sql = "SELECT kunstwerken FROM `b4klant` WHERE gebruikersnaam = '$gebruikersnaamDB';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
             $colection = unserialize($row['kunstwerken']);
          }
      }
      if(empty($colection)){
         $colection = [$clickt];
      }
      else{
         array_push($colection,$clickt);
      }

      $compressedColection = serialize($colection);

      if($sellerCheck){
          $sql = "UPDATE `b4klant` SET `kunstwerken` = '$compressedColection'  WHERE gebruikersnaam = '$gebruikersnaamDB';";
          if ($conn->query($sql) === true) {
              $sql = "UPDATE `b4kunstwerken` SET `bought` = '1', `Owner` = '$gebruikersnaamDB' WHERE id = '$clickt';";
              if ($conn->query($sql) === true) {
              }
          }
      }
      reloadPost();
  }
 ?>
