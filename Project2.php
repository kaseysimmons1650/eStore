<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="/~ksimmon1/CSS/project1.css">
	<meta charset="utf-8">
	<title>Currency Converter</title>
<body>
	<img src="vinyl.png" alt="logo" class="center" height="250" width="250">

	<table class="links">
		<tr>
			<td><a href="/~ksimmon1/companydescription.html">Company Description</a></td>

			<td><a href="/~ksimmon1/sitemap.html">Website Map</a></td>

			<td><a href="/~ksimmon1/contactpage.html">Contact Us</a></td>

			<td><a href="/~ksimmon1/homepage.html">Home Page</a></td>
		</tr>

		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>

	</table>

<h1>Currency Converter</h1>

<p class="top">Enter the amount of money and the currency you would like to convert,<br> and then select the currency you would like to convert to.</p>

<form id="money" onsubmit="return calculate()">
	<p>Starting currency:</p>
	<input type="radio" id="usd" name="starting" value="USD">
	<label for="usd">USD</label><br>
	<input type="radio" id="euro" name="starting" value="Euro">
	<label for="euro">Euro</label><br>
	<input type="radio" id="gbp" name="starting" value="GBP">
	<label for="gbp">GBP</label><br>
	<input type="radio" id="cad" name="starting" value="CAD">
	<label for="cad">CAD</label><br>
	<p></p>
	<label for="startAmt">Starting Amount:</label><br>
	<input type="text" id="startAmt" name="startAmt"><br>
	<p></p>
	<p>Ending currency:</p>
	<input type="radio" id="usdEnd" name="ending" value="USD">
	<label for="usd">USD</label><br>
	<input type="radio" id="euroEnd" name="ending" value="Euro">
	<label for="euro">Euro</label><br>
	<input type="radio" id="gbpEnd" name="ending" value="GBP">
	<label for="gbp">GBP</label><br>
	<input type="radio" id="cadEnd" name="ending" value="CAD">
	<label for="cad">CAD</label><br>
	<p></p>
	<input type="submit" value="Submit"><br>
	<input type="reset"><br>
</form>
</body>
</html>
