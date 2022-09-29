<?php
$page_title="Inloggen";
include('system/header.php');

//multiLine string maken
$inlogstr= <<<_END
   <div class="text-center"> 
      <main class="form-signin w-50 m-auto">
         <form action="inloggen.php" method="post">
         <h1 class="h3 mb-3 fw-normal">Inloggen</h1>
         <br>
         <div class="form-floating">
            <input type="text" name="inlogNaam" class="form-control" id="floatingInput" placeholder="Gebruikersnaam">
            <label for="floatingInput">Gebruikersnaam</label>
         </div>
         <br>
         <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="wachtwoord" placeholder="Wachtwoord">
            <label for="floatingPassword">Wachtwoord</label>
         </div>
         <br>
         <input type="hidden" name="sw" value="1">
         <button class="w-50 btn btn-lg btn-primary" type="Submit" value="Submit" name="Submit">Inloggen</button>
         </form>
      </main>
   </div>
_END;

if (isset($_POST['Submit'])){
   $inlogNaam=$_POST['inlogNaam'];
   $wachtwoord=$_POST['wachtwoord'];
   echo "";
 }else{
   echo $inlogstr;
 }
  $_SESSION['username'] = $inlogNaam;
  echo $_SESSION['username'];
  if(isset($_SESSION['username'])) {
   echo " "."je bent ingelogd!";
  } else {
   echo "Je bent niet ingelogd!";
  }
 include('system/footer.php');
 ?>




