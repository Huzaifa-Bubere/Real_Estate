
<!DOCTYPE html>

<html>

<head>
	<title>Form</title>
	<link rel="stylesheet" href="./Assets/css/formStyle2.css">
	
</head>
<!-- onload="setfoc()" -->

<body onload="setfoc()">

	<!-- <div class="main-div">
		<div id="child1" onclick="myfunc1()">
			<h3 id="he1" align="center">child 1</h3>
		</div>
		<div id="child2" onclick="myfunc2()">
			<h3 id="he2" align="center">child 2</h3>
		</div>
	</div> -->
	<!-- <div id="main-form-div">
		<div id="form-slider-div">
			
		</div> -->
	<div id="form-container-div">
		<input type="checkbox" id="chk" aria-hidden="true" name="" >
		<div class="main-div">
			<div class="child1">
				<!-- <form  name="siform" id="si_Form" onload="setfoc()"> -->
				<form class="inner" name="siform" id="si_Form" action="signin.php" method="post">
					<h1 class="frm-heading">Sign in</h1>
					<br><input type="text" id="name1" name="name1" placeholder="UsernameName"
						onfocusout="checkUN1()" oninput="trimtxt('name1')">
					<br><input type="password" id="pass1" name="pwd1" placeholder="Password"
						onfocusout="checkPwd1() " oninput="trimtxt('pass1')">
					<br>
					<p id="warningPara1"></p>
					<input class="frmbut" type="button" value="Sign In" id="submit1" onclick="chkData()"><br>
					<label for="chk" aria-hidden="true" >Do not have an account Sign up</label>
					<!-- <input class="transformp" type="button" value="Sign Up" onclick="myfunc1()"> -->
				</form>
			</div>
			<div class="child2">
				<!-- <form name="suform" id="su_Form" onload="setfoc()"> -->
				<form class="inner" name="suform" id="su_Form"  action="signup.php" method="post">
					<h1 class="frm-heading">Sign up</h1>
					<br><input type="text" id="name" name="name" placeholder="UsernameName"
						onfocusout="checkUN()" oninput="trimtxt('name')"> 
					<br><input type="password" id="pass" name="pwd" placeholder="Password"
						onfocusout="checkPwd()" oninput="trimtxt('pass')">
					<br><input type="email" id="gmail" name="gmail" placeholder="Email" required
						onfocusout="checkEml()" oninput="trimtxt('gmail')"><br>
					<br><img id="captchaImage" src="" alt="CAPTCHA Image">
					<img id="regenerateCaptcha" src="Assets/images/refreshImg.png" alt="REFRESH Image"><br>
					<br><input type="text" id="captchaText" name="captchaText" placeholder="Captcha" required
						onfocusout="checkCaptcha()">
					<br>
					<p id="warningPara"></p>
					<input class="frmbut" type="button" value="Sign Up" id="submit" onclick="subData()"><br>
					<label for="chk" aria-hidden="true" >GO back to Sign in</label>
					<!-- <input class="transformp" type="button" value=" sign In" onclick="myfunc2()"> -->
				</form>
			</div>
		</div>
	</div>
	<script>
		

let storedData = localStorage.getItem('myData');
if (storedData) {
        // Parse the JSON string back into an object
        let data = JSON.parse(storedData);
        
       if(data==0){
			document.getElementById("warningPara1").innerHTML = "Incorrect username or Password";
	   }
    } 
	</script>
	<script src="./Assets/js/formfile2.js"></script>
</body>
		
</html>