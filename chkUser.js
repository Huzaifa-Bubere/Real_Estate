

function check_User(){
    let storedData = localStorage.getItem('currentuser');
        // Parse the JSON string back into an object
		if(storedData){
			data = JSON.parse(storedData);
		}
		else{
			data=""
		}
		if(data == "" || data == null){
		document.getElementById("si_label").style.display="block";
        const user_div=document.getElementById("user_Info");
        user_div.style.display="none";
        console.log("No user");
		}
		else{
			document.getElementById("si_label").style.display="none";
			const l_reference=document.getElementById("acc_label");
			const l_reference1=document.getElementById("acc_label1");
			const user_name=data.split("");
			// console.log(user_name);
			document.getElementById("user_name").innerHTML=data;
			l_reference.innerHTML=user_name[0];
			l_reference1.innerHTML=user_name[0];
			// console.log("User is present");
		}
}

function logOut(){
    localStorage.setItem("currentuser",null);
    location.reload();
}