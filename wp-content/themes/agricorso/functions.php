<?php
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_styles()
{
	$parenthandle = 'astra-style';

	$theme        = wp_get_theme();
	wp_enqueue_style(
		$parenthandle,
		get_template_directory_uri() . '/style.css',
		array(),  // If the parent theme code has a dependency, copy it to here.
		$theme->parent()->get('Version')
	);
	wp_enqueue_style(
		'astra-child',
		get_stylesheet_uri(),
		array($parenthandle),
		$theme->get('Version') // This only works if you have Version defined in the style header.
	);
}



function IlmioJavascript(){
?>
	<script>
		


	


	</script>
<?php
}

add_action('wp_footer', 'IlmioJavascript');



function pageLoad_scripts()
{
	
	wp_register_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js', array(), '3.9.1', true);
	wp_register_script('gsapScrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js', array(), '3.9.1', true);
	wp_register_script('barba', 'https://unpkg.com/@barba/core', array(), '1.0', true);
	
	wp_register_script('animation', get_stylesheet_directory_uri() . '/js/animation.js', array('gsap'), '1.0', true);

	wp_enqueue_script('gsap');
	wp_enqueue_script('gsapScrollTrigger');
	wp_enqueue_script('barba');
	wp_enqueue_script('animation');
}
add_action('wp_enqueue_scripts', 'pageLoad_scripts');



function icons() {
	?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<?php
}
add_action( 'wp_head', 'icons' );

function bootstrap()
{
	echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">';
}
add_action("wp_head", "bootstrap");

//importo jquery nell'head
function jqueryImp()
{
	echo '<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>';
}
add_action("wp_head", "jqueryImp");

function bstrScript()
{
?>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<?php
}
add_action("wp_footer", "bstrScript");


/* cambia la scritta next/previous post dalla pagina del singolo articolo/ricetta */
function personalizza_testo_next_previous_post($format) {
    $format = str_replace('Next Post', 'Next Recipe', $format);
    $format = str_replace('Previous Post', 'Previous Recipe', $format);
    return $format;
}

add_filter('next_post_link', 'personalizza_testo_next_previous_post');
add_filter('previous_post_link', 'personalizza_testo_next_previous_post');






// Questo crea una variabile JS globale chiamata wpData con dentro il percorso dinamico della cartella upload di wordpress.
function my_theme_enqueue_scripts() {
    wp_enqueue_script('uploadFolder', get_stylesheet_directory_uri() . '/js/animations.js', array(), false, true);

    wp_localize_script('uploadFolder', 'wpData', array(
        'uploadsUrl' => wp_get_upload_dir()['baseurl'],
    ));

	/*
	Da usare nel file come es. 
	const mobileImage = `${wpData.uploadsUrl}/2025/10/HERO_MOBILE-min.png`;
	*/
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
