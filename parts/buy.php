
  <?php
    $clickt = $_SESSION['kliktArt'];
    echo "<img class='artvisit' src='art/art$clickt.jpg' alt='Art piece'>";
   ?>

   <div class="visitText">
    <?php
        $sql = "SELECT Prijs,kunstenaar,kunstwerk,bought,seller,Owner FROM `b4kunstwerken` WHERE id = '$clickt'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $prijsCurrent = $row['Prijs'];
                $kunstenaarCurrent  = $row['kunstenaar'];
                $kunstwerkenCurrent  = $row['kunstwerk'];
                $boughtCheck = $row['bought'];
                $seller = $row['seller'];
                $owner = $row['Owner'];
            }
        }
        echo "<div class='infovisit'>Artist : ".$kunstenaarCurrent;
        echo "<div class='infovisit'>Piece Name : ".$kunstwerkenCurrent;
        echo "<div class='infovisit'>Price : $".number_format($prijsCurrent, 2, ',', '.')."</div>";

        if($_SESSION["wachtwoordCheckArt"] == "true"){
            if($_SERVER['PHP_SELF'] == '/kunstwerken database/Art Website B4/sell.php') {
                if($seller != $gebruikersnaamDB){
                    echo "<form class='' method='post'>
                            <label for='' class='regLabel'>Resell Price</label>
                            <input type='number' class='auctionbutton' name='price' placeholder='Price'>
                            <input type='submit' class='auctionbutton' name='Sell' value='Sell'>
                          </form>";
                }
                else{
                    if($owner == $gebruikersnaamDB){
                        echo "<form class='' method='post'>
                                <label for='' class='regLabel'>Resell Price</label>
                                <input type='number' class='auctionbutton' name='price' placeholder='Price'>
                                <input type='submit' class='auctionbutton' name='Sell' value='Sell'>
                              </form>";
                    }
                    else{
                        echo "<div class='infovisit'>Now on the auction</div>";
                    }
                }
            }
            else{
                if($boughtCheck){
                  echo "<div class='infovisit'>Verkocht</div>";
                }
                else{
                    if($seller == $gebruikersnaamDB){
                        echo "<form class='' method='post'>
                                <input type='submit' class='auctionbutton' name='Stop' value='Stop Sale'>
                              </form>";
                    }
                    else{
                        echo "<form class='' method='post'>
                                <input type='submit' class='auctionbutton' name='Buy' value='Buy'>
                              </form>";
                    }
                }
            }
        }

     ?>
   </div>
