// let rprop3 = window.localStorage.getItem("prop");
// let rprop4 = JSON.parse(rprop3);

function change_image(obj) {
    const main_img = document.getElementById("main-img");
    main_img.src = obj.src;
}

function create_desc() {
    const d_prop1 = localStorage.getItem("descprop");
    const d_prop2 = JSON.parse(d_prop1);
    const dc = document.getElementById("des-container");
    dc.innerHTML = "";
    const innerdiv = document.createElement("div");
    innerdiv.id = "des-div1";
    innerdiv.classList.add("des-div1");
    // if (d_prop2.index <= 25) {
    //     innerdiv.innerHTML =
    const img_div = document.createElement("div");
    const img_chng_div = document.createElement("div");
    const det_div = document.createElement("div");
    img_div.classList.add("img-div");
    img_chng_div.classList.add("img-chng-div");
    det_div.classList.add("detail-div");
    var pf, pt;

    if (d_prop2.pf === "r") {
        pf = "rent";
    }
    else {
        pf = "buy";
    }

    if (d_prop2.type === "r") {
        pt = "House";
    }
    else if (d_prop2.type === "c") {
        pt = "Shop";
    }
    else {
        pt = "Land";
    }

    if (d_prop2.index <= 25) {
        img_div.innerHTML = `
    <div class="img-div">
        <img src="./Assets/images/prop_pics/prop${d_prop2.index}_1.jpg" alt="Main Img" class="slider-main-img" id="main-img">
    </div>`;
        img_chng_div.innerHTML = `
    <div class="img-chng-div">
				<img src="./Assets/images/prop_pics/prop${d_prop2.index}_1.jpg" alt="slider Img" class="changing-img" onclick="change_image(this)" id="chng-img1">
				<img src="./Assets/images/prop_pics/prop${d_prop2.index}_2.jpg" alt="slider Img" class="changing-img" onclick="change_image(this)" id="chng-img2">
				<img src="./Assets/images/prop_pics/prop${d_prop2.index}_3.jpg" alt="slider Img" class="changing-img" onclick="change_image(this)" id="chng-img3">
				<img src="./Assets/images/prop_pics/prop${d_prop2.index}_4.jpg" alt="slider Img" class="changing-img" onclick="change_image(this)" id="chng-img4">
	</div>`;
    }
    else {
        img_div.innerHTML = `
    <div class="img-div">
        <img src="${d_prop2.image}" alt="Main Img" class="slider-main-img" id="main-img">
    </div>`;
        img_chng_div.innerHTML = `
    <div class="img-chng-div">
				<img src="${d_prop2.image}" alt="slider Img" class="changing-img" onclick="change_image(this)" id="chng-img1">
				<img src="./Assets/images/prop_pics/prop11_2.jpg" alt="slider Img" class="changing-img" onclick="change_image(this)" id="chng-img2">
				<img src="./Assets/images/prop_pics/prop11_3.jpg" alt="slider Img" class="changing-img" onclick="change_image(this)" id="chng-img3">
				<img src="./Assets/images/prop_pics/prop11_4.jpg" alt="slider Img" class="changing-img" onclick="change_image(this)" id="chng-img4">
	</div>`;
    }

    det_div.innerHTML = `
    <div class="detail-div">
            <h1 class="headings">${pt} to ${pf} in ${d_prop2.place}</h1>
            <p id="price">Estimation Cost: ${d_prop2.price}</p>
            <p class="desc" id="des-add">
                ${d_prop2.add}
            </p>
            <h1 class="headings">Description</h1>
            <p class="desc" id="des-detail">
                ${d_prop2.desc}
            </p><br>
            <h1 class="headings">Amenities</h1>
            <div class="amenities">
                    <div class="logo1">
                        <img src="./Assets/images/wifi.jpg" alt="wifiImg" class="logo-img">
                            <h2 class="logo-label">Wifi Facility</h2>
                    </div>
                    <div class="logo1">
                        <img src="./Assets/images/security.png" alt="securityImg" class="logo-img">
                            <h2 class="logo-label">Security</h2>
                    </div>
                    <div class="logo1">
                        <img src="./Assets/images/fire.png" alt="fireImg" class="logo-img">
                            <h2 class="logo-label">Fire Safety</h2>
                    </div>
                    <div class="logo1">
                        <img src="./Assets/images/parking.png" alt="parkingImg" class="logo-img">
                            <h2 class="logo-label">Parking</h2>
                    </div>
                    <div class="logo1">
                        <img src="./Assets/images/lift.jpg" alt="liftImg" class="logo-img">
                            <h2 class="logo-label">Lift Backup</h2>
                    </div>
            </div>
            <button class="interest" onclick="showcb()">Interested</button>
            <button class="wish-list">wish List</button>
    </div>
    `;

    innerdiv.appendChild(img_div);
    innerdiv.appendChild(img_chng_div);
    innerdiv.appendChild(det_div);
    dc.appendChild(innerdiv);
}

// function draw_card(indx){
//     console.log(indx);
//     const des_prop=rprop4.find(obj => obj.index === indx);
//     const dc=document.getElementById("des-container");
//     // dc.innerHTML="";
//     console.log(dc.id);

// }
