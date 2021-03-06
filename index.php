<?php
/**
 * Whitecoin XWC Summit 2017 homepage
 *
 */
include 'settings.php';
include 'classes/Locale.php';
include 'classes/Parsedown.php';
include 'classes/Minify.php';

$locale = strtolower(trim($_GET['language']));

// default to english
if (!array_key_exists($locale, $arrLocales)) {
    $locale = 'en';
}
$Translate = new MartijnOud\Locale($locale);
$Parsedown = new Parsedown();

ob_start("MinifyHTML");
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($locale); ?>">
<head>
<meta charset="utf-8">
<title><?php echo $Translate->__('page-title');?></title>
<meta name="description" content="<?php echo $Translate->__('page-description');?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style><?php include __DIR__ . '/css/critical.css';?></style>

<link rel="alternate" href="<?php echo 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://'.$_SERVER['HTTP_HOST'];?>" hreflang="x-default" />
<?php
foreach ($arrLocales as $key => $value) {
    echo '<link rel="alternate" href="http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://'.$_SERVER['HTTP_HOST'].'?language='.$key.'" hreflang="'.$key.'">';
}

if (!empty($AnalyticsUA)) {
?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $AnalyticsUA;?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', '<?php echo $AnalyticsUA;?>');
    </script>
<?php
}
?>

</head>
<body>

<section class="hero is-fullheight">
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title"><?php echo $Translate->__('xwc-summit-china-2017');?></h1>
      <h2 class="subtitle"><?php echo $Translate->__('2017-12-10-shanghai-china');?></h2>
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
                    <div class="countdown columns has-text-centered">
                        <div class="countdown-days column">
                            <span class="countdown-days-amount">00</span>
                            <span><?php echo $Translate->__('days');?></span>
                        </div>
                        <div class="countdown-hours column">
                            <span class="countdown-hours-amount">00</span>
                            <span><?php echo $Translate->__('hours');?></span>
                        </div>
                        <div class="countdown-minutes column">
                            <span class="countdown-minutes-amount">00</span>
                            <span><?php echo $Translate->__('minutes');?></span>
                        </div>
                        <div class="countdown-seconds column">
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
    <div class="container">
        <h2 class="title"><?php echo $Translate->__('speakers');?></h2>
        <div class="columns">
            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-1by1">
                            <img src="/img/photo-oizopower.png" alt="<?php echo $Translate->__('oizopower');?>">
                        </figure>
                    </div>
                    <div class="card-content">
                        <h3 class="title"><?php echo $Translate->__('oizopower');?></h3>
                        <p><?php echo $Parsedown->text($Translate->__('oizopower-introduction--markdown'));?></p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-1by1">
                            <img src="/img/photo-lizhi.png" alt="<?php echo $Translate->__('lizhi');?>">
                        </figure>
                    </div>
                    <div class="card-content">
                        <h3 class="title"><?php echo $Translate->__('lizhi');?></h3>
                        <p><?php echo $Parsedown->text($Translate->__('lizhi-introduction--markdown'));?></p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-1by1">
                            <img src="/img/photo-waligu.png" alt="<?php echo $Translate->__('waligu');?>">
                        </figure>
                    </div>
                    <div class="card-content">
                        <h3 class="title"><?php echo $Translate->__('waligu');?></h3>
                        <p><?php echo $Parsedown->text($Translate->__('waligu-introduction--markdown'));?></p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-1by1">
                            <img src="/img/photo-will.png" alt="<?php echo $Translate->__('will');?>">
                        </figure>
                    </div>
                    <div class="card-content">
                        <h3 class="title"><?php echo $Translate->__('will');?></h3>
                        <p><?php echo $Parsedown->text($Translate->__('will-introduction--markdown'));?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container content">
        <div class="columns">
            <div class="column is-4">
                <h2 class="title"><?php echo $Translate->__('details');?></h2>
                <?php echo $Parsedown->text($Translate->__('details-venue-meeting--markdown'));?>
                <?php echo $Parsedown->text($Translate->__('details-venue-banquet--markdown'));?>
                <?php echo $Parsedown->text($Translate->__('details-public-transport--markdown'));?>
                <?php echo $Parsedown->text($Translate->__('details-attendance-package--markdown'));?>
            </div>
            <div class="column is-8">
                <table class="table is-bordered is-striped is-fullwidth">
                    <thead>
                        <tr>
                            <th class="has-text-centered" colspan="2"><?php echo $Translate->__('event-agenda');?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $Translate->__('event1');?></td>
                            <td><?php echo $Translate->__('event1-details');?></td>
                        </tr>
                        <tr>
                            <td><?php echo $Translate->__('event2');?></td>
                            <td><?php echo $Translate->__('event2-details');?></td>
                        </tr>
                        <tr>
                            <td><?php echo $Translate->__('event3');?></td>
                            <td><?php echo $Translate->__('event3-details');?></td>
                        </tr>
                        <tr>
                            <td><?php echo $Translate->__('event4');?></td>
                            <td><?php echo $Translate->__('event4-details');?></td>
                        </tr>
                        <tr>
                            <td><?php echo $Translate->__('event5');?></td>
                            <td><?php echo $Translate->__('event5-details');?></td>
                        </tr>
                        <tr>
                            <td><?php echo $Translate->__('event6');?></td>
                            <td><?php echo $Translate->__('event6-details');?></td>
                        </tr>
                        <tr>
                            <td><?php echo $Translate->__('event7');?></td>
                            <td><?php echo $Translate->__('event7-details');?></td>
                        </tr>
                        <tr>
                            <td><?php echo $Translate->__('event8');?></td>
                            <td><?php echo $Translate->__('event8-details');?></td>
                        </tr>
                        <tr>
                            <td><?php echo $Translate->__('event9');?></td>
                            <td><?php echo $Translate->__('event9-details');?></td>
                        </tr>
                        <tr>
                            <td><?php echo $Translate->__('event10');?></td>
                            <td><?php echo $Translate->__('event10-details');?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container content pricing">
        <h2 class="title has-text-centered"><?php echo $Translate->__('choose-option');?></h2>

        <div class="columns">
            <div class="column is-4 is-offset-1 pricing-option">
                <h4 class="subtitle has-text-centered is-uppercase has-text-weight-light is-spaced"><?php echo $Translate->__('standard');?></h4>
                <h2 class="title has-text-centered"><?php echo $Translate->__('standard-price');?></h2>
                <?php echo $Parsedown->text($Translate->__('standard-details--markdown'));?>
            </div>
            <div class="column is-4 is-offset-2 pricing-option">
                <h4 class="subtitle has-text-centered is-uppercase has-text-weight-light is-spaced"><?php echo $Translate->__('premium');?></h4>
                <h2 class="title has-text-centered"><?php echo $Translate->__('premium-price');?></h2>
                <?php echo $Parsedown->text($Translate->__('premium-details--markdown'));?>
            </div>
        </div>
    </div>
