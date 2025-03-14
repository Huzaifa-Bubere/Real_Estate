<?php
// // Database connection parameters
// $servername = "localhost";
// $username = "root"; // Change this to your MySQL username
// $database = "wbpmp"; // Change this to your database name

// // Create connection
// $conn = new mysqli($servername, $username, '', $database);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Insert user records
// $sql_insert_users = "INSERT INTO users (username, password, gmail) VALUES 
//                     ('yawaranwar12', 'YawarAnwar@12', 'syd.yawaranwar@gmail.com'),
//                     ('AmanGouri12', 'AmaanGouri@12', 'amaangouri@gmail.com'),
//                     ('huzaifabubere12', 'HuzaifaBubere@12', 'huzaifabubere18@gmail.com'),
//                     ('sufyanMaladwalla12', 'Sufyanmaladwalla@12', 'maladwallasufyaan@gmail.com'),
//                     ('swaidmulla12', 'swaidMulla@12', '')";

// if ($conn->query($sql_insert_users) === TRUE) {
//     echo "Five records added to 'users' table successfully<br>";
// } else {
//     echo "Error adding records to 'users' table: " . $conn->error;
// }

// // Prepare the data

// $id_for1 = 210401;
// $prop_for1 = 'b';
// $price1 = 'medium';
// $place1='mumbai';
// $address_prop1 = "Sushanku Codename Big Bonanza Near Guru Nanak Sabha, Guru Nanak Park, Siddharth Nagar, Goregaon West, Mumbai";
// $add_desc1 = "Buying a home at Codename Big Bonanza is a great investment for homebuyers due to its prime location, affordable prices, and comprehensive amenities. The project is designed to cater to the needs of modern-day living and provides facilities like security, clubhouse, maintenance staff, visitor parking, Wi-Fi, rainwater harvesting, CCTV camera, fire safety, lift, Vastu compliance, gym, power backup, children's play area. Investing in a home at Codename Big Bonanza ensures that you lead a comfortable and hassle-free life, with all the essential amenities just a stone's throw away.";
// $area1 = 'medium';
// $prop_type1 = 'r';
// $image1_1 = file_get_contents('./Assets/images/prop_pics/prop1_1.jpg');
// $image2_1 = file_get_contents('./Assets/images/prop_pics/prop1_2.jpg');
// $image3_1 = file_get_contents('./Assets/images/prop_pics/prop1_3.jpg');
// $image4_1 = file_get_contents('./Assets/images/prop_pics/prop1_4.jpg');

// $id_for2 = 210401;
// $prop_for2 = 'b';
// $price2 = 'medium';
// $place2='mumbai';
// $address_prop2 = "Shiv Krupa (Jee & Vee Infrastructure), Near Oberoi Mall, Dindoshi, Goregaon East, Mumbai";
// $add_desc2 = "Shiv Krupa's dwellings are meant to provide you with more control over your daily routine to improve your quality of life. The property comprises gorgeous residences with exquisite rooms and its rank gets further upgraded due to its remarkable beauty. Your life expectancy will increase if you rent or buy a home in this luxurious apartment complex, which has many attractive amenities and is in a popular area.";
// $area2 = 'medium';
// $prop_type2 = 'r';
// $image1_2 = file_get_contents('./Assets/images/prop_pics/prop2_1.jpg');
// $image2_2 = file_get_contents('./Assets/images/prop_pics/prop2_2.jpg');
// $image3_2 = file_get_contents('./Assets/images/prop_pics/prop2_3.jpg');
// $image4_2 = file_get_contents('./Assets/images/prop_pics/prop2_4.jpg');

// $id_for3 = 210401;
// $prop_for3 = 'r';
// $price3 = 'high';
// $place3='mumbai';
// $address_prop3 = "Naushir Bharucha Marg, Sleater Road, Next to Grant Road";
// $add_desc3 = "30 ft. frontage, 14 ft. Ceiling height, main station approach road, parking available";
// $area3 = 'high';
// $prop_type3 = 'c';
// $image1_3 = file_get_contents('./Assets/images/prop_pics/prop3_1.jpg');
// $image2_3 = file_get_contents('./Assets/images/prop_pics/prop3_2.jpg');
// $image3_3 = file_get_contents('./Assets/images/prop_pics/prop3_3.jpg');
// $image4_3 = file_get_contents('./Assets/images/prop_pics/prop3_4.jpg');

