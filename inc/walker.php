<?php

/* Collection of Walker Classes */
class Walker_Nav_Primary extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? 'sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
    }

    /*
    function end_el(&$output, $item, $depth = 0, $args = null)
    {
    }

    function end_lvl(&$output, $depth = 0, $args = null)
    {
    } 
    */
}
