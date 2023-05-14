<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

	<?php while( have_posts() ) : ?>

		<?php the_post(); ?>

		<div class="product-single">
			<main class="product-main">
				<div class="product-card">
					<div class="product-primary">
						<header class="product-header">
							<h2 class="product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="product-meta">
								<a class="meta-shockcode" href="#">Code: 650204111</a>
								<span class="meta-price">$ 179.99</span>
							</div>		
							<div class="product-details product-details-table">
								<span>Type</span><span>Washing machine</span>	
								<span>Brand</span><span>HAIER</span>
								<span>Model</span><span>HW80-B14939-S</span>
							</div>

							<div class="product-details product-details-tags">
								<div class="product-details-label">Tags</div>
								<span>Laundry</span>
								<span>Washing</span>
							</div>
						</header>

						<div class="product-body">
                        <?php the_content(); ?>
						</div>
					</div>
				</div>
			</main>
			<aside class="product-secondary">
				<div class="product-logo">
					<div class="product-logo-box">
                    <?php if ( has_post_thumbnail() ) :  ?>
                        <?php the_post_thumbnail( 'job-thumbnail' ); ?>
                        <?php else : ?>
                        <img src="wp-content\themes\shop\images\washing-machine.jpg" alt="default image">
                    <?php endif; ?>
					</div>
				</div>
				<a href="#" class="button button-wide">Buy now</a>
			</aside>
		</div>

		<h2 class="section-heading">Other related products:</h2>
		<ul class="products-listing">
			<li class="product-card">
				<div class="product-primary">
					<h2 class="product-title"><a href="#">HAIER HW80-B14939-S2 8.0 kg, 1400 rot/min</a></h2>
					<div class="product-meta">
						<a class="meta-shockcode" href="#">Code: 650204112</a>
						<span class="meta-price">$ 179.99</span>
					</div>
					<div class="product-details product-details-table">
						<span>Type</span><span>Washing machine</span>	
						<span>Brand</span><span>HAIER</span>
						<span>Model</span><span>HW80-B14939-S2</span>
					</div>
				</div>
				<div class="product-logo">
					<div class="product-logo-box">
						<img src="images/washing-machine.jpg" alt="">
					</div>
				</div>
			</li>

			<li class="product-card">
				<div class="product-primary">
					<h2 class="product-title"><a href="#">HAIER HW80-B14939-S3 8.0 kg, 1400 rot/min</a></h2>
					<div class="product-meta">
						<a class="meta-shockcode" href="#">Code: 650204113</a>
						<span class="meta-price">$ 179.99</span>
					</div>
					<div class="product-details product-details-table">
						<span>Type</span><span>Washing machine</span>	
						<span>Brand</span><span>HAIER</span>
						<span>Model</span><span>HW80-B14939-S3</span>
					</div>
				</div>
				<div class="product-logo">
					<div class="product-logo-box">
						<img src="images/washing-machine.jpg" alt="">
					</div>
				</div>
			</li>
		</ul>
        
    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>