<?php

function divsection($atts, $content = null){
	extract(shortcode_atts(array(
			"style" => "",
			"id" =>  "",
			"classes" => ""

		), $atts));

	$output = "<div class='div_shortcode " . $classes."' style='".$style."'>";

	$output .= do_shortcode($content);

	$output .='</div>';

	return $output;

}
add_shortcode("div","divsection");


function div_cont($atts, $content = null){

	extract(shortcode_atts(array(
			"heading" => "",
			"url" =>  "#",
			"img" => ""
	), $atts));
	
	$output = "<h1>".$heading."</h1>";
	if($img != ""){
		$output .= "<div class='image-container'><img src='".$img."'></div>";
	}	
	$output .= "<p>".$content."</p>";
	$output .= "<a href='".$url."'><img src='".get_bloginfo('template_directory')."/assets/img/but_more.jpg'></a>";

	return $output;

}

add_shortcode("dc","div_cont");

function responsive_video($atts, $content = null){
		$a = shortcode_atts(array(
			"url" => ""
		), $atts);

		$output = '<div class="embed-responsive embed-responsive-16by9">
  					<iframe class="embed-responsive-item" src="'.$a["url"].'" frameborder="0" allowfullscree></iframe>
					</div>';

		return $output;
	}

add_shortcode("rv", "responsive_video");

?>