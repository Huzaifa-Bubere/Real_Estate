// form changing Part

function myfunc1() {

    // document.getElementById("child1").style.transition= "1s";
    // document.getElementById("child2").style.transition= "1s";

    document.getElementById("su_Form").style.display = "inline-block";
    document.getElementById("child1").style.width = "0vw";
    document.getElementById("child2").style.width = "25vw";
    setTimeout(function dn() { document.getElementById("si_Form").style.display = "none"; }, 700);
    document.suform.name.focus();
}
function myfunc2() {

    // document.getElementById("child1").style.transition= "1s";
    // document.getElementById("child2").style.transition= "1s";

    document.getElementById("si_Form").style.display = "inline-block";
    document.getElementById("child2").style.width = "0vw";
    document.getElementById("child1").style.width = "25vw";
    setTimeout(function dn() { document.getElementById("su_Form").style.display = "none"; }, 700);
    document.siform.name1.focus();
}

// form validation part

//sign up form validation and data saving	
function setfoc() {
    document.siform.name1.focus();
}
function checkUN() {
    if (document.suform.name.value.length < 8 || document.suform.name.value.length > 20) {
        document.getElementById("warningPara").innerHTML = "It should contain min 8 char and max 20 char ";
        document.suform.name.focus();
    }
    if (document.suform.name.value.length > 7 && document.suform.name.value.length < 21) {
        document.getElementById("warningPara").innerHTML = "";
        document.suform.pwd.focus();
    }
}
function checkPwd() {
    if (document.suform.pwd.value.length < 8 || document.suform.pwd.value.length > 15) {
        document.getElementById("warningPara").innerHTML = "It should contain min 8 char and max 15 char ";
        document.suform.pwd.focus();
    }
    if (document.suform.pwd.value.length > 7 && document.suform.pwd.value.length < 16) {
        document.getElementById("warningPara").innerHTML = "";
        document.suform.gmail.focus();
    }
}
function checkEml() {
    // if(!(document.suform.gmail.value.includes("@") && document.suform.gmail.value.includes(".com"))){
    // 	document.getElementById("warningPara").innerHTML = "It should contain @ and domain name";	
    // 	document.suform.gmail.focus();
    // }
    // if(document.suform.gmail.value.length>10  && document.suform.gmail.value.includes("@") && document.suform.gmail.value.includes(".com")){
    // 	document.getElementById("warningPara").innerHTML = "";
    // }
    if (document.suform.gmail.value == "") {
        document.getElementById("warningPara").innerHTML = "Enter Gmail";
        document.suform.gmail.focus();
    }
    else {
        document.getElementById("warningPara").innerHTML = "";
    }

}

function checkCaptcha() {
    if (!(document.suform.captchaText.value === chk_captcha)) {
        document.getElementById("warningPara").innerHTML = "Incorrect Captcha Entered ";
        document.suform.captchaText.focus();
    }
    else {
        document.getElementById("warningPara").innerHTML = "";
    }
}

function subData() {
    if (document.suform.name.value != "" && document.suform.pwd.value != "" && document.suform.gmail.value != "" && document.suform.captchaText.value != "" && document.suform.captchaText.value === chk_captcha) {
        document.getElementById("warningPara").innerHTML = "";
        // var v1= ( document.suform.name.value);
        // var v2= (document.suform.pwd.value);
        // console.log(v1);
        // alert(v2);
        localStorage.setItem(document.suform.name.value, document.suform.pwd.value);
        document.getElementById("su_Form").reset();
    }
    else {
        document.getElementById("warningPara").innerHTML = "Fill complete Data properly..";
    }

}
//sign in form validation and data check

function checkUN1() {
    if (document.siform.name1.value.length < 8 || document.siform.name1.value.length > 20) {
        document.getElementById("warningPara1").innerHTML = "It should contain min 8 char and max 20 char ";
        document.siform.name1.focus();
    }
    if (document.siform.name1.value.length > 7 && document.siform.name1.value.length < 21) {
        document.getElementById("warningPara1").innerHTML = "";
        document.siform.pwd1.focus();
    }
}

function checkPwd1() {
    if (document.siform.pwd1.value.length < 8 || document.siform.pwd1.value.length > 15) {
        document.getElementById("warningPara1").innerHTML = "It should contain min 8 char and max 15 char ";
        document.siform.pwd1.focus();
    }
    if (document.siform.pwd1.value.length > 7 && document.siform.pwd1.value.length < 16) {
        document.getElementById("warningPara1").innerHTML = "";
    }
}
function chkData() {
    if (document.siform.name1.value != "" && document.siform.pwd1.value != "") {
        document.getElementById("warningPara1").innerHTML = "";
        var v3 = document.siform.name1.value;
        if (localStorage.getItem(v3) === document.siform.pwd1.value) {
            window.open("index.html","_self");
            document.getElementById("si_Form").reset();
        }
        else {
            document.getElementById("warningPara1").innerHTML = "incorrect username pr password";
        }
    }
    else {
        document.getElementById("warningPara1").innerHTML = "Fill complete Data properly..";
    }
}

// Captcha generation block

var chk_captcha = "";
// Function to generate a random CAPTCHA string
function generateCaptcha(length) {
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let captcha = '';
    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        captcha += characters.charAt(randomIndex);
    }
    return captcha;
}

// Function to update the CAPTCHA image and value
function updateCaptcha() {
    const captchaImage = document.getElementById('captchaImage');
    // const captchaInput = document.getElementById('captchaInput');
    const captcha = generateCaptcha(6); // Generate a 6-character CAPTCHA
    chk_captcha = captcha;
    captchaImage.src = 'data:image/png;base64,' + generateCaptchaImage(captcha);
    // captchaInput.value = '';
}

//
function generateCaptchaImage(captchaText) {
    // In a real scenario, this function would request a CAPTCHA image from a server
    // Here, we'll just simulate generating a simple image with the CAPTCHA text
    const canvas = document.createElement('canvas');
    canvas.width = 150;
    canvas.height = 50;
    const context = canvas.getContext('2d');
    context.font = '30px Arial';
    context.fillStyle = 'black';
    context.fillText(captchaText, 20, 35);
    return canvas.toDataURL('image/png').split(',')[1]; // Convert to base64
}

// Regenerate CAPTCHA when the "Regenerate CAPTCHA" button is clicked
document.getElementById('regenerateCaptcha').addEventListener('click', updateCaptcha);

// Initialize CAPTCHA on page load
updateCaptcha();