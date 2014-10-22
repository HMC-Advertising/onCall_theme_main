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
	$output ="";
	if($heading == "ems"){
		$output .="<div class='row heading_h1'>";
		$output .= "<div class='col-lg-3 col-md-3 col-sm-3 col-xs-4'>";
		$output .= "<img src='".get_template_directory_uri()."/assets/img/ems_logo.png'>";
		$output .= "</div>";
		$output .= "<div class='col-lg-9  col-md-9 col-sm-9 col-xs-8'>";
		$output .= "<h1>Emergency Medical Service</h1>";
		$output .= "</div>";
		$output .= "</div>";
	}
	elseif($heading =="mrc"){
		$output .="<div class='row heading_h1'>";
		$output .= "<div class='col-lg-3 col-md-3 col-sm-3 col-xs-4'>";
		$output .= "<img src='".get_template_directory_uri()."/assets/img/mrs_logo.png'>";
		$output .= "</div>";
		$output .= "<div class='col-lg-9  col-md-9 col-sm-9 col-xs-8'>";
		$output .= "<h1>Medical Reserved Corps</h1>";
		$output .= "</div>";
		$output .= "</div>";

	}
	else{
		$output .="<div class='row heading_h1'>";
		$output .= "<h1>".$heading."</h1>";
		$output .= "</div>";
	
	}
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