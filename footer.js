document.getElementById("b1").click();

function openCity(evt, cityName) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(cityName).style.display = "block";
	let rprop1 = window.localStorage.getItem("prop");
	let rprop2 = JSON.parse(rprop1);
	let par_t = rprop2.filter(o => o.place === cityName.toLowerCase());
	let n = 1;
	document.getElementById(cityName).innerHTML= "";
	par_t.forEach(ob => {
		let f_par = document.createElement("p");
		let t = document.createTextNode(n + ")" + ob.add);n++;
		// alert(t);
		f_par.classList.add("f_tab_para");
		f_par.appendChild(t);
		document.getElementById(cityName).appendChild(f_par);
	});
	
	evt.currentTarget.className += " active";
}