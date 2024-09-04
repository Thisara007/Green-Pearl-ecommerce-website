<?php 
include_once "header.php";
?>

	<section class="home" id="home">
		
		<div class="content">
			<h6>welcome to<h6>
			<h3> Green Pearl</h3>
			<span>So many eco products under your finger tips</span>
			<p>
				Eco products, short for ecological products, environmental responsibility throughout their lifecycle. 
			</p>
			<a href="#" class="btn">Shop now</a>
		</div>
	</section>





	<section class="about" id="about">

		<h1 class="heading"><span>about </span>us</h1>
		<div class="row">

			<div class="vid_container">
				<video src="photos/vid1.mp4" loop autoplay muted></video> 
				<h3>Go green </h3>
				
			</div>

			<div class="content">
				<h3>Why choose us</h3>
				<p>Sri Lankan eco products blend traditional craftsmanship with sustainable practices, offering consumers a guilt-free choice for a greener lifestyle. From organic teas to handmade textiles, these products embody the nation's commitment to preserving its natural beauty while supporting local communities. Each purchase not only promotes environmental stewardship but also contributes to the livelihoods of skilled artisans across Sri Lanka.</p>
				<a href="#" class="btn">learn more</a>
			</div>
		</div>
	</section>
	<section class="products" id ="products">
		<h1 class="heading">lastest <span>products</span></h1>

		<div class="Box-container">
    <?php 
        require_once "includes/dbh.inc.php";
        $sql = "SELECT * FROM products;";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($item = mysqli_fetch_assoc($result)) {
                $discount = $item["P_discount"];
                $name = $item["P_name"];
                $price = $item["P_price"];
                echo "<div class='box'>";
                echo "<span class='discount'>{$discount}%</span>";
                echo "<div class='image'>";
                echo "<img src='includes/upload_img/" . $item["P_picture"] . "' alt='$name'>";
                echo "<div class='icons'>";
                echo "<a href='#' class='wishlist'>favorite</a>";
                echo "<a href='#' class='add_to_cart'>Add to cart</a>";
                echo "<a href='#' class='share'>share</a>";
                echo "</div>";
                echo "</div>";
                echo "<div class='content'>";
                echo "<h3>$name</h3>";
                echo "<div class='price'>$$price<span></span></div>";
                echo "</div>";
                echo "</div>";
            }
        }
    ?>
</div>
	</section>

	

<section class="review" id="review">
	<h1 class="heading">customers <span>review</span></h1>
	<div class="box-container">
		<div class="box">
			<div class="stars">
				<i class="strts"><span class="material-symbols-outlined">grade</span></i>
				<i class="strts"><span class="material-symbols-outlined">grade</span></i>
				<i class="strts"><span class="material-symbols-outlined">grade</span></i>
				<i class="strts"><span class="material-symbols-outlined">grade</span></i>
				<i class="strts"><span class="material-symbols-outlined">grade</span></i>
				
			</div>
			
				<p>Sri Lankan eco products blend traditional craftsmanship with sustainable practices, offering consumers a guilt-free choice for a greener lifestyle. From organic teas to handmade textiles, these products embody the nation's commitment to preserving its natural beauty while supporting  skilled artisans across Sri Lanka.</p>
			<div class="user">
				<img src="img2.jpeg" alt="">
				<div class="user-info">
					<h3>Jhone deo</h3>
					<span>happy customer</span>
				</div>
			</div>
			<span class="quote-icon"><span class="material-symbols-outlined">format_quote</span></span>
		</div>
				<div class="box">
			<div class="stars">
				<i class="strts"><span class="material-symbols-outlined">grade</span></i>
				<i class="strts"><span class="material-symbols-outlined">grade</span></i>
				<i class="strts"><span class="material-symbols-outlined">grade</span></i>
				<i class="strts"><span class="material-symbols-outlined">grade</span></i>
				<i class="strts"><span class="material-symbols-outlined">grade</span></i>
				
			</div>
			
				<p>Sri Lankan eco products blend traditional craftsmanship with sustainable practices, offering consumers a e. From organic teas to handmade textiles, thesase not only promotes environmental stewardship but also contributes to the livelihoods of killed artisans across Sri Lanka.</p>
			<div class="user">
				<img src="img2.jpeg" alt="">
				<div class="user-info">
					<h3>Jhone deo</h3>
					<span>happy customer</span>
				</div>
			</div>
			<span class="quote-icon"><span class="material-symbols-outlined">format_quote</span></span>
		</div>
				<div class="box">
			<div class="stars">
				<i class="strts"><span class="material-symbols-outlined">grade</span></i>
				<i class="strts"><span class="material-symbols-outlined">grade</span></i>
				<i class="strts"><span class="material-symbols-outlined">grade</span></i>
				<i class="strts"><span class="material-symbols-outlined">grade</span></i>
				<i class="strts"><span class="material-symbols-outlined">grade</span></i>
				
			</div>
			
				<p>Sri Lankan eco products blend traditional craftsmanship with sustainable practices, offering not only promotes environmental stewardship but also contributes to the livelihoods of skilled artisans across Sri Lanka.</p>
			<div class="user">
				<img src="img2.jpeg" alt="">
				<div class="user-info">
					<h3>Jhone deo</h3>
					<span>happy customer</span>
				</div>
			</div>
			<span class="quote-icon"><span class="material-symbols-outlined">format_quote</span></span>
		</div>
		
	</div>
	
</section>

<section class="contact" id="contact">
	<h1 class="heading"><span>Contact </span>us</h1>

	<div class="row">
		<form action="">
			<input type="text" placeholder="Name" class="box">
			<input type="email" placeholder="email" class="box">
			<input type="number" placeholder="number" class="box">
			<textarea name="" class="box" placeholder="message" id="" cols=30 rows="10"></textarea>
			<input type="submit" value="send message" class="btn">
		</form>
	
		<div class="image">
			<img src="img3.jpeg">
		
		</div>
	</div>
</section>

<?php 
include_once "footer.php";
?>


