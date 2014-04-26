<?php
/**
 * Created by PhpStorm.
 * User: Phillip Phoelich
 * Date: 20-04-14
 * Time: 11:23
 */

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
                <h3 class="panel-title">Workshop - Smag for strandens skønne urter</h3>
            </div>
            <div class="panel-body">
                <div class="panel-body-text">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Dato & tid:</td>
                                <td>25/5 og 22/6, kl. 9:30</td>
                            </tr>
                            <tr>
                                <td>Sluttid:</td>
                                <td>Ca. kl. 14:00</td>
                            </tr>
                            <tr>
                                <td>Mødested:</td>
                                <td>P-Pladsen ved Comwell Køge/Hvide hus</td>
                            </tr>
                            <tr>
                                <td>Slutsted:</td>
                                <td>Udsigten på Sønder Mole</td>
                            </tr>
                            <tr>
                                <td>Sidste tilmelding:</td>
                                <td>Hhv. 19/5 og 16/6</td>
                            </tr>
                            <tr>
                                <td>Pris pr. person:</td>
                                <td>245 kr.</td>
                            </tr>
                            <tr>
                                <td>Turleder:</td>
                                <td>Merethe Svahn Hansen</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <p>Har du lyst til at smage og tilberede nogle af strandens vilde urter, så er denne workshop noget for dig. På en kort vandring langs stranden, bestemmer og samler vi spiselige urter til vores ”grønne” frokost, som vi tilbereder i udekøkkenet ved Udsigten på Sønder Mole.</p>
                    <p>Du lærer at genkende, indsamle og bestemme og ikke mindst smage på et udvalg af meget anvendelige og velsmagende urter, og du får tips og ideer til, hvordan du opbevarer, tilbereder og serverer herlighederne for familie og venner.</p>
                    <p>”Alle kan snuppe en håndfuld urter med på vejen hjem med ungerne fra børnehaven, fra hundelufteturen eller løbeturen, men det kræver, at vi ved, hvad vi skal samle, hvad der smager godt og hvad der er let og ligetil at tilberede. Det skal være sjovt og sikkert!”</p>
                    <p><span style="font-weight: bold;">Urtetema:</span> Hybenrose, mælde, hjertekarse, agurkeurt, kvan, strandkarse, røllike, stenurt</p>
                    <hr>
                    <div class="participants">
                        <p>Tilmelding til turene foregår efter "først til mølle"-princippet (min 12 og max 20 deltagere):</p>
                        <div class="participants-bar">
                            Deltagere d. 25/5: 0 af 20
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                            </div>
                        </div>
                        <div class="participants-bar">
                            Deltagere d. 22/6: 0 af 20
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                            </div>
                        </div>
                        <span>Deltagerantallet opdateres ikke automatisk, så de er vejledende.</span>
                    </div>
                    <hr>
                    <div class="signup">
                        <h4 class="signup-title">Pris: 245 kr.</h4>
                        <!-- PayPal -->
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="WF74K33T39RY2">
                            <table>
                                <tr><td><input type="hidden" name="on0" value="Vælg dato:">Vælg dato:</td></tr><tr><td><select name="os0">
                                            <option value="25/5-2014">25/5-2014 245,00 DKK</option>
                                            <option value="22/6-2014">22/6-2014 245,00 DKK</option>
                                        </select> </td></tr>
                            </table>
                            <input type="hidden" name="currency_code" value="DKK">
                            <input type="image" src="https://www.paypalobjects.com/da_DK/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal – den sikre og nemme måde at betale på nettet.">
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-primary onload onload-fade-in">
            <div class="panel-heading">
                <h3 class="panel-title">Om Merethe Svahn Hansen</h3>
            </div>
            <div class="panel-body">
                <div class="panel-body-text">
                    <img src="img/indeximg.jpg">
                    <p>Merethe Svahn Hansen er indehaver af La Menagerie de H & M og lokal urtedronning. Merethe har gennem flere år guidet ”smag for naturen”-ture i Dansk Vandrelaug i samarbejde med Vallø Camping og Vallø Slotskro. Merethe brænder for at få mere natur ind vores dagligdag.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once("includes/footer.php"); ?>