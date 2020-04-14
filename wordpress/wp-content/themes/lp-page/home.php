<?php get_header(); ?>

	<div class="mainimg">
		<img src="<?php echo get_template_directory_uri(); ?>/img/mainimg.jpg" alt="メイン画像">
	</div>

	<main>
		<div class="container">
			<div class="row">
				<div class="col span-8">
					<div class="news">
						<h2>新着情報</h2>
						<ul>
							<li>20XX.1.1　ここに新着情報のテキストが入ります</li>
								<li>20XX.1.1　ここに新着情報のテキストが入ります</li>
								<li>20XX.1.1　ここに新着情報のテキストが入ります</li>
								<li>20XX.1.1　ここに新着情報のテキストが入ります</li>
						</ul>
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</main>

<?php get_footer(); ?>
