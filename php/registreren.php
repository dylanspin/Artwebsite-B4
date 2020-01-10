<?php
    /*dit is van een ander project van mij gepakt dus niet alles past supper goed bij dit project*/

    $gebruikersnaam = mysql_real_escape_string(strip_tags($_POST['Username']));
    $wachtwoord = mysql_real_escape_string(strip_tags($_POST['Paswordreg']));
    $wachtwoord2 = mysql_real_escape_string(strip_tags($_POST['Paswordreg2']));
    $voornaam = mysql_real_escape_string(strip_tags($_POST['Firstname']));
    $achternaam = mysql_real_escape_string(strip_tags($_POST['Lastname']));
    $email = mysql_real_escape_string(strip_tags($_POST['Email']));
    $woonplaats = mysql_real_escape_string(strip_tags($_POST['residence']));
    $straat = mysql_real_escape_string(strip_tags($_POST['street']));
    $straatNr = mysql_real_escape_string(strip_tags($_POST['housenumber']));
    $postcode = mysql_real_escape_string(strip_tags($_POST['zipcode']));
    $telefoonNr = mysql_real_escape_string(strip_tags($_POST['phoneNumber']));

    session_start();
    include 'connect.php';
    include 'block.php';

    $checkAR = [$gebruikersnaam,$wachtwoord,$wachtwoord2,$voornaam,$achternaam,$email,$woonplaats,$straat,$straatNr,$postcode,$telefoonNr];

    $goed = true;
    $reg1 = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/i";//wachtwoord check.
    $reg2 = "/^[^<,\"@/{}()*$%?=>:|;#]*$/i";//standaard check
    $reg3 = "/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i";//email check
    $reg4 = "(script|php)";
    $reg5 = '~\A[1-9]\d{3} ?[a-zA-Z]{2}\z~';
    $fout = [0,0,0,0,0,0,0,0,0,0,0,0];

    if(isset($_POST['stuur'])){
        $sql2 = "SELECT gebruikersnaam FROM `b4klant` WHERE gebruikersnaam = '$gebruikersnaam';";
        $result = $conn->query($sql2);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $vergelijk = $row['gebruikersnaam'];
            }
        }

        $sql = "SELECT email FROM `b4klant` WHERE email = '$email';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $vergelijk2 = $row['email'];
            }
        }

        $checks = [$voornaam,$achternaam,$woonplaats];
        for($b=9; $b<=11; $b++){
            if(strlen($checks[$b-9]) <= 1){
                $fout[$b] = 1;
            }
        }
        if(preg_match($reg4,$postcode)){
            $goed = false;
            $fout[12] = 1;
        }
        if(strlen($telefoonNr) == 0){
            $goed = false;
            $fout[13] = 1;
        }
        if(strlen($woonplaats) <= 0){
            $goed = false;
            $fout[14] = 1;
        }
        if(strlen($straatNr) <= 0){
            $goed = false;
            $fout[15] = 1;
        }
        if(strlen($postcode) <= 0){
            $goed = false;
            $fout[16] = 1;
        }
        for($i=0; $i<=count($checkAR)-1; $i++){//script check
            if(preg_match($reg4,$checkAR[$i])){
                $goed = false;
                $fout[0] = 1;
            }
        }
        if(!preg_match($reg3,$email)){//email check
            $goed = false;
            $fout[1] = 1;
        }
        if(preg_match($reg1,$wachtwoord) && preg_match($reg1,$wachtwoord2)){//wachtwoord check
            if(!$wachtwoord == $wachtwoord2){//double check wachtwoord
                $goed = false;
                $fout[2] = 1;
            }
        }
        else{//als de wachtwoord check fout was
            $goed = false;
            $fout[3] = 1;
        }
        if(strlen($gebruikersnaam) > 30){//Gebruikersnaam checkt als de naam niet langer is dan 30 chars
            $goed = false;
            $fout[5] = 1;
        }
        if(strlen($gebruikersnaam) <= 1){//checkt als er een gebruikersnaam is invult
            $goed = false;
            $fout[6] = 1;
        }
        if(strlen($vergelijk)>0){//checkt als de gebruikersnaam all bestaat
            $goed = false;
            $fout[7] = 1;
        }
        if(strlen($vergelijk2)>0){//checkt voor als de email all in gebruik is.
            $goed = false;
            $fout[8] = 1;
        }
        if($goed){
            $_SESSION['test'] = "Gelukt met een account aan maken.";
            $fout = [0,0,0,0,0,0,0,0,0,0,0,0];
            $sql = "INSERT INTO `b4klant` (`gebruikersnaam`,`wachtwoord`,`email`,`voornaam`,`achternaam`,`woonplaats`,`straat`,`straatNr`,`postcode`,`telefoonNr`) VALUES
            ('$gebruikersnaam','$wachtwoord','$email','$voornaam','$achternaam','$woonplaats','$straat','$straatNr','$postcode','$telefoonNr');";
            if ($conn->query($sql) === true) {
              $_SESSION["wachtwoordCheckArt"] = "true";
              $_SESSION["nuArt"] = $gebruikersnaam;
              header('Location: index.php');
            }
        }
        $goed = true;
        $_SESSION['fout'] = $fout;
        reloadPost();
    }
 ?>