// $id_for4 = 210401;
// $prop_for4 = 'b';
// $price4 = 'high';
// $place4='mumbai';
// $address_prop4 = "308, Hermes Atrium, Sector - 11, C.B.D Belapur, Mumbai - 400045";
// $add_desc4 = "	East Facing Corner Property ,Overlooking Main Road, rajanpada Nearby ";
// $area4 = 'high';
// $prop_type4 = 'l';
// $image1_4 = file_get_contents('./Assets/images/prop_pics/prop4_1.jpg');
// $image2_4 = file_get_contents('./Assets/images/prop_pics/prop4_2.jpg');
// $image3_4 = file_get_contents('./Assets/images/prop_pics/prop4_3.jpg');
// $image4_4 = file_get_contents('./Assets/images/prop_pics/prop4_4.jpg');

// $id_for5 = 210401;
// $prop_for5 = 'r';
// $price5 = 'high';
// $place5 = 'mumbai';
// $address_prop5 = "Worli, Mumbai, Worli, Mumbai - South Mumbai, Maharashtra";
// $add_desc5 = "5BHK Luxurious Villa For Sale in worli By Lodha group and name is Lodha Maison";
// $area5 = 'high';
// $prop_type5 = 'r';
// $image1_5 = file_get_contents('./Assets/images/prop_pics/prop5_1.jpg');
// $image2_5 = file_get_contents('./Assets/images/prop_pics/prop5_2.jpg');
// $image3_5 = file_get_contents('./Assets/images/prop_pics/prop5_3.jpg');
// $image4_5 = file_get_contents('./Assets/images/prop_pics/prop5_4.jpg');

// $id_for6 = 210402;
// $prop_for6 = 'b';
// $price6 = 'medium';
// $place6 = 'pune';
// $address_prop6 = "- Marathon Sunset Garden, Opp to Devidayal Garden, Sleater Road, Pune";
// $add_desc6 = "Opp to Devidayal Garden,Devidayal Rd,Mulund West,Mumbai";
// $area6 = 'medium';
// $prop_type6 = 'r';
// $image1_6 = file_get_contents('./Assets/images/prop_pics/prop6_1.jpg');
// $image2_6 = file_get_contents('./Assets/images/prop_pics/prop6_2.jpg');
// $image3_6 = file_get_contents('./Assets/images/prop_pics/prop6_3.jpg');
// $image4_6 = file_get_contents('./Assets/images/prop_pics/prop6_4.jpg');

// $id_for7 = 210402;
// $prop_for7 = 'r';
// $price7 = 'low';
// $place7 = 'pune';
// $address_prop7 = "Charholi Budruk, Pune - North, Maharashtra";
// $add_desc7 = "Pride World City, A 400 Acre destination at Charholi is the long-awaited response for progressive, Luxurious, world-class projects in Pune. It has house premium projects that offer all lifestyle experiences, without the urban difficulties of pollution, traffic, space congestion and more. Pride World City also offers to create an enthralling living experience that is harmonious and sensitive to the surrounding ecology, and yet facilitates a high-quality lifestyle that is built on robust foundations of universal design and world-class infrastructure. The 400-acre project would be developed in multiple phases and may contain IT Parks, Schools, Hospitals, Multiplexes and much more.";
// $area7 = 'low';
// $prop_type7 = 'r';
// $image1_7 = file_get_contents('./Assets/images/prop_pics/prop7_1.jpg');
// $image2_7 = file_get_contents('./Assets/images/prop_pics/prop7_2.jpg');
// $image3_7 = file_get_contents('./Assets/images/prop_pics/prop7_3.jpg');
// $image4_7 = file_get_contents('./Assets/images/prop_pics/prop7_4.jpg');

