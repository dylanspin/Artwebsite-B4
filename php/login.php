<?php
    $username = $_POST['gebruikersnaam'];  //krijgt de gebruikers naam input
    $password = $_POST['password']; //Krijgt de wachtwoord input
    $true = 0; //een tel voor het kijken of

    if(isset($_POST['login'])){
        $sql = "SELECT gebruikersnaam , wachtwoord , email FROM `b4klant` WHERE gebruikersnaam = '$username';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($password == $row['wachtwoord']){
                    $true ++;
                }
                if($username == $row['gebruikersnaam']){
                    $true ++;
                }
                if($true == 2){
                    $_SESSION["wachtwoordCheckArt"] = "true";
                    $_SESSION["nuArt"] = $username;
                    header('Location: index.php');
                }
                else{
                    $_SESSION["wachtwoordCheckArt"] = "false";
               }
            }
            $_SESSION["test"] = $_SESSION["wachtwoordCheckArt"];
        }
        reloadPost();
    }
 ?>
