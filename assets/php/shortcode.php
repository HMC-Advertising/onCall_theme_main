<?php



function ah($atts){
	extract(shortcode_atts(array(
			"content" => ""
	), $atts));
	$output = "";
	$output .= "<div class='arrowheader'>";
	$output .= "<div class='astart arrow triangle-right white'></div>";
	$output .= "<div class='acontent arrow'>".$content."</div>";
	$output .= "<div class='aend arrow triangle-right orange'></div>";
	$output .= "</div>";

	return $output;
}

add_shortcode("arrowheader", "ah");

function abutton($atts){
	extract(shortcode_atts(array(
			"url" => "",
			"text" => ""
	), $atts));
	$output = "<div style='clear:both; padding-bottom:40px'>";
	$output .=  "<a class='arrowbut' href=".$url.">";
	$output .= "<div class='astart arrow triangle-right white'></div>";
	$output .= "<div class='acontent arrow'>".$text."</div>";
	$output .= "<div class='aend arrow triangle-right orange'></div>";
	$output .= "</a>";
	$output .= "</div>";

	return $output;
}
add_shortcode("arrowbutton", "abutton");

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
		$output .= "<div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>";
		$output .= "<img src='".get_template_directory_uri()."/assets/img/ems_logo.png'>";
		$output .= "</div>";
		$output .= "<div class='col-lg-9  col-md-9 col-sm-9 col-xs-12'>";
		$output .= "<h1>Emergency Medical Service</h1>";
		$output .= "</div>";
		$output .= "</div>";
	}
	elseif($heading =="mrc"){
		$output .="<div class='row heading_h1'>";
		$output .= "<div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>";
		$output .= "<img src='".get_template_directory_uri()."/assets/img/mrs_logo.png'>";
		$output .= "</div>";
		$output .= "<div class='col-lg-9  col-md-9 col-sm-9 col-xs-12'>";
		$output .= "<h1>Medical Reserved Corps</h1>";
		$output .= "</div>";
		$output .= "</div>";

	}
	else{
		$output .="<div class='heading_h1'>";
		$output .= "<h1>".$heading."</h1>";
		$output .= "</div>";
	
	}
	if($img != ""){
		$output .= "<div class='image-container'><img src='".$img."'></div>";
	}	
	$output .= "<article>".$content."</article>";
	$output .= "<footer>";
	$output .=  "<a class='arrowbut' href=".$url.">";
	$output .= "<div class='astart arrow triangle-right white'></div>";
	$output .= "<div class='acontent arrow'>MORE</div>";
	$output .= "<div class='aend arrow triangle-right orange'></div>";
	$output .= "</a>";
	$output .= "</footer>";

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