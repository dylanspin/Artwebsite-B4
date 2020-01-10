
<form class="artpieces" method='post'>
  <?php
    for($i=0; $i<=count($kunstwerkenDB); $i++){
        if(file_exists('art/art'.$kunstwerkenDB[$i].'.jpg')){
            echo "<button type='submit' name='sellpage' class='art inline' href='sell.php' value='$kunstwerkenDB[$i]'>
                    <img class='image' src='art/art$kunstwerkenDB[$i].jpg' alt='Art piece'>
                  </button>";
        }
    }
   ?>
</form>