</section>

<section class="hero hero-footer is-medium">
    <div class="hero-body">
        <div class="container content has-text-centered">
            <a href="<?php echo $Translate->__('call-to-action-href');?>" class="button is-large is-primary is-inverted is-outlined"><?php echo $Translate->__('call-to-action');?></a>
        </div>
    </div>
</section>

<div class="footer">
    <div class="container">
        <div class="columns">
            <div class="column is-8 content">
                <p><?php echo $Translate->__('whitecoin-social');?></p>
                <ul>
                    <li><a href="https://twitter.com/WhiteCoiner" rel="nofollow">Twitter</a></li>
                    <li><a href="https://www.facebook.com/WhitecoinXWC/" rel="nofollow">Facebook</a></li>
                    <li><a href="https://www.reddit.com/r/whitecoin/" rel="nofollow">Reddit</a></li>
                </ul>
            </div>
            <div class="column is-4">
               <form method="get">
                   <div class="select is-medium is-pulled-right">
                       <select name="language" onchange="this.form.submit()">
                       <?php
                       foreach ($arrLocales as $key => $val) {
                           echo '<option value="'.$key.'" '.($key == $locale ? 'selected' : '').'>'.$val.'</option>';
                       }
                       ?>
                       </select>
                   </div>
               </form>
            </div>
        </div>
    </div>
</div>

<noscript id="deferred-styles">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main.min.css">
</noscript>
<script>
var loadDeferredStyles=function(){var e=document.getElementById("deferred-styles"),t=document.createElement("div");t.innerHTML=e.textContent,document.body.appendChild(t),e.parentElement.removeChild(e)},raf=requestAnimationFrame||mozRequestAnimationFrame||webkitRequestAnimationFrame||msRequestAnimationFrame;raf?raf(function(){window.setTimeout(loadDeferredStyles,0)}):window.addEventListener("load",loadDeferredStyles);
</script>

<script>
// lazy load full screen image
(function() {
    document.getElementsByClassName('hero')[0].classList.add('hero-background');
})();

// Countdown timer
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