
<form class="regForm" method="post">
  <div class="regblock">

    <label for="Username" class="regLabel">Username</label>
    <input type="text" class="registerInput" name="Username" placeholder="Username">
    <?php
        if($foutcheck[5]){echo "<div class='fout'></div>";}
        elseif ($foutcheck[6]) {echo "<div class='fout'></div>";}
        elseif ($foutcheck[7]) {echo "<div class='fout'></div>";}
    ?>

    <label for="password" class="regLabel">Pasword</label>
    <input type="password" class="registerInput" name="Paswordreg">
    <?php
        if($foutcheck[2]){echo "<div class='fout'></div>";}
        elseif ($foutcheck[3]) {echo "<div class='fout'></div>";}
    ?>

    <label for="password2" class="regLabel">Repeat password</label>
    <input type="password" class="registerInput" name="Paswordreg2">
    <?php
        if($foutcheck[2]){echo "<div class='fout'></div>";}
        elseif ($foutcheck[3]) {echo "<div class='fout'></div>";}
    ?>

    <label for="Firstname" class="regLabel">Firstname</label>
    <input type="text" class="registerInput" name="Firstname" placeholder="Firstname">
    <?php if($foutcheck[10]){echo "<div class='fout'></div>";} ?>

    <label for="Lastname" class="regLabel">Lastname</label>
    <input type="text" class="registerInput" name="Lastname" placeholder="Lastname">
    <?php if($foutcheck[9]){echo "<div class='fout'></div>";} ?>

    <label for="Email" class="regLabel">Email</label>
    <input type="email" class="registerInput" name="Email" placeholder="Email">
    <?php
        if($foutcheck[8]){echo "<div class='fout'></div>";}
        elseif ($foutcheck[1]) {echo "<div class='fout'></div>";}
    ?>

  </div>
  <div class="regblock rechtsreg">

    <label for="residence" class="regLabel">Residence</label>
    <input type="text" class="registerInput" name="residence" placeholder="residence">
    <?php if($foutcheck[14]){echo "<div class='fout'></div>";}?>

    <label for="street" class="regLabel">Street</label>
    <input type="text" class="registerInput" name="street" placeholder="street">
    <?php if($foutcheck[11]){echo "<div class='fout'></div>";} ?>

    <label for="housenumber" class="regLabel">Housenumber</label>
    <input type="number" class="registerInput" name="housenumber" placeholder="0">
    <?php if($foutcheck[15]){echo "<div class='fout'></div>";}?>

    <label for="zipcode" class="regLabel">Zipcode</label>
    <input type="text" class="registerInput" name="zipcode" placeholder="Zipcode">
    <?php
        if($foutcheck[12]){echo "<div class='fout'></div>";}
        elseif($foutcheck[16]){echo "<div class='fout'></div>";}
    ?>

    <label for="phoneNumber" class="regLabel">PhoneNumber</label>
    <input type="text" class="registerInput" name="phoneNumber" placeholder="PhoneNumber">
    <?php if($foutcheck[13]){echo "<div class='fout'></div>";}?>

    <input type="submit" class="regButton" name="stuur" value="Send">

  </div>
</form>
