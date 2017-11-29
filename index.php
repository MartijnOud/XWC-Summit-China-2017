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
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
<link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>

<section class="hero is-fullheight">
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title"><?php echo $Parsedown->text($Translate->__('xwc-summit-china-2017'));?></h1>
      <h2 class="subtitle"><?php echo $Parsedown->text($Translate->__('2017-10-12-shanghai-china'));?></h2>
    </div>
  </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="title"><?php echo $Parsedown->text($Translate->__('about-the-xwc-summit'));?></h2>
        <p><?php echo $Parsedown->text($Translate->__('about-the-xwc-summit-introduction'));?></p>
        <p><?php echo $Parsedown->text($Translate->__('about-the-xwc-summit-continued'));?></p>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="title"><?php echo $Parsedown->text($Translate->__('Speakers'));?></h2>
        <div class="columns">
            <div class="column">
                <h3 class="subtitle"><?php echo $Parsedown->text($Translate->__('oizopower'));?></h3>
                <img src="http://placehold.it/500x500" alt="<?php echo $Parsedown->text($Translate->__('oizopower'));?>">
                <p><?php echo $Parsedown->text($Translate->__('oizopower-introduction'));?></p>
            </div>
            <div class="column">
                <h3 class="subtitle"><?php echo $Parsedown->text($Translate->__('lizhi'));?></h3>
                <img src="http://placehold.it/500x500" alt="<?php echo $Parsedown->text($Translate->__('lizhi'));?>">
                <p><?php echo $Parsedown->text($Translate->__('lizhi-introduction'));?></p>
            </div>
            <div class="column">
                <h3 class="subtitle"><?php echo $Parsedown->text($Translate->__('waligu'));?></h3>
                <img src="http://placehold.it/500x500" alt="<?php echo $Parsedown->text($Translate->__('waligu'));?>">
                <p><?php echo $Parsedown->text($Translate->__('waligu-introduction'));?></p>
            </div>
            <div class="column">
                <h3 class="subtitle"><?php echo $Parsedown->text($Translate->__('will'));?></h3>
                <img src="http://placehold.it/500x500" alt="<?php echo $Parsedown->text($Translate->__('will'));?>">
                <p><?php echo $Parsedown->text($Translate->__('will-introduction'));?></p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="title"><?php echo $Parsedown->text($Translate->__('details'));?></h2>
        <p><?php echo $Parsedown->text($Translate->__('details-venue-meeting'));?></p>
        <p><?php echo $Parsedown->text($Translate->__('details-venue-banquet'));?></p>
        <p><?php echo $Parsedown->text($Translate->__('details-public-transport'));?></p>
        <p><?php echo $Parsedown->text($Translate->__('details-attendance-package'));?></p>
    </div>
</section>

</body>
</html>