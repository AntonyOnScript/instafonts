<?php 

$pageScript = $pageStyle = "main"; 
require_once "inc/header.php";

?>

<section class="container-fluid main flex-column align-items-center">
    <div class="container main-cont">
        <div class="row large-logo-cont">
            <div class="col d-flex justify-content-center align-items-end large-logo-field">
                <h1 class="logo large-logo text-center">InstaFonts.me</h1>
            </div>
        </div>
        <div class="row font-field">
            <div class="row">
                <div class="col sm-4">
                    <input type="text" class="form-control typed-text" placeholder="Your phrase, nickname or caption here.">
                </div>
                <div class="col-4">
                    <select class="form-control select-font">
                        <option value="" readonly>Select a Font</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <textarea class="form-field result-area" placeholder="Your result will be shown here."></textarea>
                </div>
            </div>
            <div class="row convert-button-field">
                <div class="col d-flex justify-content-center">
                    <input type="button" value="Convert" class="btn btn-dark convert-button">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid about d-flex flex-column align-items-center">
    <div class="container">
        <h1 class="text-center about-title">So... where can i use these custom fonts?</h1>
        <p class="text-center about-paragraph description">Basically everywhere you want!</p>
        <div class="places d-flex flex-column align-items-center">
            <img src="assets/img/whatsapp.png" alt="">
            <p class="text-center about-paragraph">On your whatsapp status or name!</p>
        </div>
        <div class="places d-flex flex-column align-items-center">
            <img src="assets/img/instagram.png" alt="">
            <p class="text-center about-paragraph">On your Instagram name, bio or photos' captions!</p>
        </div>
        <div class="places d-flex flex-column align-items-center">
            <img src="assets/img/twitter.png" alt="">
            <p class="text-center about-paragraph">On your twitter name, bio or posts!</p>
        </div>
        <div class="places d-flex flex-column align-items-center">
            <img src="assets/img/assault-rifle.png" alt="">
            <p class="text-center about-paragraph">On your favorite games, like PUBG, Free Fire, Mobile Legends and many others!</p>
        </div>
    </div>
</section>

<?php 

require_once "inc/footer.php";

?>