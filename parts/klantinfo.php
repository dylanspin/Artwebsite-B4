

<div class="regForm marginBottom">
  <div class="regblock">
      <div class="registerInput">
        <?php echo "Username : ".$gebruikersnaamDB; ?>
      </div>
      <div class="registerInput">
        <?php echo "Firstname : ".$voornaamDB; ?>
      </div>
      <div class="registerInput">
        <?php echo "Lastname : ".$achternaamDB; ?>
      </div>
      <div class="registerInput">
        <?php echo "Email : ".$emailDB; ?>
      </div>
      <div class="registerInput">
        <?php echo "PhoneNumber : ".$telefoonNrDB; ?>
      </div>
  </div>
  <div class="regblock rechtsreg rechts">
      <div class="registerInput">
        <?php echo "Residence : ".$woonplaatsDB; ?>
      </div>
      <div class="registerInput">
        <?php echo "Street : ".$straatDB; ?>
      </div>
      <div class="registerInput">
        <?php echo "Housenumber : ".$straatNrDB; ?>
      </div>
      <div class="registerInput">
        <?php echo "Zipcode : ".$postcodeDB; ?>
      </div>
      <div class="registerInput">
        <?php echo "Current balance : $".number_format($geldDB, 2, ',', '.'); ?>
      </div>
  </div>
</div>
