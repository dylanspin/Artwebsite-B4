
  <table class="List">
    <div class="kopHist">
      bought art:
    </div>
    <tr>
      <td>Name</td>
      <td>Seller</td>
      <td>Art</td>
      <td>Cost</td>
      <td>Date-bought</td>
    </tr>
    <?php
      $sql = "SELECT Naamklant,Verkooper,kunstwerk,Prijs,aankoopdatum FROM `b4aankoop` WHERE naamKlant = '$gebruikersnaamDB'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              $value1 = $row['Naamklant'];
              $value2 = $row['Verkooper'];
              $value3 = $row['kunstwerk'];
              $value4 = number_format($row['Prijs'], 2, ',', '.');
              $value5 = $row['aankoopdatum'];

              echo "<tr>
                      <td>$value1</td>
                      <td>$value2</td>
                      <td>$value3</td>
                      <td>$value4</td>
                      <td>$value5</td>
                  </tr>";
          }
      }
     ?>
  </table>
  <br>
  <table class="List">
    <div class="kopHist">
      Sold art:
    </div>
    <tr>
      <td>Buyer </td>
      <td>Seller</td>
      <td>Art</td>
      <td>Price</td>
      <td>Date-sold</td>
    </tr>
    <?php
      $sql = "SELECT Naamklant,Verkooper,kunstwerk,Prijs,aankoopdatum FROM `b4aankoop` WHERE Verkooper = '$gebruikersnaamDB'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              $value1 = $row['Naamklant'];
              $value2 = $row['Verkooper'];
              $value3 = $row['kunstwerk'];
              $value4 = number_format($row['Prijs'], 2, ',', '.');
              $value5 = $row['aankoopdatum'];

              echo "<tr>
                      <td>$value1</td>
                      <td>$value2</td>
                      <td>$value3</td>
                      <td>$value4</td>
                      <td>$value5</td>
                  </tr>";
          }
      }
     ?>
  </table>
