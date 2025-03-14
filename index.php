


<!DOCTYPE html>
<html>

<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="./Assets/css/chat.css">
	<link rel="stylesheet" href="./Assets/css/common.css">
	<link rel="stylesheet" href="./Assets/css/index.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
		integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
		crossorigin="anonymous" />

	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<style>

	</style>
</head>

<body onload="loadData(),check_User()">

	<nav class="navbar">
		<!-- LOGO -->
		<div class="logo">Mid Web</div>

		<!-- NAVIGATION MENU -->
		<ul class="nav-links">

			<!-- USING CHECKBOX HACK -->
			<input type="checkbox" id="checkbox_toggle" />
			<label for="checkbox_toggle" class="hamburger">&#9776;</label>

			<!-- NAVIGATION MENUS -->
			<div class="menu">

				<li><a href="index.html">Home</a></li>
				<li><a href="aboutus.html">About</a></li>
				<li><a href="help.html">Want Help?</a></li>
				<li><a href="postprop.html">Post Property</a></li>

				<li id="si_label"><a href="form.php">Sign In</a></li>

				<div class="user" id="user_Info">
					<input type="checkbox" id="show_ac">
					<label for="show_ac" class="user_letter" id="acc_label"></label>

					<!-- DROPDOWN MENU -->
					<div class="dropdown">
						<label class="user_letter" id="acc_label1"></label>
						<label id="user_name"></label><br><br>
						<hr width="100%" color="white">
						<a href onclick="logOut()" id="lo_but">&#8656 Log Out</a>
					</div>

				</div>
			</div>
		</ul>
	</nav>

	<div id="header-div">
		<div id="filter-div">
			<p id="filterpara">Search Properties Through Best Broker Website!!</p><br>
			<div class="tab_f">
				<button id="buy-but" class="tablinks_f" onclick="open_filter(event,'buy-div')">Buy</button>
				<button id="rent-but" class="tablinks_f" onclick="open_filter(event,'rent-div')">Rent</button>
				<button id="com-but" class="tablinks_f" onclick="open_filter(event,'com-div')">Commercial</button>
			</div>
			<div id="tab-div">
				<div id="buy-div" class="tabcontent_f">
					<select class="f_select" id="b_select">
						<option value="" disabled selected>Select City</option>
						<option value="all">All</option>
						<option value="mumbai">Mumbai</option>
						<option value="pune">Pune</option>
						<option value="thane">Thane</option>
						<option value="navi mumbai">Navi-Mumbai</option>
						<option value="nagpur">Nagpur</option>

					</select>
					<input id="rad1" class="f_rad" type="radio" name="p_type1" value="r" checked>
					<label for="rad1" class="f_label"> Residential</label>
					<input id="rad2" class="f_rad" type="radio" name="p_type1" value="l">
					<label for="rad2" class="f_label">Land/Plot</label>
					<input class="f_srch_but" id="b_srch_but" type="button" value="Search">
				</div>

				<div id="rent-div" class="tabcontent_f">
					<select class="f_select" id="r_select">
						<option value="" disabled selected>Select City</option>
						<option value="all">All</option>
						<option value="mumbai">Mumbai</option>
						<option value="pune">Pune</option>
						<option value="thane">Thane</option>
						<option value="navi mumbai">Navi-Mumbai</option>
						<option value="nagpur">Nagpur</option>

					</select>
					<input id="rad3" class="f_rad" type="radio" name="p_type2" value="r" checked>
					<label for="rad3" class="f_label"> Residential</label>
					<input id="rad4" class="f_rad" type="radio" name="p_type2" value="l">
					<label for="rad4" class="f_label">Land/Plot</label>
					<input class="f_srch_but" id="r_srch_but" type="button" value="Search">
				</div>
				<div id="com-div" class="tabcontent_f">
					<select class="f_select" id="c_select">
						<option value="" disabled selected>Select City</option>
						<option value="all">All</option>
						<option value="mumbai">Mumbai</option>
						<option value="pune">Pune</option>
						<option value="thane">Thane</option>
						<option value="navi mumbai">Navi-Mumbai</option>
						<option value="nagpur">Nagpur</option>

					</select>
					<input id="rad5" class="f_rad" type="radio" name="p_for" value="r" checked>
					<label for="rad5" class="f_label">Rent</label>
					<input id="rad6" class="f_rad" type="radio" name="p_for" value="b">
					<label for="rad6" class="f_label">Buy</label>
					<input class="f_srch_but" id="c_srch_but" type="button" value="Search">
					<!-- <button class="f_srch_but" id="c_srch_but">Search</button> -->
				</div>
			</div>
		</div>
	</div>
	<h1 id="ser_heading">Our Services...</h1><br>
	<div id="our_services">
		<div class="sub_ser">
			<img class="ser_img" src="./Assets/images/ourser1.png" alt="service1">
			<p class="ser_para">No interference of broker, direct Give and Take between customers through MidWeb</p>
		</div>
		<div class="sub_ser">
			<img class="ser_img" src="./Assets/images/ourser2.png" alt="service2">
			<p class="ser_para">Filter Best Houses In Best Cities with your selective Choices</p>
		</div>
		<div class="sub_ser">
			<img class="ser_img" src="./Assets/images/ourser3.png" alt="service3">
			<p class="ser_para">Agreement assurance By MidWeb Experts, so no Need and Stress for Assurance Check</p>
		</div>
		<div class="sub_ser">
			<img class="ser_img" src="./Assets/images/ourser4.png" alt="service4">
			<p class="ser_para">Safe Money Transactions between Customers with Complete Detail in our Record</p>
		</div>
	</div>
	<h1 id="chk_pro_heading">View Some of our Products...</h1><br>
	<div id="chk_properties">
	<?php
      // Your PHP code here
	// Connect to your database
	


      function indexCard() {
		$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "wbpmp";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// Fetch six random records from the properties table
	$sql = "SELECT * FROM properties ORDER BY RAND() LIMIT 6";
	$result = $conn->query($sql);
	$products1=mysqli_fetch_assoc( $result );

	// if ($result->num_rows > 0) {
	// 	// Output data of each row
	// 	while($row = $result->fetch_assoc()) {
	// 		// Create product card dynamically using JavaScript
	// 		echo "<script>";
	// 		echo "const prop_card = document.createElement('div');";
	// 		echo "prop_card.classList.add('card-wrapper');";
	// 		echo "prop_card.innerHTML = `"; // Start of product card HTML
			
	// 		// Populate the content of the product card with data from the database
	// 		echo "<a href='#' target='_blank'>";
	// 		echo "<img class='crd_img' src='" . $row['image1'] . "' alt='image'>";
	// 		echo "</a>";
	// 		// Add more content here as needed
			
	// 		echo "`;"; // End of product card HTML
	// 		echo "document.getElementById('chk_properties').appendChild(prop_card);"; // Append product card to the container
	// 		echo "</script>";
	// 	}
	// } else {
	// 	echo "0 results";
	// }

	$conn->close();
        // Simulated data for demonstration
        // $products = array(
        //   array("index" => 1, "image" => "product1.jpg", "type" => "r", "place" => "New York", "add" => "123 Main St", "price" => "$500,000"),
        //   array("index" => 2, "image" => "product2.jpg", "type" => "c", "place" => "Los Angeles", "add" => "456 Elm St", "price" => "$300,000"),
        //   array("index" => 3, "image" => "product3.jpg", "type" => "l", "place" => "Chicago", "add" => "789 Oak St", "price" => "$200,000"),
        //   // Add more products as needed
        // );
		$products=array();
		$id=0;
		foreach($products1 as $product) {
			$products[$id]=array($product);
			$id++;
		}

        for ($i = 0; $i < 1; $i++) {
          $randomIndex = mt_rand(0, count($products) - 1);
          $product = $products[$randomIndex];

          // Output product card HTML
          echo '<div class="card-wrapper">';
          echo '<div class="product-imgs">';
          echo '<a href="#" target="_blank" id="card' . $product["index"] . '" onclick="pass_desc(this.id)">';
		  echo "<img class='crd_img' src='data:image/jpeg;base64," . base64_encode($product["image1"]) . "' alt='Property Image'>";
          echo '</a>';
          echo '</div>';
          echo '<div class="product-content">';
          echo '<h2 class="product-title">';
          switch ($product["type"]) {
            case "r":
              echo 'House in ' . $product["place"];
              break;
            case "c":
              echo 'Shops in ' . $product["place"];
              break;
            case "l":
              echo 'Plot in ' . $product["place"];
              break;
          }
          echo '</h2>';
          echo '<p>' . $product["add"] . '</p>';
          echo '<a href="http://maps.google.com/?q=1200 ' . $product["add"] . '" class="product-link" target="_blank">visit Place On Map</a>';
          echo '<div class="product-price">';
          echo '<p class="new-price">Estimation Price: <span>' . $product["price"] . '</span></p>';
          echo '</div>';
          echo '<div class="purchase-info">';
          echo '<button type="button" class="btn" onclick="showcb()">Interested</button>';
          echo '</div>';
          echo '<div class="social-links">';
          echo '<p>Share At: </p>';
          echo '<a href="#"><i class="fab fa-facebook-f"></i></a>';
          echo '<a href="#"><i class="fab fa-twitter"></i></a>';
          echo '<a href="#"><i class="fab fa-instagram"></i></a>';
          echo '<a href="#"><i class="fab fa-whatsapp"></i></a>';
          echo '<a href="#"><i class="fab fa-pinterest"></i></a>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
        }
      }

      indexCard();
    ?>
	</div>

	

	<div class="chatbox-message-wrapper">
		<div class="chatbox-message-header">
			<div class="chatbox-message-profile">
				<img src="./Assets/images/Property Owner.png" alt="" class="chatbox-message-image Image">
				<div>
					<h4 class="chatbox-message-name">Property Owner</h4>
					<p class="chatbox-message-status">online</p>
				</div>
			</div>
			<div class="chatbox-message-dropdown" onclick="hidecb()">
				<i class='bx bx-x  cancel_but' style="color:#fff"></i>
			</div>
		</div>
		<div class="chatbox-message-content">
			<h4 class="chatbox-message-no-message">You don't have message yet!</h4>
		</div>
		<div class="chatbox-message-bottom">
			<form action="#" class="chatbox-message-form">
				<textarea rows="1" placeholder="Type message..." class="chatbox-message-input" required></textarea>
				<button type="submit" class="chatbox-message-submit"><i class='bx bx-send'></i></button>
			</form>
		</div>
	</div>

	<div id="footer-parent">
		<div id="footer1">
			<br>
			<p id="footercp">Check Properties In Cities..</p><br>
			<div class="tab">
				<button id="b1" class="tablinks" onclick="openCity(event, 'Mumbai')">Mumbai</button>
				<button id="b2" class="tablinks" onclick="openCity(event, 'Thane')">Thane</button>
				<button id="b3" class="tablinks" onclick="openCity(event, 'Navi Mumbai')">Navi-Mumbai</button>
				<button id="b3" class="tablinks" onclick="openCity(event, 'Pune')">Pune</button>
				<button id="b3" class="tablinks" onclick="openCity(event, 'Nagpur')">Nagpur</button>
			</div>

			<div id="Mumbai" class="tabcontent">

			</div>

			<div id="Thane" class="tabcontent">

			</div>

			<div id="Navi Mumbai" class="tabcontent">

			</div>

			<div id="Pune" class="tabcontent">

			</div>

			<div id="Nagpur" class="tabcontent">

			</div>

		</div>
		<div id="footer2">
			<div id="listdiv">
				<ul id="footerlist">
					<li><a href="aboutus.html">About Us</a></li>
					<li><a href="t&c.html">Terms & Conditions</a></li>
					<li><a href="PrivacyPolicy.html">Privacy Policy</a></li>
					<li><a href="help.html">Help</a></li>
				</ul>
			</div>

			<div id="folldiv">
				<ul id="folllist">
					<li><a href="#"><img class="footericons" src="Assets/images/fbicon.png"></a></li>
					<li><a href="#"><img class="footericons" src="Assets/images/instaicon.png"></a></li>
					<li><a href="#"><img class="footericons" src="Assets/images/twiticon.png"></a></li>
					<li><a href="#"><img class="footericons" src="Assets/images/yticon.png"></a></li>
				</ul>
			</div>
			<p align="center" id="cpr"><span>&#169;</span>copyright 2010-30 MidWeb Tech Pvt.Ltd.</p>
		</div>
	</div>
	
	<script>
		// let storedData = localStorage.getItem('currentuser');
        // // Parse the JSON string back into an object
        //  data = JSON.parse(storedData);
		// if(data === "" || data == null){
        // const user_div=document.getElementById("user_Info");
        // user_div.style.display="none";
        // // console.log("No user");
		// }
		// else{
		// 	document.getElementById("si_label").style.display="none";
		// 	document.getElementById("user_Info").style.display="block";
		// 	const l_reference=document.getElementById("acc_label");
		// 	const l_reference1=document.getElementById("acc_label1");
		// 	const user_name=data.split("");
		// 	// console.log(user_name);
		// 	document.getElementById("user_name").innerHTML=data;
		// 	l_reference.innerHTML=user_name[0];
		// 	l_reference1.innerHTML=user_name[0];
		// 	// console.log("User is present");
		// }
	</script>
	<script src="./Assets/js/footer.js"></script>
	<script src="./Assets/js/index.js"></script>
	<script src="./Assets/js/databBase.js"></script>
	<script src="./Assets/js/chkUser.js"></script>
	<script src="./Assets/js/chatbox.js"></script>
	<script src="./Assets/js/desc.js"></script>
	
</body>

</html>