// $id_for8 = 210402;
// $prop_for8 = 'r';
// $price8 = 'high';
// $place8 = 'pune';
// $address_prop8 = "Naushir Bharucha Marg, Sleater Road, Pune Maharashtra";
// $add_desc8 = "5BHK Luxurious Villa For Sale in pune By Lodha group and name is Lodha Maison";
// $area8 = 'high';
// $prop_type8 = 'c';
// $image1_8 = file_get_contents('./Assets/images/prop_pics/prop8_1.jpg');
// $image2_8 = file_get_contents('./Assets/images/prop_pics/prop8_2.jpg');
// $image3_8 = file_get_contents('./Assets/images/prop_pics/prop8_3.jpg');
// $image4_8 = file_get_contents('./Assets/images/prop_pics/prop8_4.jpg');

// $id_for9 = 210402;
// $prop_for9 = 'b';
// $price9 = 'low';
// $place9 = 'pune';
// $address_prop9 = "Banyan Tree, Hinjewadi, Pune - Pimpri Chinchwad Municipal Corporation, Maharashtra";
// $add_desc9 = "Premium residential bungalow plots in prime gated community with 2 Acres of amenities.";
// $area9 = 'medium';
// $prop_type9 = 'l';
// $image1_9 = file_get_contents('./Assets/images/prop_pics/prop9_1.jpg');
// $image2_9 = file_get_contents('./Assets/images/prop_pics/prop9_2.jpg');
// $image3_9 = file_get_contents('./Assets/images/prop_pics/prop9_3.jpg');
// $image4_9 = file_get_contents('./Assets/images/prop_pics/prop9_4.jpg');

// $id_for10 = 210402;
// $prop_for10 = 'r';
// $price10 = 'medium';
// $place10 = 'pune';
// $address_prop10 = "Bhugaon, Pune, Bhugaon, Pune - Western Outskirts, Maharashtra";
// $add_desc10 = "Beautiful Bungalow for Sale with the huge plot and awesome layout. This Bungalow is the part of 190 Acre biggest Township in Pune, Near to Manas lake, Bhugaon, 5Km from Chandani chowk.Township already handover with beautiful infrastructure, with spacious gardens, walking track, cycling track, Horse riding place, Sri Sri Ravishankar school, The cliff restaurant and many more.";
// $area10 = 'medium';
// $prop_type10 = 'r';
// $image1_10 = file_get_contents('./Assets/images/prop_pics/prop10_1.jpg');
// $image2_10 = file_get_contents('./Assets/images/prop_pics/prop10_2.jpg');
// $image3_10 = file_get_contents('./Assets/images/prop_pics/prop10_3.jpg');
// $image4_10 = file_get_contents('./Assets/images/prop_pics/prop10_4.jpg');

// $id_for11 = 210403;
// $prop_for11 = 'r';
// $price11 = 'medium';
// $place11 = 'thane';
// $address_prop11 = "Kolshet Road, Thane - Central Thane, Maharashtra";
// $add_desc11 = "Introducing Eternia at Kalpataru Parkcity, 2 & 3 Bed Homes for people that think and live alike. Spread across acres of green with breathtaking views of the Grand Central Park, these beautifully-designed living spaces come equipped with world-class amenities that offer you the highest standards of living. Dotted across the property are pockets of spaces specially-made for you to do everything you love. Be it following the stars from your private balcony or bringing your A game to the courts down below; watching the kids grow up with nature, or simply spending time with a community you love. Eternia is a paradise nestled among the verdant greens of a township that is going to be full of experiences.";
// $area11 = 'medium';
// $prop_type11 = 'r';
// $image1_11 = file_get_contents('./Assets/images/prop_pics/prop11_1.jpg');
// $image2_11 = file_get_contents('./Assets/images/prop_pics/prop11_2.jpg');
// $image3_11 = file_get_contents('./Assets/images/prop_pics/prop11_3.jpg');
// $image4_11 = file_get_contents('./Assets/images/prop_pics/prop11_4.jpg');

