<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ecommerce</title>
	<!-- <link rel="stylesheet" type="text/css" href="eco.blade.css"> -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style type="text/css">
	@media (max-width: 576px){
		body{
			background: green;
		}
	}
	@media (min-width: 576px){
		body{
			background: blue;
		}
	}
	@media (min-width: 768px){
		body{
			background: red;
		}
	}
	@media (min-width: 1200px){
		body{
			background: lightgrey;
		}
	}

    *{
	margin: 0;
	padding: 0;
	border: border-box;
}
body{
	font-family: 'Popins', sans-serif;
}
.navbar{
	display: flex;
	align-items: center;
}
nav{
	flex: 1;
	text-align: center;
}
nav ul{
	display: inline-block;
	list-style-type: none;
}
nav ul li{
	display: inline-block;
	margin-right: 10px;
	margin-top: 10px;
}
a{
	text-decoration: none;
	color: #555;
}

li{
		list-style: none;
	}
	.menu{
		display: flex;
		align-items: center;
		justify-content: right;
		flex-direction: row;
		gap: 1px;
	}
	.menu-item{
		width: 200px;
		padding: 10px 0px;
		cursor: pointer;
		text-align: center;
		font-size: 20px;
		letter-spacing: 1px;
		font-weight: bold;
		color: var(--color);
		text-transform: uppercase;
		border: 2px solid var(--color);
		border-radius: 20px;
		transition: box-shadow 0.4s linear, border 04s linear;
	}
	.menu-item:hover{
		box-shadow: inset var(--color) 30px 0 0 4px,
					inset var(--color) -30px 0 0 4px;
	}
p{
	color: #555;
}
.container{
	max-width: 1300px;
	margin: auto;
	padding-left: 25px;
	padding-right: 25px;
}
.row{
	display: flex;
	align-items: center;
	flex-wrap: wrap;
	justify-content: space=around;
}
.col-2{
	flex-basis: 45%;
	min-width: 200px;
}
.col-2 img{
	max-width: 90%;
	padding: 40px 0px;
	padding-top: 0px;
	padding-bottom: 0px;
	box-shadow: 10px 10px 20px white;
	cursor: pointer;
	opacity: 0.5;
	transition: 0.5s;
}
.col-2 img:hover{
	opacity: 1;
	border-radius: 20%;
}
.col-2 h1{
	font-size: 50px;
	line-height: 60px;
	margin: 25px 0;
}
.btn{
	display: inline-block;
	background: #ff523b;
	color: #fff;
	padding: 8px 30px;
	margin: 30px 0;
	border-radius: 30px;
	transition: background 0.5s;
}
.btn:hover{
	background: #563434;
}

