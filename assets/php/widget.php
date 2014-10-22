<?php

add_filter( 'widget_text', 'do_shortcode', 11);
// Register widgetized locations
	if(function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Footer Widget 1',
		'id' => 'w1',
		'before_widget' => '<div id="%1$s" class="footer-widget-col %2$s">',
		'after_widget' => '<div style="clear:both;"></div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'Large Photo Footer Widget 1',
		'id' => 'lpw1',
		'before_widget' => '<div id="%1$s" class="footer-widget-col %2$s">',
		'after_widget' => '<div style="clear:both;"></div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'Large Photo Footer Widget 2',
		'id' => 'lpw2',
		'before_widget' => '<div id="%1$s" class="footer-widget-col %2$s">',
		'after_widget' => '<div style="clear:both;"></div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'Large Photo Footer Widget 3',
		'id' => 'lpw3',
		'before_widget' => '<div id="%1$s" class="footer-widget-col %2$s">',
		'after_widget' => '<div style="clear:both;"></div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'main sidebar',
		'id' => 'msb',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget' => '<div style="clear:both;"></div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'Map Locator Footer Widget 1',
		'id' => 'mlw1',
		'before_widget' => '<div id="%1$s" class="footer-widget-col %2$s">',
		'after_widget' => '<div style="clear:both;"></div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'Map Locator Footer Widget 2',
		'id' => 'mlw2',
		'before_widget' => '<div id="%1$s" class="footer-widget-col %2$s">',
		'after_widget' => '<div style="clear:both;"></div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => 'Featured Events',
		'id' => 'fe',
		'before_widget' => '<div id="%1$s" class="footer-widget-col %2$s">',
		'after_widget' => '<div style="clear:both;"></div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	register_sidebar(array(
		'name' => 'Front Page EMS Div',
		'id' => 'fpemc',
		'before_widget' => '<div id="%1$s" class="emc %2$s">',
		'after_widget' => '<div style="clear:both;"></div></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	register_sidebar(array(
		'name' => 'Front Page MRC Div',
		'id' => 'fpmrc',
		'before_widget' => '<div id="%1$s" class="mrc %2$s">',
		'after_widget' => '<div style="clear:both;"></div></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
}


?>