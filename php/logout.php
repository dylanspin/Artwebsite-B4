
<?php

    if (isset($_POST['logout'])) {
        $_SESSION["nuArt"] = "";
        $_SESSION["wachtwoordCheckArt"] = "false";
        reloadPost();
    }

 ?>
