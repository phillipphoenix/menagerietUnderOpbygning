<?php
/**
 * Created by PhpStorm.
 * User: Phillip Phoelich
 * Date: 20-04-14
 * Time: 11:23
 */
/*
// display form if user has not clicked submit
$successMessage = "Error!";
if (isset($_POST["submit"])) {    // the user has submitted the form
    // Check if the "from" input field is filled out
    if (isset($_POST["email"])) {
        $to = $_POST["from"]; // sender
        $subject = "Urtetur, La Menagerie de H&M";
        // message lines should not exceed 70 characters (PHP rule), so wrap it
        $message = "<html><body>";
        $message .= "<p>Her er Merethe Svahn Hansens kontaktoplysninger, som du har bedt om at få tilsendt i forbindelse med den urtetur du har tilmeldt dig</p>";
        $message .= "<table >
                        <tbody>
                        <tr>
                            <td>Telefon (Efter kl. 17:00):</td>
                            <td>51 58 89 06</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>merethesvahn (snabel-a) googlemail.com</td>
                        </tr>
                        </tbody>
                    </table>";
        // send mail
        $success = mail($to,$subject,$message,"From: La Menagerie de H&M\n");
        if( $success == true )
        {
            $successMessage = "Email sendt!";
        }
        else
        {
            $successMessage = "Emailen kunne desværre ikke sendes... <a class='reload' href='http://www.lamenagerie.dk/success.php#contactInfo'>Prøv igen!</a>";
        }
    }
}*/


include_once("includes/header.php");
?>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="alert alert-warning alert-dismissable onload onload-fade-in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>OBS!</strong> Hjemmesiden er stadig under opbygning! Den vil forhåbentligt snart være klar!
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-success onload onload-fade-in">
            <div class="panel-heading">
                <h3 class="panel-title">Tak for tilmeldingen!</h3>
            </div>
            <div class="panel-body">
                <div class="panel-body-text">
                    <h3>Du er nu tilmeldt!</h3>
                    <p>Tak for din tilmelding. Jeg glæder mig til at fortælle om strandens herligheder og dele mine erfaringer med tilberedningen af dem med dig.</p>
                    <p>Husk at medbringe godt humør, gode sko, en kurv, poser og en saks, hvis du vil have lidt urter med hjem. Hvis du er vegetar/allergiker eller andet, vil jeg gerne have besked.</p>
                    <p>På snarligt urtesyn!</p>
                    <p>Merethe Svahn Hansen</p>
                    <hr>
                    <h4>Kontaktoplysninger</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Telefon (Efter kl. 17:00):</td>
                                <td>51 58 89 06</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>merethesvahn (snabel-a) googlemail.com</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <h4>GEM OPLYSNINGERNE!</h4>
                    <?php /*
                    <hr>
                    <h5 id="contactInfo">Send kontaktoplysninger til mail</h5>
                    <?php if (!isset($_POST["submit"])) { ?>
                    <form action="http://www.lamenagerie.dk/success.php" method="post">
                        Email:  <input type="email" name="email">
                        <button name="submit" type="submit">Send oplysninger</button>
                    </form>
                    <?php } else {
                        echo "<p>" . $successMessage . "</p>";
                    } */?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once("includes/footer.php"); ?>