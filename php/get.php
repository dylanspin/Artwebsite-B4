
<?php
    session_start();
    error_reporting(0);

    function reloadPost(){
      echo "<script>
            if ( window.history.replaceState ) {
              window.history.replaceState( null, null, window.location.href);
              location.reload(true);
            }
            var scroll = $(window).scrollTop();
            $('html').scrollTop(scroll);
        </script>";
    }
    // else {
    //   echo "mislukt". $sql . "<br>" . $conn->error;
    // }
    $foutcheck = $_SESSION['fout'];
    $ingelogt = $_SESSION["nuArt"];

    include 'connect.php';

    $sql = "SELECT gebruikersnaam,voornaam,achternaam,email,geld,woonplaats,straat,straatNr,postcode,telefoonNr,kunstwerken,klantenNr FROM `b4klant` WHERE gebruikersnaam = '$ingelogt';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $gebruikersnaamDB = $row['gebruikersnaam'];
            $voornaamDB = $row['voornaam'];
            $achternaamDB = $row['achternaam'];
            $emailDB  = $row['email'];
            $geldDB = $row['geld'];
            $woonplaatsDB = $row['woonplaats'];
            $straatDB = $row['straat'];
            $straatNrDB = $row['straatNr'];
            $postcodeDB = $row['postcode'];
            $telefoonNrDB = $row['telefoonNr'];
            $kunstwerkenDB = unserialize($row['kunstwerken']);
            $klantenNrDB = $row['klantenNr'];
        }
    }
 ?>