// $id_for12 = 210403;
// $prop_for12 = 'b';
// $price12 = 'low';
// $place12 = 'thane';
// $address_prop12 = "Ghodbunder Road, Thane - Central Thane, Maharashtra";
// $add_desc12 = "The prime location brings with it an array of advantageous perks with it. Located at Bhayanderpada, Ghodbunder Road, the project is established along the National Highway. It is in close proximity to Gaimukh Metro Station. It opens up to entry point to ane when travelling from Western Line. e most amusing part of shelter you seek and possession you aunt. We assure that THE PROMISE is an uninterrupted view of a creek & mountains taking you closer to nature. It is located near Gaimukh Chowpatty with a proposed Water Jetty on the opposite side road. Life here is filled with amusing benefits which will make you yearn for more.";
// $area12 = 'low';
// $prop_type12 = 'r';
// $image1_12 = file_get_contents('./Assets/images/prop_pics/prop12_1.jpg');
// $image2_12 = file_get_contents('./Assets/images/prop_pics/prop12_2.jpg');
// $image3_12 = file_get_contents('./Assets/images/prop_pics/prop12_3.jpg');
// $image4_12 = file_get_contents('./Assets/images/prop_pics/prop12_4.jpg');

// $id_for13 = 210403;
// $prop_for13 = 'r';
// $price13 = 'medium';
// $place13 = 'thane';
// $address_prop13 = "Kolshet Road, Thane, Kolshet, Thane - Central Thane, Maharashtra";
// $add_desc13 = "Lodha Supremus is a Grade A estate in Mumbai developed and maintained by Lodha Group. The estate provides inhouse parking and has more parking options nearby. It is easily accessible through public transport and is close to Thane railway station. It is a LEED Gold rated development with larger leasable floor plate and is equipped with all the modern amenities. Size – 2880 sqft";
// $area13 = 'medium';
// $prop_type13 = 'c';
// $image1_13 = file_get_contents('./Assets/images/prop_pics/prop13_1.jpg');
// $image2_13 = file_get_contents('./Assets/images/prop_pics/prop13_2.jpg');
// $image3_13 = file_get_contents('./Assets/images/prop_pics/prop13_3.jpg');
// $image4_13 = file_get_contents('./Assets/images/prop_pics/prop13_4.jpg');

// $id_for14 = 210403;
// $prop_for14 = 'b';
// $price14 = 'low';
// $place14 = 'thane';
// $address_prop14 = "Karjat, Thane - Beyond Thane, Maharashtra";
// $add_desc14 = "Beautiful Bungalow for Sale with the huge plot and awesome layout. This Bungalow is of 1667 sqft in Thane, Near to Vanus lake, Bhugaon, 5Km from Chandani chowk.Township already handover with beautiful infrastructure, with spacious gardens, walking track, cycling track, Horse riding place.";
// $area14 = 'medium';
// $prop_type14 = 'l';
// $image1_14 = file_get_contents('./Assets/images/prop_pics/prop14_1.jpg');
// $image2_14 = file_get_contents('./Assets/images/prop_pics/prop14_2.jpg');
// $image3_14 = file_get_contents('./Assets/images/prop_pics/prop14_3.jpg');
// $image4_14 = file_get_contents('./Assets/images/prop_pics/prop14_4.jpg');

// $id_for15 = 210403;
// $prop_for15 = 'b';
// $price15 = 'medium';
// $place15 = 'thane';
// $address_prop15 = "- Dombivli East, Thane, Dombivli East, Thane - Beyond Thane, Maharashtra";
// $add_desc15 = "Introducing exquisite residential Villa a blend of luxury and comfort that redefines modern living. 250 to 600 sq.yds villas in a secure gated community in Palava. it offers a wide range of Vastucompliant plots, ranging from 250 to 600 sq yards. Furthermore, you get access to lovely open spaces, beautiful treelined avenues, meditation zones, lifestyle amenities inside the privacy of a gated community. The Booking are open, kindly contact us for more details and site visit. We can set up site visit any time at your convenience.";
// $area15 = 'medium';
// $prop_type15 = 'r';
// $image1_15 = file_get_contents('./Assets/images/prop_pics/prop15_1.jpg');
// $image2_15 = file_get_contents('./Assets/images/prop_pics/prop15_2.jpg');
// $image3_15 = file_get_contents('./Assets/images/prop_pics/prop15_3.jpg');
// $image4_15 = file_get_contents('./Assets/images/prop_pics/prop15_4.jpg');

