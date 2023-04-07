<!DOCTYPE html>
<?php
		$name = $_POST['name'];
		

$date = isset($_POST['date'])?$_POST['date']:false;

?>
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
	
	<form method="post" id="fcontact" action="findzodiac.php">
	<fieldset><legend>User Information</legend>

	<article id="contactInfo">	
	<fieldset id="Contact"><legend>Contact Information</legend>
		<p><label for="Name">Name:</label> <input type="text" name="name" id="name" size="20" maxlength="30" placeholder="Name" /></p>
		

	
		
	
		<p><label for="fbirthDay"> Birth Day:</label>		
		<select id="myselect" name="date" oninput="getsign()";/>		
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
		</select>	

		
	</article>
		

		<article id="btSubmit">
		<input type="image" src="Img/btSubmit.png"  name="submit" alt="Submit" id="btSubs"></a>
		</article>
	
		
	</fieldset>
    <h2> Hello <?php echo" ";echo $name;?> ,Your Zodiac Sign is:<?php echo $date;?></h2> 
	</form>

	</section>
	

	
	
	<article id="Home">	
		<h4><a href="Index.php"><img src="Img/home.png" alt="Home"/></a></h4>	
	</article>
	<?php include 'footer.php' ;?>	
	</body>
	</div>
	
</html>