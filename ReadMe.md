This is a Sass and Compass ready theme.


For Gravity forms: 
If there's an update to the plugin, remember to go into form_display.php and on line 770 replace

 $button_input = "<input type='{$input_type}' id='{$button_input_id}' class='{$class}' value='" . esc_attr($button_text) . "' {$tabindex} {$onclick}/>";
			
with

$button_input= '<button type="submit" class="arrowbut '.$class.'"  id="'.$button_input_id.'">

    <div class="astart arrow triangle-right white"></div>
    <div class="acontent arrow">' . esc_attr($button_text) . '</div>
    <div class="aend arrow triangle-right orange"></div>

</button>' ;
        }