// $id_for16 = 210404;
// $prop_for16 = 'b';
// $price16 = 'low';
// $place16 = 'navi mumbai';
// $address_prop16 = "Panvel, Navi Mumbai - Central Navi Mumbai, Maharashtra";
// $add_desc16 = "This premium residency project provides a multitude of amenities like gymnasium, fully air-conditioned lobbies, an amphitheater, a swimming pool, a club house and a lush green and massive garden, amongst many others. All the rooms designed in this project will have branded fixtures and fittings.";
// $area16 = 'low';
// $prop_type16 = 'r';
// $image1_16 = file_get_contents('./Assets/images/prop_pics/prop16_1.jpg');
// $image2_16 = file_get_contents('./Assets/images/prop_pics/prop16_2.jpg');
// $image3_16 = file_get_contents('./Assets/images/prop_pics/prop16_3.jpg');
// $image4_16 = file_get_contents('./Assets/images/prop_pics/prop16_4.jpg');

// $id_for17 = 210404;
// $prop_for17 = 'r';
// $price17 = 'medium';
// $place17 = 'navi mumbai';
// $address_prop17 = "Juinagar, Navi Mumbai - Central Navi Mumbai, Maharashtra";
// $add_desc17 = "Raheja District, Juinagar, is all set to launch a Luxurious Residential township project in Navi Mumbai opposite Juinagar Railway Station and on Sion Panvel or Thane Belapur Highway. It will be a mixture of IT Commercials & Residences within. It would be High Rise Towers and would have configurations 2,3 &4bhk Ultra luxurious residences. Raheja Solaris- a beautiful project, a well-planned living space that is the hallmark of thoughtfully laid out flats at reasonable prices. It brings a lifestyle that befits royalty with its beautiful apartments.";
// $area17 = 'medium';
// $prop_type17 = 'r';
// $image1_17 = file_get_contents('./Assets/images/prop_pics/prop17_1.jpg');
// $image2_17 = file_get_contents('./Assets/images/prop_pics/prop17_2.jpg');
// $image3_17 = file_get_contents('./Assets/images/prop_pics/prop17_3.jpg');
// $image4_17 = file_get_contents('./Assets/images/prop_pics/prop17_4.jpg');

// $id_for18 = 210404;
// $prop_for18 = 'b';
// $price18 = 'low';
// $place18 = 'navi mumbai';
// $address_prop18 = "Belapur sector-11 navi mumbai 400614, CBD Belapur, Navi Mumbai - Central Navi Mumbai, Maharashtra";
// $add_desc18 = "Good location near by railway station 2 cabin 1 confrence reciption 15 workstation 3 washroom";
// $area18 = 'high';
// $prop_type18 = 'c';
// $image1_18 = file_get_contents('./Assets/images/prop_pics/prop18_1.jpg');
// $image2_18 = file_get_contents('./Assets/images/prop_pics/prop18_2.jpg');
// $image3_18 = file_get_contents('./Assets/images/prop_pics/prop18_3.jpg');
// $image4_18 = file_get_contents('./Assets/images/prop_pics/prop18_4.jpg');

// $id_for19 = 210404;
// $prop_for19 = 'r';
// $price19 = 'medium';
// $place19 = 'navi mumbai';
// $address_prop19 = "Wadhwa wise city panvel, Palaspa, Navi Mumbai - Central Navi Mumbai, Maharashtra";
// $add_desc19 = "Introducing Super Premium Bungalow Plots Where Luxury Meets Natures Splendor Welcome to Wadhwa Wise City, an exclusive haven of super premium bungalow plots nestled at the foothills, offering breathtaking views of cascading waterfalls. Immerse yourself in the lap of natures magnificence, as you indulge in the pinnacle of luxury living.";
// $area19 = 'medium';
// $prop_type19 = 'l';
// $image1_19 = file_get_contents('./Assets/images/prop_pics/prop19_1.jpg');
// $image2_19 = file_get_contents('./Assets/images/prop_pics/prop19_2.jpg');
// $image3_19 = file_get_contents('./Assets/images/prop_pics/prop19_3.jpg');
// $image4_19 = file_get_contents('./Assets/images/prop_pics/prop19_4.jpg');

