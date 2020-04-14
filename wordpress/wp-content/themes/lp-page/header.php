<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ress.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/style.js"></script>

<title>LPページをwordpressにしてみる</title>

<!-- Favicon -->
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">

<?php get_header(); ?>
</head>

<body>

	<header>
		<div class="container">
			<div class="row">
				<div class="col span-12">
					<div class="head">
						<h1><a href="index.html">SimpleCorp</a></h1>
						<div class="telbox">TEL：00-0000-0000</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col span-12">
					<nav>
						<div id="open"><img src="<?php echo get_template_directory_uri(); ?>/img/button.png"></div>
						<div id="close"><img src="<?php echo get_template_directory_uri(); ?>/img/button2.png"></div>
						<div id="navi">
							<ul>
								<li><a href="index.html">ホーム</a></li>
								<li><a href="subpage.html">店舗について</a></li>
								<li><a href="subpage.html">サブページ</a></li>
								<li><a href="subpage.html">サブページ</a></li>
								<li><a href="subpage.html">サブページ</a></li>
								<li><a href="subpage.html">お問い合わせ</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
