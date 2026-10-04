<?php ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/equip.css">
	<title>Agriculture</title>
</head>
<body>
	<nav>
		<div class="logo">
			<a href="">AGRICULTURE</a>
		</div>
		<ul>
			<li><b><a href="index.php">HOME</a></b></li>
			<li><b><a href="cropp.php">CROPS</a></b></li>
			<li><b><a href="pesticides.php">PESTICIDES</a></b></li>
			<li><b><a href="equip.php">EQUIPMENTS</a></b></li>
			<li><b><a href="loginn.php">LOGIN</a></b></li>
			<li><b><a href="reviews.php">REVIEWS</a></b></li>
		</ul>
	</nav>
	<div class="hero">
		<h1>Equipments</h1>
		<div class="ebox">
			<div id="slide">
				<div class="card">
					<div class="profile">
						<img src="img/plough.webp">
						<div>
							<h2>Plough</h2>
						</div>
					</div>
					<p><font size=4>Eventually, the plough was developed to cut a long soil slice and turn it upside down, burying the surface residue, conserving moisture, aerating the soil and killing weeds.Ploughs are of three types: wooden ploughs, iron or inversion ploughs and special purpose ploughs. Indigenous plough is an implement which is made of wood with an iron share point. It consists of body, shaft pole, share and handle.</font></p>
					<a href="formproduct.php"><button class="button button1">Buy Now</button></a>
				</div>
				<div class="card">
					<div class="profile">
						<img src="img/harve.jpg">
						<div>
							<h2>Combine Harvester</h2>
						</div>
					</div>
					<p>The modern combine harvester, or simply combine, is a machine designed to harvest a variety of grain crops. The name derives from its combining four separate harvesting operations—reaping, threshing, gathering, and winnowing—to a single process.Among the crops harvested with a combine are wheat, rice, oats, rye, barley, corn (maize), sorghum, soybeans.Combine harvesters are one of the most economically important labour-saving inventions, reducing the fraction of the population engaged in agriculture.</p>
					<a href="formproduct.php"><button class="button button1">Buy Now</button></a>
				</div>
				<div class="card">
					<div class="profile">
						<img src="img/rr.jpg">
						<div>
							<h2>Rotary Tiller</h2>
						</div>
					</div>
					<p>It has a Semi automatic dual speed gear box, which provides option of 2 different rotor rpm for different soil conditions and applications. We can easily change the rotor speed with the lever attached , without removing the back cover of the gear box. Heavy duty side gear drive in oil bath which ensures high performance in all working conditions. Heavy duty spring assembly in plank which ensures perfectly leveled and finished seedbed.</p>
					<a href="formproduct.php"><button class="button button1">Buy Now</button></a>
				</div>
				<div class="card">
					<div class="profile">
						<img src="img/sp.jpeg">
						<div>
							<h2>Fertilizer Sprayer</h2>
						</div>
					</div>
					<p>Sprayer is a device used in agriculture used to spray liquids like water, insecticides, and pesticides in agriculture. They are also used to spray herbicides and fertilizers to crops in agriculture. They are the equipment used for applying liquid substances to plants or crops. These substances could be fertilisers, herbicides, or pesticides – all of which are important for the maintenance of crop health during the crop growth cycle. spraying and dusting, in agriculture, the standard methods of applying pest-control chemicals and other compounds.</p>
					<a href="formproduct.php"><button class="button button1">Buy Now</button></a>
				</div>
				<div class="card">
					<div class="profile">
						<img src="img/see.webp">
						<div>
							<h2>Seeder</h2>
						</div>
					</div>
					<p>A seeding machine or seeder is a machine used in agriculture which sows seeds for crops by dropping seeds into a straight furrow within the soil at precise rates and specific depths.The process of including and enhancing crystallization by adding a crystal of pure substance into its saturated solution is called seeding. Super Seeder _ Seeding Machine Manufacturer and Supplier Fieldking.</p>
					<a href="formproduct.php"><button class="button button1">Buy Now</button></a>
				</div>
			</div>
			<div class="sidebar">
				<img src="img/up.jpg" id="uparrow">
				<img src="img/down.jpg" id="downarrow">
			</div>
		</div>
	</div>
	<script>
		var slide = document.getElementById("slide");
		var uparrow = document.getElementById("uparrow");
		var downarrow = document.getElementById("downarrow");
		let x = 0;
		uparrow.onclick = function() {
			if(x > "-1800") {
				x = x - 450;
				slide.style.top = x + "px";
			}
		}
		downarrow.onclick = function() {
			if(x < 0) {
				x = x + 450;
				slide.style.top = x + "px";
			}
		}
	</script>
</body>
</html>