.header{
	background: linear-gradient(#ffcccc,#ccccff,#b3ffd9);/*radial-gradient(#fff,#ffd6d6);*/
}
.header .row{
	margin-top: 70px;
}
.categories{
	margin: 70px 0;
}
.col-3{
	flex-basis: 30%;
	min-width: 250px;
	margin-bottom: 30px;
}
.col-3 img{
	width: 70%;
	height: 350px;
	padding: 20px 0px;
	margin-left: 120px;
	cursor: pointer;
	opacity: 0.6;
	transition: 0.5s;
}
.col-3 img:hover{
	opacity: 1;
	box-shadow: 10px 10px 20px black;
	transform: translateY(-40px);
}
.gg{
	display: inline-block;
	background: green;
	color: #fff;
	padding: 10px 30px;
	margin: 30px;
	margin-left: 175px;
	transition: background 0.5s;
}
.gg:hover{
	background: #563434;
}
.high-container{
	max-width: 1080px;
	margin: auto;
	padding-left: 35px;
	padding-right: 35px;
}
.col-4{
	flex-basis:23%;
	min-width: 200px;
	padding:10px;
	margin-bottom: 50px;
	transition: transform 0.5s;
}
.col-4 img{
	width: 100%;
	height: 300px;
	/*padding-left: 10px;*/
	
}
.title{
	text-align: center;
	margin: 0 auto 80px;
	position: relative;
	line-height: 60px;
	color: #555;
	transition: transform 0.5s;
}

.title::after{
	content: '';
	background: #ff523b;
	width: 80px;
	height: 5px;
	border-radius: 5px;
	position: absolute;
	bottom: 0;
	left: 50%;
	transform: translateX(-50%);
}
h4{
	color: #555;
	font-weight: normal;
}
.col-4 p{
	font-size: 14px;
}
/*.rating .fa{
	color: #ff523b;
}
*/
.col-4:hover{
	transform: translateY(-40px);
	opacity: 1;
	box-shadow: 10px 10px 20px black;
}
/*offer*/

.offer{
	background: radial-gradient(#fff,#ffd6d6);
	padding: 10px 0;
}
.col-2 .offer-img{
	margin-left: 60px;
	width: 70%;
	box-shadow: 20px 20px 30px pink;
}

small{
	color: #555;
}
.buy{
	display: inline-block;
	background: #ff523b;
	color: #fff;
	padding: 8px 30px;
	margin: 30px 10px;
	border-radius: 30px;
	transition: background 0.5s;
}
.buy:hover{
	background: #563434;
}

/*------------testimonial--------------*/

.testimonial{
	padding-top: 50px;
}
.testimonial .col-6{
	text-align: center;
	padding: 30px 15px;
	/*padding: 10px;*/
	box-shadow: 0 0 20px 0px grey;
	background: white;
	cursor: pointer;
	transition: transform 0.5s;
}
.col-6 img{
	width: 22%;
	height: 80px;
	padding: 20px 0px;
	margin-left: 5px;
	cursor: pointer;
	border-radius: 50%;
}
.testimonial .col-6:hover{
	transform: translateY(-40px);
}
.fa .fa-quote-left{
	font-size: 70px;
	background-color:black;
	}
.col-6 p{
	font-size: 15px;
	padding-top: 10px;
	margin: 20px;
	color: #777;
}

.testimonial .col-6 h3{
	font-weight: 600;
	color: #555;
	font-size: 16px;
}
.col-6{
	flex-basis: 27%;
	min-width: 100px;
	margin-bottom: 10px;
	margin-left: 40px;
}
/*---------brands---------*/

.brands{
	margin: 100px auto;
}
.col-5{
	width: 100px;
	margin: auto;
}
.col-5 img{
	width: 70%;
	cursor: pointer;
	filter: grayscale(100%);
}
.col-5 img:hover{
	filter: grayscale(0);
}

/*----------footer------*/

.footer{
	background: #000;
	color: #33FAFF;/*#8a8a8a;*/
	font-size: 14px;
	padding: 60px 0 20px;
}
.footer p{
	color: #8a8a8a;
}
.footer h3{
	color: #fff;
	margin-bottom: 20px;
}
.footer-col-1, .footer-col-2, .footer-col-3, .footer-col-4{
	min-width: 250px;
	margin-bottom: 20px;
}
.footer-col-1{
	flex-basis: 30%;
}
.footer-col-2{
	flex-basis: 1;
	text-align: center;
}
.footer-col-2 img{
	width: 180px;
	background: white;
	margin-bottom: 20px;
}
.footer-col-3, .footer-col-4{
	flex-basis: 12%;
	text-align: center;
}
ul{
	list-style-type: none;
}
.app-logo{
	margin-top: 20px;
}
/*.app-logo img{
	width: 140px;

}*/
.footer hr{
	border: none;
	background: #b5b5b5;
	height: 1px;
	margin: 20px 0;
}
.copyright{
	text-align: center;
}
.menu-icon{
	width: 28px;
	margin-left: 20px;
	display: none;
}

/*---------media query for menu-------*/

/*@media only screen and (max-width: 800px){
	nav ul{
		position: absolute;
		top: 70px;
		left: 0;
		background: #333;
		width: 100px;
		overflow: hidden;
		transition: max-height 0.5s;
	}
	nav ul li{
		display: block;
		margin-left: 50px;
		margin-top: 10px;
		margin-bottom: 10px;
	}
	nav ul li a{
		color: #fff;
	}
	.menu-icon{
		display: block;
		cursor: pointer;
	}
}
*/
/*media query for less than  600 screen size*/

/*@media only screen and (max-width: 600px){
	.row{
		text-align: center;
	}
	.col-2, .col-3, .col-4{
		flex-basis: 100%;
	}
}*/
	</style>
</head>
<body>
	<div class="header">
	<div class="container">
		<div class="navbar">

		<div class="logo">
			<img src="https://cdn.shopify.com/s/files/1/0033/6946/7968/files/LOGO_OTAKUS_PNG_110x@2x.png?v=1597157397" width="125px">

		</div>
		<!-- <nav>
			<ul id="MenuItems">
				<li><a href="">Home</a></li>
				<li><a href="">Products</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="">Account</a></li>
			</ul>
		</nav> -->
		<nav>
	<ul class="menu">
		<li class="menu-item" style="--color:#db1866">Home</li>
		<li class="menu-item" style="--color:#37e2d5">Product</li>
		<li class="menu-item" style="--color:#f37121">Order</li>
		<li class="menu-item" style="--color:#fff338">Shop Cart</li>
		<li class="menu-item" style="--color:#b52197">Account</li>
	</ul>
	</nav>
	<!-- <img src="C:\Users\Lenovo\Pictures\Desktop size\figure1.jpg" width="30px" height="30px">
		<img src="C:\Users\Lenovo\Pictures\Desktop size\figure1.jpg" class="menu-icon" onclick="menutoggle()"> -->
	</div>

	<div class="row">
		<div class="col-2">
			<h1>Living Enjoy Otaku<br>Try A New Style!</h1>
			<p>
				Everything isn't still alive. Success isn't always about greatness. <br>
				But, Make happy, Still enjoy, Forget Worry and Join otaku.<br><br>
				Let's collecting figures for happy and welcome buddy.<br>
			</p>
			<a href="" class="btn">Available Now &#8594;</a>
		</div>

		<div class="col-2">
			<img src="https://ae01.alicdn.com/kf/H33228e7548ce452e8bd796251bbaf028K.jpg">
		</div>
	</div>

	</div>
	</div>

<!-- ----------------------featured categories----------- -->

	<div class="categories">
		<div class="small-container">
			<div class="row">
			<div class="col-3">
				<img src="https://qph.fs.quoracdn.net/main-qimg-7519b763f6d8bd47808878035f8f7f79-lq">
				<a href="" class="gg">Show Details &#8594;</a>
			</div>
			<div class="col-3">
				<img src="https://anime-figure.com/static/images/thumbs/xl/1dd808ff66ad256e3d8c732300d0515dea9b0195.jpg">
				<a href="" class="gg">Show Details &#8594;</a>
			</div>
			<div class="col-3">
				<img src="https://cdna.artstation.com/p/assets/images/images/046/279/344/large/kaoru-sakaki-kisekoi-haikei-test2-1243-gigapixel-standard-scale-2-00x.jpg?1644735573">
				<a href="" class="gg">Show Details &#8594;</a>
			</div>
		</div>
		</div>
	</div>


	<!-- featured products -->
	<div class="high-container">
		<h2 class="title">Fetured Products</h2>
		<div class="row">
			<div class="col-4">
				<img src="https://i.pinimg.com/736x/bc/9a/4a/bc9a4a90d74b58f4cf22c69e254f9ffb.jpg">
				<h4>Band 4 Figure</h4>
				<div class="rating">
					<span style="content: \2605";><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605";><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605";><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605";>&#9733;</span>
				</div>
				<p>$540.00</p>
			</div>

			<div class="col-4">
				<img src="https://ae01.alicdn.com/kf/H5846de6e9f4440519934d51aac9c6f12Z/Japanese-Anime-UnionCreative-OVERLORD-III-albedo-PVC-Action-Figure-Toy-Game-Statue-Anime-figure-Collectible-Model.jpg">
				<h4>Band 4 Figure</h4>
				<div class="rating">
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;">&#9733;</span>
				</div>
				<p>$500.00</p>
			</div>

			<div class="col-4">
				<img src="https://pbs.twimg.com/media/FUwlHSRacAASF0l.jpg">
				<h4>Band 3 Figure</h4>
				<div class="rating">
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;">&#9733;</span>
				</div>
				<p>$130.00</p>
			</div>

			<div class="col-4">
				<img src="https://cdn.prime1studio.com/media/catalog/product/cache/1/p1s_cropped_image/1400x2325.5813953488/9df78eab33525d08d6e5fb8d27136e95/s/e/sem-02_cropped.jpg">
				<h4>Band 3 Figure</h4>
				<div class="rating">
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;">&#9733;</span>
				</div>
				<p>$125.00</p>
			</div>


		</div>
<!-- Latest Products -->
		<h2 class="title">Latest Products</h2>
		<div class="row">
			<div class="col-4">
				<img src="https://www.4ugk.com/wp-content/uploads/2021/11/Gon%C2%B7Freecss-1.jpg">
				<h4>Band 4 Figure</h4>
				<div class="rating">
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;">&#9733;</span>
				</div>
				<p>$300.00</p>
			</div>

			<div class="col-4">
				<img src="https://s.alicdn.com/@sc04/kf/H9d164e16bc81433b903e8bd3d93242eeu.jpg">
				<h4>Band 3 Figure</h4>
				<div class="rating">
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;">&#9733;</span>
				</div>
				<p>$120.00</p>
			</div>

			<div class="col-4">
				<img src="https://cdn.shopify.com/s/files/1/0014/2648/9388/products/ultra-tokyo-connection-pvc-scale-figures-danganronpa-1-2-reload-junko-enoshima-pop-up-parade-28288540147756_360x.jpg?v=1633054922">
				<h4>Band 2 Figure</h4>
				<div class="rating">
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;">&#9733;</span>
				</div>
				<p>$78.00</p>
			</div>

			<div class="col-4">
				<img src="https://goodsmileshop.com/medias/sys_master/images/images/h6c/hf8/9222251216926.jpg">
				<h4>Band 3 Figure</h4>
				<div class="rating">
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
					<span style="content: \2605;">&#9733;</span>
				</div>
				<p>$100.00</p>
			</div>

		</div>
	</div>

	<!-- offer -->

	<div class="offer">
		<div class="small-container">
			<div class="row">
				<div class="col-2">
					<img src="https://ae01.alicdn.com/kf/H5846de6e9f4440519934d51aac9c6f12Z/Japanese-Anime-UnionCreative-OVERLORD-III-albedo-PVC-Action-Figure-Toy-Game-Statue-Anime-figure-Collectible-Model.jpg" class="offer-img">
				</div>

				<div class="col-2">
					<p>Exclusively Available on Otaku's Shop</p>
					<h1>Otaku's Shop Band 4</h1>
					<small>
						The Band 4 features a 39.9% larger and outstanding quality (than previous band) Wedding Dress display, full-control portable figures with adjustable brightness, so everything is trustworthly as can be.
					</small>
					<a href="" class="buy">Buy Now &#8594;</a>
				</div>
			</div>
		</div>
	</div>

	<!-- ----------test imonial------ -->

	<div class="testimonial">
		<div class="small-container">
			<div class="row">
				<div class="col-6">
					<span style="content: \2655;"><font color="gold"><b>&#9813;</b></font></span>
					<p>TI always looking forward to gain the top-fan budget<br> Because, I have always shopping herer for my favourites so <br>everything is good as can be.</p>
					<div class="rating">
						<!-- <i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i> -->
						<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
						<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
						<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
						<span style="content: \2605;">&#9733;</span>
					</div>
					<img src="https://i.pinimg.com/736x/86/46/5d/86465de9934a401b7cde43eb40f45e7c.jpg">
					<h3>James Parker</h3>
				</div>

				<div class="col-6">
					<span style="content: \2655;"><font color="gold"><b>&#9813;</b></font></span>
					<p>I always looking forward to gain the top-fan budget<br> Because, I have always shopping herer for my favourites so <br>everything is good as can be.</p>
					<div class="rating">
						<!-- <i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i> -->
						<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
						<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
						<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
						<span style="content: \2605;">&#9733;</span>
					</div>
					<img src="https://i.pinimg.com/236x/40/30/b6/4030b6b5c6980ab4cec10f3fb6fb2eec.jpg">
					<h3>Wyane Parker</h3>
				</div>

				<div class="col-6">
					<span style="content: \2655;"><font color="gold"><b>&#9813;</b></font></span>
					<p>TI always looking forward to gain the top-fan budget<br> Because, I have always shopping herer for my favourites so <br>everything is good as can be.</p>
					<div class="rating">
						<!-- <i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i> -->
						<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
						<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
						<span style="content: \2605;"><font color="gold"><b>&#9733;</b></font></span>
						<span style="content: \2605;">&#9733;</span>
					</div>
					<img src="https://i.pinimg.com/550x/8d/4f/44/8d4f442214edc01230b38228bad5226f.jpg">
					<h3>James Parker</h3>


				</div>


			</div>
		</div>
	</div>

	<!-- -----------------brands-------------- -->

	<div class="brand">
		<div class="small-container">	
			<div class="row">
				<div class="col-5">
					<a href="https://www.facebook.com/"><img src="https://icon-library.com/images/facebook-icon-transparent-background/facebook-icon-transparent-background-27.jpg"></a>
				</div>

				<div class="col-5">
					<a href="https://www.instagram.com/"><img src="https://icon-library.com/images/facebook-icon-transparent-background/facebook-icon-transparent-background-2.jpg"></a>
				</div>

				<div class="col-5">
					<a href="https://twitter.com/"><img src="https://icon-library.com/images/facebook-icon-transparent-background/facebook-icon-transparent-background-20.jpg"></a>
				</div>

				<div class="col-5">
					<a href="https://www.youtube.com/"><img src="https://icon-library.com/images/youtube-icon-ico-file/youtube-icon-ico-file-8.jpg"></a>
				</div>

				<div class="col-5">
					<a href="https://www.xbox.com/en-US?xr=mebarnav"><img src="https://icon-library.com/images/xbox-icon-png/xbox-icon-png-15.jpg"></a>
				</div>

			</div>
		</div>
	</div>

	<!-- --------footer----- -->

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Download Our App:</h3>
					<font color="#33FAFF"><p>Download App for Android and IOS mobile phone.</font>
					</p>
					<div class="app-logo">
						<a href="https://play.google.com/store/games?hl=en&gl=US">
							<img src="https://icon-library.com/images/google-play-png-icon/google-play-png-icon-24.jpg" width="100px" height="100px"></a>
						<a href="https://www.apple.com/app-store/">
						<img src="https://icon-library.com/images/apple-app-store-icon-vector/apple-app-store-icon-vector-20.jpg" width="180px" height="110px"></a>
					</div>
				</div>

				<div class="footer-col-2">
					<img src="http://images6.fanpop.com/image/photos/41800000/Zero-Two-bluedopamine-41813035-664-376.gif" style="box-shadow:0px 0px 20px pink;">
					<p style="text-shadow: 0px 0px 30px #DE70A2;"><font color="#DE70A2">
						Our Purpose Is To Sustainably Make the Pleasure and<br> Benefits of Figures Accessible to the Many.
						</font>
					</p>
				</div>

				<div class="footer-col-3">
					<h3>Useful Links</h3>
					<ul>
						<a href=""></a><li>Coupons</li></a><br>
						<a href=""></a><li>Blog Post</li></a><br>
						<a href=""></a><li>Return Policy</li></a><br>
						<a href=""></a><li>Join Affiliate</li></a><br>
					</ul>
				</div>

				<div class="footer-col-4">
					<h3>Follow us</h3>
					<ul>
						<a href="https://www.facebook.com/"><li><font color="#33FAFF">Facebook</font></li></a><br>
						<a href="https://twitter.com/"><li><font color="#33FAFF">Twitter</font></li></a><br>
						<a href="https://www.instagram.com/"><li><font color="#33FAFF">Instagram</font></li></a><br>
						<a href="https://www.youtube.com/"><li><font color="#33FAFF">YouTube</font></li></a><br>
					</ul>

				</div>
			</div>
			<hr>
			<p class="copyright"><font color="#CE334A">Copyright &copy;&nbsp;2022 - Kaung Set Khant</font></p>
		</div>
	</div>

<!-- 	js for toggle menu -->

<script>
// 	var MenuItems = document.getElementById("MenuItems");

// 	MenuItems.style.maxHeight = "0px";

// 	function menutoggle(){
// 		if (MenuItems.style.maxHeight == "0px")
// 		{
// 			MenuItems.style.maxHeight = "200px";
// 		}
// 		else
// 		{
// 			MenuItems.style.maxHeight = "0px";
// 		}
// 	}
</script>
</body>
</html>