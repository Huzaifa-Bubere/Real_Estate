
let rprop1 = window.localStorage.getItem("resultProp");
let rprop2 = JSON.parse(rprop1);
var temp_obj;
function create_card() {
  if (temp_obj == "") {
    document.getElementById("card-container").innerHTML = "";
    // let nr = document.createElement("h1");
    // let t = document.createTextNode("No Results Found");
    // nr.classList.add("no_res");
    // nr.appendChild(t);
    // document.body.appendChild(nr);
    
    document.getElementById("N_r_f").innerHTML = "No Results Found";
    return 0;
  }
  document.getElementById("N_r_f").innerHTML = "";
  const productContainer = document.getElementById("card-container");
  productContainer.innerHTML = "";

  
  temp_obj.forEach(obj => {

    const prod_card = document.createElement("div");
    prod_card.classList.add("card-wrapper");
    const prod_img_div = document.createElement("div");
    prod_img_div.classList.add("product-imgs");
    prod_img_div.innerHTML = `
    <a href="#"  target="_blank" id=card${obj.index} onclick="pass_desc(this.id)">
      <img src="${obj.image}" alt="image">
    </a>
    `;
    const prod_cont_div = document.createElement("div");
    prod_cont_div.classList.add("product-content");
    var dec;
    switch (obj.type) {
      case "r": dec = 1;
        break;
      case "c": dec = 2;
        break;
      case "l": dec = 3;
        break;
    }
    var pdis;
    if (dec == 1) {
      pdis = `House in ${obj.place}`;
    }
    else if (dec == 2) {
      pdis = `Shops in ${obj.place}`;
    }
    else {
      pdis = `Plot in ${obj.place}`;
    }

    prod_cont_div.innerHTML = `
    <h2 class="product-title">${pdis}</h2>
    <p>${obj.add}</p>
    <a href="http://maps.google.com/?q=1200 ${obj.add}" class="product-link" target="_blank">visit Place On Map</a>

    <div class="product-price">

      <p class="new-price">Estimation Price: <span>${obj.price}</span></p>
    </div>

    <div class="purchase-info">
      <button type="button" class="btn" onclick="showcb()">
        Interseted
      </button>
    </div>

    <div class="social-links">
      <p>Share At: </p>
      <a href="#">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="#">
        <i class="fab fa-whatsapp"></i>
      </a>
      <a href="#">
        <i class="fab fa-pinterest"></i>
      </a>
    </div>
    
    `;
    prod_card.appendChild(prod_img_div);
    prod_card.appendChild(prod_cont_div);
    productContainer.appendChild(prod_card);
  });
}

function card_filter() {
  var cf, tf, pf, af;
  var choice = "";
  if (document.getElementById("city_f").value != "") {
    cf = 1;
  }
  else {
    cf = 0;
  }
  if (document.getElementById("propType_f").value != "") {
    tf = 1;
  }
  else {
    tf = 0;
  }
  if (document.getElementById("price_f").value != "") {
    pf = 1;
  }
  else {
    pf = 0;
  }
  if (document.getElementById("area_f").value != "") {
    af = 1;
  }
  else {
    af = 0;
  }
  choice += `${cf}${tf}${pf}${af}`;
  switch (choice) {
    case "1111":
      //alert(choice);
      temp_obj = rprop2.filter(p => p.place == document.getElementById("city_f").value && p.type == document.getElementById("propType_f").value
        && p.price == document.getElementById("price_f").value && p.area == document.getElementById("area_f").value);
      console.log(temp_obj);
      break;
    case "1110":
      //alert(choice);
      temp_obj = rprop2.filter(p => p.place == document.getElementById("city_f").value && p.type == document.getElementById("propType_f").value
        && p.price == document.getElementById("price_f").value);
      break;
    case "1101":
      //alert(choice);
      temp_obj = rprop2.filter(p => p.place == document.getElementById("city_f").value && p.type == document.getElementById("propType_f").value
        && p.area == document.getElementById("area_f").value);
      break;
    case "1100":
      //alert(choice);
      temp_obj = rprop2.filter(p => p.place == document.getElementById("city_f").value && p.type == document.getElementById("propType_f").value);
      break;
    case "1011":
      //alert(choice);
      temp_obj = rprop2.filter(p => p.place == document.getElementById("city_f").value && p.price == document.getElementById("price_f").value
        && p.area == document.getElementById("area_f").value);
      break;
    case "1010":
      //alert(choice);
      temp_obj = rprop2.filter(p => p.place == document.getElementById("city_f").value && p.price == document.getElementById("price_f").value);
      break;
    case "1001":
      //alert(choice);
      temp_obj = rprop2.filter(p => p.place == document.getElementById("city_f").value && p.area == document.getElementById("area_f").value);
      break;
    case "1000":
      //alert(choice);
      temp_obj = rprop2.filter(p => p.place == document.getElementById("city_f").value);
      break;
    case "0111":
      //alert(choice);
      temp_obj = rprop2.filter(p => p.type == document.getElementById("propType_f").value && p.price == document.getElementById("price_f").value
        && p.area == document.getElementById("area_f").value);
      break;
    case "0110":
      //alert(choice);
      temp_obj = rprop2.filter(p => p.type == document.getElementById("propType_f").value && p.price == document.getElementById("price_f").value);
      break;
    case "0101":
      //alert(choice);
      temp_obj = rprop2.filter(p => p.type == document.getElementById("propType_f").value && p.area == document.getElementById("area_f").value);
      break;
    case "0100":
      //alert(choice);
      temp_obj = rprop2.filter(p => p.type == document.getElementById("propType_f").value);
      break;
    case "0011":
      //alert(choice);
      temp_obj = rprop2.filter(p => p.price == document.getElementById("price_f").value && p.area == document.getElementById("area_f").value);
      break;
    case "0010":
      //alert(choice);
      temp_obj = rprop2.filter(p => p.price == document.getElementById("price_f").value);
      break;
    case "0001":
      //alert(choice);
      temp_obj = rprop2.filter(p => p.area == document.getElementById("area_f").value);
      break;
    case "0000":
      alert(choice);
      document.getElementById("N_r_f").innerHTML = "No Results Found";
      return 0;
  }
  document.getElementById("N_r_f").innerHTML = "";
  create_card();
}

function print_filtered_card(){
  temp_obj=rprop2;
  create_card();
}
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