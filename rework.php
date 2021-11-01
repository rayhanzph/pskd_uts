<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>Fast converting, encoding and decoding — Cryptii</title>
    <link rel="stylesheet" href="./src/reworkStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/jquery.ui.slider.min.css" media="screen">
</head>

<body>
    <header>
        <h2 id="h-title">UTS PSKD</h2>
        <ul>
            <li><a href="./rework.php">Let's Encrypt</a></li>
            <li><a href="index.php">Affine</a></li>
            <li><a href="index.php">AES</a></li>
            <li><a href="index.php">RC4</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="./loginRegist/login.php">Login</a></li>
        </ul>
    </header>
    <div id="wrapper">
        <div id="application"></div>
</body>
<script>
    // use hash fallback (local use)
    var History = {
        options: {
            html4Mode: true,
            disableSuid: true
        }
    };
</script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.slider.min.js"></script>
<script src="js/jquery.history.js"></script>

<!-- include third party libraries -->
<script src="js-source/libraries/phpjs/chr.js"></script>
<script src="js-source/libraries/phpjs/ord.js"></script>
<script src="js-source/libraries/phpjs/sha1.js"></script>
<script src="js-source/libraries/phpjs/md5.js"></script>
<script src="js-source/libraries/phpjs/utf8_encode.js"></script>
<script src="js-source/libraries/phpjs/urlencode.js"></script>
<script src="js-source/libraries/phpjs/urldecode.js"></script>

<!-- include main application -->
<script src="js-source/cryptii.js"></script>

<script src="js-source/view/view.js"></script>
<script src="js-source/conversion/conversion.js"></script>

<!-- include alphabet formats -->
<script src="js-source/conversion/formats/text.js"></script>
<script src="js-source/conversion/formats/flipped.js"></script>
<script src="js-source/conversion/formats/htmlentities.js"></script>
<script src="js-source/conversion/formats/morsecode.js"></script>
<script src="js-source/conversion/formats/leetspeak.js"></script>
<script src="js-source/conversion/formats/navajo.js"></script>

<!-- include numeric formats -->
<script src="js-source/conversion/formats/decimal.js"></script>
<script src="js-source/conversion/formats/binary.js"></script>
<script src="js-source/conversion/formats/octal.js"></script>
<script src="js-source/conversion/formats/hexadecimal.js"></script>
<script src="js-source/conversion/formats/roman-numerals.js"></script>

<!-- include cipher formats -->
<script src="js-source/conversion/formats/atbash.js"></script>
<script src="js-source/conversion/formats/caesar.js"></script>
<script src="js-source/conversion/formats/vigenere.js"></script>
<script src="js-source/conversion/formats/rot13.js"></script>
<script src="js-source/conversion/formats/ita2.js"></script>
<script src="js-source/conversion/formats/pigpen.js"></script>

<!-- include encoding formats -->
<script src="js-source/conversion/formats/base64.js"></script>

<!-- include hash formats -->
<script src="js-source/conversion/formats/md5.js"></script>
<script src="js-source/conversion/formats/sha1.js"></script>

<script>
    // start application
    cryptii.init();
</script>

</html>