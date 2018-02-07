<?php
declare(strict_types=1);
/**
 * Template part for the main Navigation
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _replace_this
 */

// Custom Logo get id.
// get site logo
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image          = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
<nav class="nav-main navbar bg-warning m-0 p-0 navbar-expand-md">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">
		<?php
		if ( $custom_logo_id == null ) :
			echo bloginfo( 'name' );
		else :
		?>
			<img
				src="<?php
					echo $image[0]; ?>"
				alt="Logo web <?php
								bloginfo('name'); ?>"
				title="<?php
						bloginfo('description'); ?>">
		<?php
		endif;?>
		</a>
		<div class="collapse navbar-collapse" id="mainNavbar">
			<ul class="navbar-nav ml-2 mr-auto">
				<li class="nav-item">
					<a href="/" class="nav-link active">Home</a>
				</li>
			</ul>
			<form class="form-inline form-control-sm ml-auto mr-0 p-0">
				<div class="input-group">
					<input class="form-control-sm  border-0 search-form" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-sm btn-primary search" type="submit">
							<i class="fas fa-search fa-flip-horizontal fa-lg"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</nav>
