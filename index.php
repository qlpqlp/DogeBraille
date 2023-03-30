<?php
    require_once 'libdogecoin-php/libdogecoin-bind.php';
    // we execute the dogecoin address generator and retrive the json format
    $dogecoinaddress = $LibDogecoin->generatePrivPubKeypair();
    $getThe = $LibDogecoin->moon();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Doge Brille - Dogecoin Wallets for the Blind Shibes</title>
    <meta name="description" content="Doge Brille - Dogecoin Wallets for the Blind Shibes">
    <meta name="author" content="All Dogecoin Community!">
    <meta name="generator" content="You!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="mobile-web-app-capable" content="yes" />
    <link rel="shortcut icon" sizes="256x256" href="https://dogecoin.com/assets/images/1.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">

<?php
    $metatitle = "Doge Brille - Dogecoin Wallets for the Blind Shibes";
    $metadescription = "Doge Brille - Dogecoin Wallets for the Blind Shibes";
    $metaurl = "https://DogeBrille.com/";
?>
    <meta property="og:image" content="<?php echo $metaurl;?>img/dogecoin-card.png">
    <meta property="og:title" content="<?php echo $metatitle; ?>">
    <meta property="og:description" content="<?php echo $metadescription; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $metaurl;?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo $metatitle; ?>">
    <meta name="twitter:site" content="<?php echo $metaurl;?>">
    <meta name="twitter:description" content="<?php echo $metadescription; ?>">
    <meta name="twitter:image" content="<?php echo $metaurl; ?>img/dogecoin-card.png">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/braille-big.css" rel="stylesheet" type="text/css">

    <script src="js/braille-tools.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">

    $(document).ready( function() {
      $(".dogeBraillePublicKeyname").html(br.braille('Public Key:'));
      $(".dogeBraillePublicKey").html(br.braille('<?php echo trim($dogecoinaddress->public); ?>'));
      $(".dogeBraillePrivateKeyname").html(br.braille('Private Key:'));
      $(".dogeBraillePrivateKey").html(br.braille('<?php echo trim($dogecoinaddress->private); ?>'));
    });
    </script>    
</head>

<body style="background-color: #000; background-image: url('img/dogecoinbg.png');background-repeat: no-repeat;background-position: center;">

  <braille>
  <li></li>
  <li>⠙</li>
  <li>⠕</li>
  <li>⠛</li>
  <li>⠑</li>
  <li>⠉</li>
  <li>⠕</li>
  <li>⠊</li>
  <li>⠝</li>
  <li></li>
</braille>
<braillefixe>
   <fx>⠿</fx>
</braillefixe>

<alphabet>
  <al></al>
  <al>Ð</al>
  <al>O</al>
  <al>G</al>
  <al>E</al>
  <al>C</al>
  <al>O</al>
  <al>I</al>
  <al>N</al>
  <al></al>
</alphabet>
<div style="" id="moon"><?php echo $getThe->moon; ?></div>
<div class="container" style="max-width: 800px; margin-top: 450px; border: 5px solid rgba(102, 102, 102, 1); border-radius: 25px; padding: 15px; background-color:#fff">
<div class="alert alert-warning" role="alert">
  <i class="fa-solid fa-triangle-exclamation"></i> Disclaimer: This Dogecoin Address's generator are real and can be use, but be caurful, someone can be watching wen the address is generating. Use it just for fun!
  This wallet can be printed using braille printers and I will improve it with time.
</div>
<div class="row">
<div class="input-group input-group-lg">
  <i class="fa-solid fa-key" style="color:#000; font-size: 45px"></i> &nbsp;<div class="dogeBraillePublicKeyname"></div><br><br>
  <div class="dogeBraillePublicKey"></div>
</div>
<div class="input-group input-group-lg">
  <i class="fa-solid fa-lock-open" style="color:#000; font-size: 45px"></i> &nbsp;<div class="dogeBraillePrivateKeyname"></div><br><br>
  <div class="dogeBraillePrivateKey"></div>
</div>
</div>
</div>
<div class="container" style="max-width: 800px; margin-top: 50px;">
  <div class="text">
    <a href="https://github.com/dogecoinfoundation/libdogecoin" target="_blank" style="text-decoration: none"><div style="color: rgba(255, 255, 255, 1); font-weight: bolder">Powered by libdogecoin v0.1.2</div></a>
  </div>
</div>
<script  src="js/script.js"></script>
  </body>
</html>