// $id_for20 = 210404;
// $prop_for20 = 'b';
// $price20 = 'medium';
// $place20 = 'navi mumbai';
// $address_prop20 = "Panvel, Navi Mumbai, Panvel, Navi Mumbai - Central Navi Mumbai, Maharashtra";
// $add_desc20 = "Luxury gated community villas with sceninc views of waterfalls and mountains, with all modern amenities and best connectivity.";
// $area20 = 'high';
// $prop_type20 = 'r';
// $image1_20 = file_get_contents('./Assets/images/prop_pics/prop20_1.jpg');
// $image2_20 = file_get_contents('./Assets/images/prop_pics/prop20_2.jpg');
// $image3_20 = file_get_contents('./Assets/images/prop_pics/prop20_3.jpg');
// $image4_20 = file_get_contents('./Assets/images/prop_pics/prop20_4.jpg');

// $id_for21 = 210405;
// $prop_for21 = 'r';
// $price21 = 'low';
// $place21 = 'nagpur';
// $address_prop21 = "Jaitala, Nagpur, Maharashtra";
// $add_desc21 = "For those looking to buy a residential property, here comes one of the choicest offerings in Nagpur, at Hingna Road. Brought to you by Pioneer Supreme, Pioneer Emerald is among the newest addresses for homebuyers. There are apartments for sale in Pioneer Emerald";
// $area21 = 'high';
// $prop_type21 = 'r';
// $image1_21 = file_get_contents('./Assets/images/prop_pics/prop21_1.jpg');
// $image2_21 = file_get_contents('./Assets/images/prop_pics/prop21_2.jpg');
// $image3_21 = file_get_contents('./Assets/images/prop_pics/prop21_3.jpg');
// $image4_21 = file_get_contents('./Assets/images/prop_pics/prop21_4.jpg');

// $id_for22 = 210405;
// $prop_for22 = 'r';
// $price22 = 'low';
// $place22 = 'nagpur';
// $address_prop22 = "Pipla, Nagpur, Maharashtra";
// $add_desc22 = "Shree Gajanan Vihar III in Besa, Nagpur is a ready-to-move housing society. It offers apartments in varied budget range. These units are a perfect combination of comfort and style, specifically designed to suit your requirements and conveniences. There are 3BHK apartments available in this project. This housing society is now ready to be called home as families have started moving in. Check out some of the features of Shree Gajanan Vihar housing society";
// $area22 = 'medium';
// $prop_type22 = 'r';
// $image1_22 = file_get_contents('./Assets/images/prop_pics/prop22_1.jpg');
// $image2_22 = file_get_contents('./Assets/images/prop_pics/prop22_2.jpg');
// $image3_22 = file_get_contents('./Assets/images/prop_pics/prop22_3.jpg');
// $image4_22 = file_get_contents('./Assets/images/prop_pics/prop22_4.jpg');


// $id_for23 = 210405;
// $prop_for23 = 'b';
// $price23 = 'low';
// $place23 = 'nagpur';
// $address_prop23 = "Plot no 27 opp hotel center point, Ram Das Peth, Nagpur, Maharashtra";
// $add_desc23 = "Welcome to the prime commercial hub of Ram Das Peth, Nagpur, where a spacious and well-ventilated Commercial Office Space is available for rent. This office space offers a super area of 5500 sqft and a carpet area of 4500 sqft, ensuring ample space for your business needs.";
// $area23 = 'high';
// $prop_type23 = 'c';
// $image1_23 = file_get_contents('./Assets/images/prop_pics/prop23_1.jpg');
// $image2_23 = file_get_contents('./Assets/images/prop_pics/prop23_2.jpg');
// $image3_23 = file_get_contents('./Assets/images/prop_pics/prop23_3.jpg');
// $image4_23 = file_get_contents('./Assets/images/prop_pics/prop23_4.jpg');

