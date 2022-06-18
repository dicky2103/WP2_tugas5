<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Web Prog II | Merancang Template sederhana dengan codeigniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/stylebuku.css">
</head>

<body>
	<style>
	body{
	background: #eee;
	color: #333;
	font-family: sans-serif;
	font-size:15px;
	}
	#wrapper{
	background: #fff;
	width: 1100px;
	margin: 20px auto;
}

#wrapper header{
	background: #232323;
	padding: 20px;
}

#wrapper header hgroup{
	float: left;
	color: #fff;
}

#wrapper header nav{
	float: right;
	margin-top: 50px;
}

#wrapper header nav ul{
	padding: 0;
	margin: 0;
}

#wrapper header nav ul li{
	float: left;
	list-style: none;
}

#wrapper header nav ul li a{
	padding: 15px;
	color: #fff;
	text-decoration: none;
}

.clear{
	clear: both;
}

footer{
	background: #232323;
	padding: 20px;
	text-align:center;
}

footer a{
	color: #fff;
	text-decoration: none;
}

section{
	padding: 20px;
}
	</style>
	<div id="wrapper" >
		<header>
			<hgroup>
				<h1>RentalBuku.net</h1>
				<h3>Membuat Template Sederhana dengan CodeIgniter</h3>
			</hgroup>
			<nav>
				<ul>
					<li><a href="<?php echo base_url() . 'web' ?>">Home</a></li>
					<li><a href="<?php echo base_url() . 'web/about' ?>">About</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</header>
	</div>
</body>
</html>