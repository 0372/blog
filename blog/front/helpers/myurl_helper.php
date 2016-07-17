<?php
$GLOBALS['CI'] = & get_instance();

function echo_url($c = "FrontIndex",$m = "home",$opts = ''){
    $url = $GLOBALS['CI']->config->item('base_url') . "?" . "c=" . $c ."&m=" . $m;
    if(!empty($opts)){
        foreach($opts as $k => $v){
            $url .= "&$k=$v";
        }
    }
    return $url;
}