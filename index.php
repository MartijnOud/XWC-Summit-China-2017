<?php
/**
 * Temp homepage
 *
 */

include 'classes/Locale.php';
include 'classes/Parsedown.php';

$locale = strtolower(trim($_GET['language']));
$arrLocales = ['en'];

// default to english
if (!in_array($locale, $arrLocales)) {
    $locale = 'en';
}
$Translate = new MartijnOud\Locale($locale);

$Parsedown = new Parsedown();
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($locale); ?>">
<head>
<title><?php echo $Translate->__('page-title');?></title>
<meta name="description" content="<?php echo $Translate->__('page-description');?>">

<!-- @todo: social -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
<link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>

<section class="hero is-fullheight">
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title"><?php echo $Translate->__('xwc-summit-china-2017');?></h1>
      <h2 class="subtitle"><?php echo $Translate->__('2017-10-12-shanghai-china');?></h2>
    </div>
  </div>
</section>

<section class="section">
    <div class="container content">
        <div class="tile is-ancestor">
            <div class="tile is-child is-7">
                <h1 class="title"><?php echo $Translate->__('about-the-xwc-summit');?></h1>
                <?php echo $Parsedown->text($Translate->__('about-the-xwc-summit-introduction--markdown'));?>
            </div>
            <div class="tile is-vertical is-parent">
                <div class="tile box is-child">
                    <h2 class="subtitle"><?php echo $Translate->__('where');?></h2>
                    <?php echo $Parsedown->text($Translate->__('where-details--markdown'));?>
                </div>
                <div class="tile box is-child">
                    <h2 class="subtitle"><?php echo $Translate->__('when');?></h2>
                    <div class="countdown">
                        <div class="countdown-days">
                            <span class="countdown-days-amount">00</span>
                            <span><?php echo $Translate->__('days');?></span>
                        </div>
                        <div class="countdown-hours">
                            <span class="countdown-hours-amount">00</span>
                            <span><?php echo $Translate->__('hours');?></span>
                        </div>
                        <div class="countdown-minutes">
                            <span class="countdown-minutes-amount">00</span>
                            <span><?php echo $Translate->__('minutes');?></span>
                        </div>
                        <div class="countdown-seconds">
                            <span class="countdown-seconds-amount">00</span>
                            <span><?php echo $Translate->__('seconds');?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container content">
        <h2 class="title"><?php echo $Translate->__('speakers');?></h2>
        <div class="columns">
            <div class="column">
                <h3 class="subtitle"><?php echo $Translate->__('oizopower');?></h3>
                <img src="http://placehold.it/500x500" alt="<?php echo $Translate->__('oizopower');?>">
                <p><?php echo $Parsedown->text($Translate->__('oizopower-introduction--markdown'));?></p>
            </div>
            <div class="column">
                <h3 class="subtitle"><?php echo $Translate->__('lizhi');?></h3>
                <img src="http://placehold.it/500x500" alt="<?php echo $Translate->__('lizhi');?>">
                <p><?php echo $Parsedown->text($Translate->__('lizhi-introduction--markdown'));?></p>
            </div>
            <div class="column">
                <h3 class="subtitle"><?php echo $Translate->__('waligu');?></h3>
                <img src="http://placehold.it/500x500" alt="<?php echo $Translate->__('waligu');?>">
                <p><?php echo $Parsedown->text($Translate->__('waligu-introduction--markdown'));?></p>
            </div>
            <div class="column">
                <h3 class="subtitle"><?php echo $Translate->__('will');?></h3>
                <img src="http://placehold.it/500x500" alt="<?php echo $Translate->__('will');?>">
                <p><?php echo $Parsedown->text($Translate->__('will-introduction--markdown'));?></p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container content">
        <h2 class="title"><?php echo $Translate->__('choose-option');?></h2>

        <div class="columns">
            <div class="column is-2 is-offset-2">
                <h4 class="subtitle"><?php echo $Translate->__('standard');?></h4>
                <h2 class="title"><?php echo $Translate->__('standard-price');?></h2>
                <ul>
                    <li><?php echo $Translate->__('standard-feature-1');?></li>
                    <li><?php echo $Translate->__('standard-feature-2');?></li>
                    <li><?php echo $Translate->__('standard-feature-3');?></li>
                    <li><?php echo $Translate->__('standard-feature-4');?></li>
                    <li><?php echo $Translate->__('standard-feature-5');?></li>
                </ul>
            </div>
            <div class="column is-2 is-offset-3">
                <h4 class="subtitle"><?php echo $Translate->__('premium');?></h4>
                <h2 class="title"><?php echo $Translate->__('premium-price');?></h2>
                <ul>
                    <li><?php echo $Translate->__('premium-feature-1');?></li>
                    <li><?php echo $Translate->__('premium-feature-2');?></li>
                    <li><?php echo $Translate->__('premium-feature-3');?></li>
                    <li><?php echo $Translate->__('premium-feature-4');?></li>
                    <li><?php echo $Translate->__('premium-feature-5');?></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container content">
        <h2 class="title"><?php echo $Translate->__('details');?></h2>
        <?php echo $Parsedown->text($Translate->__('details-venue-meeting--markdown'));?>
        <?php echo $Parsedown->text($Translate->__('details-venue-banquet--markdown'));?>
        <?php echo $Parsedown->text($Translate->__('details-public-transport--markdown'));?>
        <?php echo $Parsedown->text($Translate->__('details-attendance-package--markdown'));?>
    </div>
</section>

<script>
// lazy load full screen image
(function() {
    document.getElementsByClassName('hero')[0].classList.add('hero-background');
})();

var countDownDate = new Date("Dec 10, 2017 13:30:00").getTime();
var x = setInterval(function() {

  var now = new Date().getTime();
  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementsByClassName('countdown-days-amount')[0].innerHTML = days;
  document.getElementsByClassName('countdown-hours-amount')[0].innerHTML = hours;
  document.getElementsByClassName('countdown-minutes-amount')[0].innerHTML = minutes;
  document.getElementsByClassName('countdown-seconds-amount')[0].innerHTML = seconds;

}, 1000);
</script>
</body>
</html>