<?php
$page_title="Contact";
include('system/header.php');
include ('php_functions/badwordsfilter.php');
$contactform= <<<_END
    <div class="text-center">
        <main class="form-signin w-75 m-auto">
            <form action="contact.php" method="post">
                <h1 class="h3 mb-3 fw-normal">Contact</h1>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" name="name" placeholder="Volledige naam">
                    <label for="floatingName">Volledige naam</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" name="mail" placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                </div>
                <br>
                <div class="form-floating">
                    <textarea class="form-control" id="floatingMessage" name="massage" placeholder="Bericht"></textarea>
                    <label for="floatingPassword">bericht</label>
                </div>
                <br>
                <button class="w-25 btn btn-lg btn-primary" type="submit" value="submit" name="submit">Stuur een email</button>
            </form>
        </main>
    </div>
_END;

if (isset($_POST['submit'])){
    $my_data = $_POST['massage'];
    $cleaned = badWordsfilter($my_data);
    echo "Je hebt een bericht van ".$_POST['mail']."<br>"."Dit bericht is geschreven door ".$_POST['name']."<br><br>".$cleaned;

}else{
    echo $contactform;
}
include('system/footer.php');
