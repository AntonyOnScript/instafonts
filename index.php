<?php 

$pageScript = $pageStyle = "main"; 
require_once "inc/header.php";

?>

<section class="main container-fluid flex-collumn align-items-center">
    <div class="container main-cont">
        <div class="row large-logo-cont">
            <div class="col d-flex justify-content-center align-items-end large-logo-field">
                <h1 class="logo large-logo text-center">InstaFonts.me</h1>
            </div>
        </div>
        <div class="row font-field">
            <div class="row">
                <div class="col">
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

<section>

</section>

<?php 

require_once "inc/footer.php";

?>