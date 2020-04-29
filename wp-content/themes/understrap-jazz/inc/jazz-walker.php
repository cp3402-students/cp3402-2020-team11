<?php
class Jazz_Walker extends Walker_Nav_Menu{


    function start_el(&$html, $item, $depth = 0, $args = array(), $id = 0)
    {
        $object = $item->object;
        $title = $item->title;
        $anchor = $item->url;

        $html .= "<li class='" . implode(" ", $item->classes) . "'>";

        if( $anchor) {
            $html .= '<a href="' . $anchor . '">';
        }
        $html .= $title;

        if( $anchor) {
            $html .= '</a>';
        }
    }
}