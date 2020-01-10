
<div class="header">
  <div class="nav">
    <a class='registrenButton none underline' href='index.php'>Menu</a>
    <a class='registrenButton none underline' href='auction.php'>Auction</a>
    <?php
        if($_SESSION["wachtwoordCheckArt"] == "true"){
            echo "<a class='registrenButton none underline' href='colection.php'>Collection</a>";
        }
    ?>
    <div class="registrenButton">
      <?php
          if($_SESSION["wachtwoordCheckArt"] == "true"){
              echo "$".number_format($geldDB, 2, ',', '.');
          }
      ?>
    </div>
  </div>
  <div class="inlogForm">
    <?php
      if($_SESSION["wachtwoordCheckArt"] != "true"){
        echo "<a class='registrenButton none underline' href='inloggen.php'>Login</a>
              <a class='registrenButton green' href='registreren.php'>Join now</a>";
      }
      else{
        echo "<form method='post'>
                <button type='submit' class='registrenButton none underline' name='logout'>Logout</button>
                <div class='registrenButton none'>$gebruikersnaamDB</div>
              </form>";
      }
     ?>
  </div>
  <div class='blackline'></div>
</div>
