<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./src/indexStyle.css">
	<title>Affine Chipper</title>
</head>
<script type="text/javascript">
	function Encrypt(f) {
		var word, newword, code, newcode, newletter
		var addkey, multkey
		word = f.p.value
		word = word.toLowerCase()
		word = word.replace(/\W/g, "")
		addkey = 0

		for (i = 0; i < f.add.options.length; i++) {
			addkey = addkey + (f.add.options[i].text) * (f.add.options[i].selected)
		}

		multkey = 0

		for (i = 0; i < f.mult.options.length; i++) {
			multkey = multkey + (f.mult.options[i].text) * (f.mult.options[i].selected)
		}

		newword = ""

		for (i = 0; i < word.length; i++) {
			code = word.charCodeAt(i) - 97
			newcode = ((multkey * code + addkey) % 26) + 97
			newletter = String.fromCharCode(newcode)
			newword = newword + newletter
		}

		f.c.value = newword + " "
	}

	function Decrypt(f) {
		var word, newword, code, newcode, newletter
		var addkey, multkey, multinverse

		word = f.c.value
		word = word.toLowerCase()
		word = word.replace(/\W/g, "")
		addkey = 0

		for (i = 0; i < f.add.options.length; i++) {
			addkey = addkey + (f.add.options[i].text) * (f.add.options[i].selected)
		}

		multkey = 0

		for (i = 0; i < f.mult.options.length; i++) {
			multkey = multkey + (f.mult.options[i].text) * (f.mult.options[i].selected)
		}

		multinverse = 1

		for (i = 1; i <= 25; i = i + 2) {
			if ((multkey * i) % 26 == 1) {
				multinverse = i
			}
		}

		newword = ""

		for (i = 0; i < word.length; i++) {
			code = word.charCodeAt(i) - 97
			newcode = ((multinverse * (code + 26 - addkey)) % 26) + 97
			newletter = String.fromCharCode(newcode)
			newword = newword + newletter
		}

		f.p.value = newword.toLowerCase()
	}
</script>
</head>

<body>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			height: 100vh;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}

		header {
			height: 10vh;
			border: 1px solid black;
			width: 100%;
		}

		form {
			width: 100%;
			background-color: #552b7b;
			color: white;
			height: 90vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.left {
			margin: 20px;
		}

		.center {
			margin: 20px;
			text-align: center;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}

		.right {
			margin: 20px;
		}

		textarea {
			border-radius: 10px;
			font-size: 18px;
			resize: none;
		}

		p {
			font-size: 20px;
		}

		select {
			padding: 10px;
			border-radius: 5px;
		}

		input {
			padding: 10px;
			font-size: 18px;
			margin: 5px;
			background-color: white;
			border: none;
			border-radius: 5px;
			color: #552b7b;
			font-weight: bold;
		}

		input:hover {
			cursor: pointer;
			border: 2px solid white;
			background-color: #552b7b;
			color: white;
			transition: 0.5s;
		}
	</style>
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
			<textarea name="p" rows="4" cols="50" wrap="soft" wrap="fix"></textarea>
		</div>
		<div class="center">
			<p>
				a =
				<select name="mult" size="1">
					<option>1</option>
					<option>3</option>
					<option>5</option>
					<option>7</option>
					<option>9</option>
					<option>11</option>
					<option>15</option>
					<option>17</option>
					<option>19</option>
					<option>21</option>
					<option>23</option>
					<option>25</option>
				</select>
				b =
				<select name="add" size="1">
					<option>0</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
				</select>
			</p>
			<p>
				<input name="btnEn" value="Encrypt" onclick="Encrypt(this.form)" type="button">
				<input name="btnDe" value="Decrypt" onclick="Decrypt(this.form)" type="button">
			</p>
		</div>
		<div class="right">
			<h1>Ciphertext</h1>
			<textarea name="c" rows="4" cols="50" wrap="soft"></textarea>
		</div>
	</form>
</body>

</html>