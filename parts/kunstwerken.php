
<form class="artpieces" method="post">
  <?php
      $sql = "SELECT Prijs,kunstenaar,kunstwerk,id FROM `b4kunstwerken`;";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              $prijsKDB = $row['Prijs'];
              $kunstenaarKDB = $row['kunstenaar'];
              $kunstwerkenKDB = $row['kunstwerken'];
              $idnKDB  = $row['id'];

              if(file_exists('art/art'.$idnKDB.'.jpg')){
                  echo "<button type='submit' class='art' name='visit' value='$idnKDB'><img class='image' src='art/art$idnKDB.jpg' alt='Art piece'></button>";
              }
          }
    }
   ?>
</form>
