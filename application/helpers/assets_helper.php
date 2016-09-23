<?php
    if(!function_exists("dyn_script")){
        function dyn_script($src){
            return '<script type="text/javascript" src="'.$src.'"></script>';
        }
    }
    if(!function_exists("dyn_css")){
        function dyn_css($href){
            return '<link rel="stylesheet" type="text/css" href="'.$href.'">';
        }
    }
    if(!function_exists("dyn_img")){
        function dyn_img($src, $id, $class){
            return '<img src="'.$src.'" class="'.$class.'" id="'.$id.'">';
        }
    }