// $id_for24 = 210405;
// $prop_for24 = 'r';
// $price24 = 'low';
// $place24 = 'nagpur';
// $address_prop24 = "KH No 187111, Pawangaon Dhargaon Road Opp Eden Garden Lawn Behind Prabha City PawanGaon Nagpur,Maharashtra";
// $add_desc24 = "East facing plots. RL ready plots available for sale deed. With modern amenities like swimming pool, clubhouse, temple. Bank finance available from all major banks.";
// $area24 = 'high';
// $prop_type24 = 'l';
// $image1_24 = file_get_contents('./Assets/images/prop_pics/prop24_1.jpg');
// $image2_24 = file_get_contents('./Assets/images/prop_pics/prop24_2.jpg');
// $image3_24 = file_get_contents('./Assets/images/prop_pics/prop24_3.jpg');
// $image4_24 = file_get_contents('./Assets/images/prop_pics/prop24_4.jpg');

// $id_for25 = 210405;
// $prop_for25 = 'b';
// $price25 = 'high';
// $place25 = 'nagpur';
// $address_prop25 = "Wardha Road, Nagpur, Maharashtra";
// $add_desc25 = "The apartment is in Jamtha, Near VCA Stadium, Wardha Road, Nagpur. It has proximity to major destinations of the city. The house has structural elegance and a panoramic view of lush green lands around, R.C.C framed structure, vitrified tiles in hall, semi-vitrified tiles in other rooms, antiskid tiles in toilets and coloured glazed tiles in dado etc.";
// $area25 = 'high';
// $prop_type25 = 'r';
// $image1_25 = file_get_contents('./Assets/images/prop_pics/prop25_1.jpg');
// $image2_25 = file_get_contents('./Assets/images/prop_pics/prop25_2.jpg');
// $image3_25 = file_get_contents('./Assets/images/prop_pics/prop25_3.jpg');
// $image4_25 = file_get_contents('./Assets/images/prop_pics/prop25_4.jpg');


// // Insert data into the properties table

// $sql_insert_properties = "INSERT INTO properties (id_for, prop_for, price, address_prop, add_desc, area, prop_type, image1, image2, image3, image4,place) VALUES 
// (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
// for ($no=1;$no<=25;$no++){
//     $n=(string)$no;

//     // $id_for = strval($id_for);
//     // $prop_for = strval($id_for);
//     // $price = strval($id_for);
//     // $address_prop = strval($id_for);
//     // $add_desc = strval($id_for);
//     // $area = strval($id_for);
//     // $prop_type = strval($id_for);
//     // $image1 = strval($id_for);
//     // $image2 = strval($id_for);
//     // $image3 = strval($id_for);
//     // $image4 = strval($id_for);

//     $stmt = $conn->prepare($sql_insert_properties);
//     $stmt->bind_param("isssssssssss", ${'id_for'.$n} , ${'prop_for'.$n}, ${'price'.$n}, ${'address_prop'.$n}, ${'add_desc'.$n}, ${'area'.$n}, ${'prop_type'.$n}, ${'image1_'.$n}, ${'image2_'.$n}, ${'image3_'.$n}, ${'image4_'.$n}, ${'place'.$n});

//     if ($stmt->execute()) {
//     echo "Data $no added to 'properties' table successfully<br>";
//     } else {
//     echo "Error adding data to 'properties' table: " . $conn->error;
// }
// }


// // Close statement and connection
// $stmt->close();

// // // Query to fetch the first image
// // $sql_select_image = "SELECT image3 FROM properties LIMIT 1";

// // $result = $conn->query($sql_select_image);

// // if ($result->num_rows > 0) {
// //     // Output image
// //     $row = $result->fetch_assoc();
// //     header('Content-Type: image/jpeg');
// //     echo $row['image3'];
// // } else {
// //     echo "No images found";
// // }

// // Close connection
// $conn->close();
?>
