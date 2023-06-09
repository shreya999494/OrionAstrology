<!DOCTYPE html>
<html>
	<head>
	<title>subscription | Orion Astrology</title>
	<meta charset="utf-8"/>
	<meta name="Author" content="Shreya Patel"/>	
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<link rel="stylesheet" type="text/css" href="css/formcss.css" >
	<script>
		function getsign(){
			
			var signtext;
			var bday = document.getElementById("myselect").value;

			switch(bday){
			case "Aries":
			signtext = "Aries";
			document.getElementById('fsignchoose').value = signtext;
			break;
			
			case "Taurus":
			signtext = "Taurus";
			document.getElementById('fsignchoose').value = signtext;
			break;
			
			case "Gemini":
			signtext = "Gemini";
			document.getElementById('fsignchoose').value = signtext;
			break;

			case "Cancer":
			signtext = "Cancer";
			document.getElementById('fsignchoose').value = signtext;
			break;

			case "Leo":
			signtext = "Leo";
			document.getElementById('fsignchoose').value = signtext;
			break;

			case "Libra":
			signtext = "Libra";
			document.getElementById('fsignchoose').value = signtext;
			break;

			case "Scorpio":
			signtext = "Scorpio";
			document.getElementById('fsignchoose').value = signtext;
			break;

			case "Sagittarius":
			signtext = "Sagittarius";
			document.getElementById('fsignchoose').value = signtext;
			break;

			case "Capricorn":
			signtext = "Capricorn";
			document.getElementById('fsignchoose').value = signtext;
			break;

			case "Aquarius":
			signtext = "Aquarius";
			document.getElementById('fsignchoose').value = signtext;
			break;

			case "Pisces":
			signtext = "Pisces";
			document.getElementById('fsignchoose').value = signtext;
			break
		}
	}
	</script>
	</head>
	<div id="wrap">
	<body>
	<?php include 'header.php' ;?>	
	<section id="subscription">
	<h2>Why subscribe to the Orion Astrology?</h2>
	<p>	
		<p id="boldtext1">Registering your e-mail, you will receive promotions, Astrology news in additional to earn one exclusive consultation choosing about "Career", "Love" or "finance" advices or dream interpretation.</p>	
	</section>
	<section id="form">
	
	<form method="post" id="fcontact" action="mailto:contact@orionAstrology.com">
	<fieldset><legend>User Information</legend>

	<article id="contactInfo">	
	<fieldset id="Contact"><legend>Contact Information</legend>
		<p><label for="fLName">Last Name:</label> <input type="text" name="tLName" id="fLName" size="20" maxlength="30" placeholder="Last Name" /></p>
		<p><label for="fFname">First Name: </label> <input type="text" name="tFName" id="fFname" size="20" maxlength="30" placeholder="First Name"/></p>
		<p><label for="fpass">Password: </label><input type="password" name="tpass" id="fpass" size="20" maxlength="12" minlength="8" placeholder="8 to 12 characters" /></p>
		<p><label for="fMail">E-mail:</label><input type="email" name="tMail" id="fMail" size="20" maxlength="40" placeholder="email@email.com" /></p></fieldset>

		<fieldset id="sexSet"><legend>Sex</legend>
					<input type="radio" name="rdsex" id="rdMale"/> <label for="rdMale" > Male</label><br/>
					<input type="radio" name="rdsex" id="rdFemale" checked="true" /><label for="rdFemale" > Female</label>
		</fieldset>
	</article>

	<article id="letter">
		<a href=""><img src="Img/gpsycard.png" alt="Submit"></a>
	</article>
		<article id="AstralDayBirth">
		<fieldset>
		<p><label for="fbirthDay"> Birth Day:</label>		
		<select id="myselect" oninput="getsign()";/>		
		<option value="Aries">Mar.21<sup>st</sup> - Apr.19<sup>th</sup></option>
		<option value="Taurus">Apr.20<sup>th</sup> - May.20<sup>th</sup></option>
		<option value="Gemini">Mai.21<sup>st</sup> - Jun.20<sup>th</sup></option>
		<option value="Cancer">Jun.21<sup>st - Jul.22<sup>nd</option>
		<option value="Leo">Jul.23<sup>rd</sup> - Aug.22<sup>nd</sup></option>
		<option value="Virgo">Aug.23<sup>rd</sup> - Sep.22<sup>nd</sup>	</option>
		<option value="Libra">Sep.23<sup>rd</sup> - Oct.22<sup>nd</sup></option>
		<option value="Scorpio">Oct.23<sup>rd</sup> - Noc.21<sup>st</sup></option>
		<option value="Sagitarius">Nov.22<sup>nd</sup> - Dec.21<sup>st</sup>	</option>
		<option value="Capricorn">Dec.22<sup>nd</sup> - Jan.19<sup>th</sup></option>
		<option value="Aquarius">Jan.20<sup>th</sup> - Feb.18<sup>th</sup></option>
		<option value="Pisces">Feb.19<sup>th</sup> - Mar.20<sup>th</sup></option>		
		</select>	| 	

		<label id="Sinchoosed">Sign:<input type="text" name="tsignchoose" id="fsignchoose" readonly="true"/>
		</fieldset>

		</article>

		<article id="MessageText">
		<p><fieldset id="message"><legend>Message:</legend></p>
		<p><textarea name="tMsg" id="fMsg" cols="45" rows="10" placeholder="Leave your message!"></textarea>
		</article>	

		<article id="btSubmit">
		<a href=""><img src="Img/btSubmit.png" alt="Submit" id="btSubs"></a>
		</article>
		</fieldset>
		
	</fieldset>
	</form>

	</section>
	<article id="Home">	
		<h4><a href="Index.php"><img src="Img/home.png" alt="Home"/></a></h4>	
	</article>
	<?php include 'footer.php' ;?>	
	</body>
	</div>
	
</html>