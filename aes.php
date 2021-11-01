<!doctype html>
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>AES 256 Encrypt/Decrypt</title>
    <!-- <script src="src/jquery-1.11.0.min.js"></script> -->
    <script type="text/javascript" src="src/gibberish-aes-1.0.0.min.js"></script>
    <link rel="stylesheet" href="./src/aesStyles.css">
    <link rel="stylesheet" href="./src/indexStyle.css">
    <script src="src/main.js"></script>
</head>

<body>
    <header>
        <h2 id="h-title">UTS PSKD</h2>
        <ul>
            <li><a href="./rework.php">Let's Encrypt</a></li>
            <li><a href="./affine.php">Affine</a></li>
            <li><a href="./aes.php">AES</a></li>
            <li><a href="./rc4.php">RC4</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="./loginRegist/login.php">Login</a></li>
        </ul>
    </header>
    <form>
        <div class="left">
            <h1>Plain Text</h1>
            <textarea id="data" rows="4" cols="50" wrap="soft" wrap="fix"></textarea>
        </div>
        <div class="center">
            <p>
                <input name="btnEn" value="Encrypt" onclick="Encrypt(this.form)" type="button">
                <input name="btnDe" value="Decrypt" onclick="Decrypt(this.form)" type="button">
            </p>
        </div>
        <div class="right">
            <h1>Ciphertext</h1>
            <textarea rows="4" cols="50" wrap="soft" id="out" readonly="readonly""></textarea>
        </div>
    </form>

</body>

</html>