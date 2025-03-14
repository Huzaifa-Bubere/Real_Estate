
// for filter tab change
// for filter tab change
// for filter tab change

document.getElementById("buy-but").click();
document.getElementById("buy-div").style.display = "block";
function open_filter(evt, type) {
  var i, tabcont, tablnk;
  tabcont = document.getElementsByClassName("tabcontent_f");
  for (i = 0; i < tabcont.length; i++) {
    tabcont[i].style.display = "none";
  }
  tablnk = document.getElementsByClassName("tablinks_f");
  for (i = 0; i < tablnk.length; i++) {
    tablnk[i].className = tablnk[i].className.replace(" active", "");
  }
  const rf = document.getElementById(type);
  rf.style.display = "block";
  evt.currentTarget.className += " active";
  //rf.classList.add(" active");
  //alert(type);
}

//for index filter
//for index filter
//for index filter

document.getElementById("b_srch_but").addEventListener("click", index_filter);
document.getElementById("r_srch_but").addEventListener("click", index_filter);
document.getElementById("c_srch_but").addEventListener("click", index_filter);

function index_filter() {
  // initializing comparing var 
  var pf;//prop for
  var pt;//prop type
  var pp;//prop place

  //taking references of all essentials
  const b_div = document.getElementById("buy-div");
  const r_div = document.getElementById("rent-div");
  const c_div = document.getElementById("com-div");

  const b_select = document.getElementById("b_select");
  const r_select = document.getElementById("r_select");
  const c_select = document.getElementById("c_select");

  const r1 = document.getElementById("rad1");
  const r2 = document.getElementById("rad2");
  const r3 = document.getElementById("rad3");
  const r4 = document.getElementById("rad4");
  const r5 = document.getElementById("rad5");
  const r6 = document.getElementById("rad6");

  if (b_div.style.display == "block") {
    pf = "b";
    if (r1.checked) {
      pt = "r";
    }
    else {
      pt = "l";
    }
    pp = b_select.value;
    // alert(pf+" "+pt+" "+pp);
  }
  else if (r_div.style.display == "block") {
    pf = "r";
    if (r3.checked) {
      pt = "r";
    }
    else {
      pt = "l";
    }
    pp = r_select.value;
    // alert(pf+" "+pt+" "+pp);
  }
  else if (c_div.style.display == "block") {
    pt = "c";
    if (r5.checked) {
      pf = "r";
    }
    else {
      pf = "b";
    }
    pp = c_select.value;
    // alert(pf+" "+pt+" "+pp);

  }

  let rprop1 = window.localStorage.getItem("prop");
  let rprop2 = JSON.parse(rprop1);
  if (pp == "" || pp == "all") {
    let filteredprop = rprop2.filter(obj => obj.pf === pf && obj.type === pt);
    console.log(filteredprop);
    localStorage.setItem("resultProp", JSON.stringify(filteredprop));
    const cw = window.open("cards.html", "_blank");
    // cw.print_filtered_card();
  }
  else {
    let filteredprop = rprop2.filter(obj => obj.pf === pf && obj.type === pt && obj.place === pp);
    console.log(filteredprop);
    localStorage.setItem("resultProp", JSON.stringify(filteredprop));
    const cw = window.open("cards.html", "_blank");
    // cw.print_filtered_card();
  }
}

//for dynamic card generation
//for dynamic card generation
//for dynamic card generation

// indexCard();
// setInterval(indexCard, 10000);

// function indexCard() {
//   console.log("1 iteration");
//   let rprop1 = window.localStorage.getItem("prop");
//   let rprop2 = JSON.parse(rprop1);
//   var chk_prop_div = document.getElementById("chk_properties");
//   chk_prop_div.innerHTML = "";
//   var arr = [];
//   for (let i = 0; i < 6; i++) {
//     const random_ind = Math.ceil(Math.random() * rprop2.length);
//     arr[i] = random_ind;
//   }
//   for (let i = 0; i < 6; i++) {
//     const obj = rprop2.find(o => o.index === arr[i]);
//     const prop_card = document.createElement("div");
//     // prop_card.id=`card${obj.index}`;
//     // prop_card.addEventListener()
//     prop_card.classList.add("card-wrapper");
//     const prod_img_div = document.createElement("div");
//     prod_img_div.classList.add("product-imgs");
//     prod_img_div.innerHTML = `
//         <a href="#"  target="_blank" id=card${obj.index} onclick="pass_desc(this.id)">
//             <img class="crd_img" src="${obj.image}" alt="image">
//         </a>
//         `;
//     const prod_cont_div = document.createElement("div");
//     prod_cont_div.classList.add("product-content");
//     var dec;
//     switch (obj.type) {
//       case "r": dec = 1;
//         break;
//       case "c": dec = 2;
//         break;
//       case "l": dec = 3;
//         break;
//     }
//     var pdis;
//     if (dec == 1) {
//       pdis = `House in ${obj.place}`;
//     }
//     else if (dec == 2) {
//       pdis = `Shops in ${obj.place}`;
//     }
//     else {
//       pdis = `Plot in ${obj.place}`;
//     }
//     prod_cont_div.innerHTML = `
//     <h2 class="product-title">${pdis}</h2>
//     <p>${obj.add}</p>
//     <a href="http://maps.google.com/?q=1200 ${obj.add}" class="product-link" target="_blank">visit Place On Map</a>

//     <div class="product-price">

//       <p class="new-price">Estimation Price: <span>${obj.price}</span></p>
//     </div>

//     <div class="purchase-info">
//       <button type="button" class="btn" onclick="showcb()">
//         Interseted
//       </button>
//     </div>

//     <div class="social-links">
//       <p>Share At: </p>
//       <a href="#">
//         <i class="fab fa-facebook-f"></i>
//       </a>
//       <a href="#">
//         <i class="fab fa-twitter"></i>
//       </a>
//       <a href="#">
//         <i class="fab fa-instagram"></i>
//       </a>
//       <a href="#">
//         <i class="fab fa-whatsapp"></i>
//       </a>
//       <a href="#">
//         <i class="fab fa-pinterest"></i>
//       </a>
//     </div>
//     `;
//     prop_card.appendChild(prod_img_div);
//     prop_card.appendChild(prod_cont_div);
//     chk_prop_div.appendChild(prop_card);
//   }

// }
function pass_desc(eid) {
  console.log(eid);
  const ind = Number(eid.replace(/\D/g, ""));
  let rprop3 = window.localStorage.getItem("prop");
  let rprop4 = JSON.parse(rprop3);
  const des_prop=rprop4.find(obj => obj.index == ind);
  localStorage.setItem("descprop",JSON.stringify(des_prop));
  window.open("description.html", "_blank");
  // const desc_win=desc_w.contentWindow;
  // desc_win.create_desc(eid);
}


