<?php 

/**
*  Class Gravatar
*  Easy way to get a gravatar image 
*  this class was built from the official documentation of gravatar 
* Usage:
* <code>
*        $email = "youremail@yourhost.com";
*        $default = "http://www.yourhost.com/default_image.jpg";    // Optional
*        gravatar::size = 80;
*        $gravatar::rating = "G";
*        echo Gravatar::getGravatar();
* </code>
*
*   Class Page: https://github.com/aminelch/gravatarApi/tree/master/php/src
*
* @author Amine L'ch <aminelch.github.io>
* @version 1.0
* @package Gravatar
*/

class Gravatar {

public static function getGravatar( $email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
    $url = 'https://www.gravatar.com/avatar/';
    $url .= md5( strtolower( trim( $email ) ) );
    $url .= "?s=$s&d=$d&r=$r";
    if ( $img ) {
        $url = '<img src="' . $url . '"';
        foreach ( $atts as $key => $val )
            $url .= ' ' . $key . '="' . $val . '"';
        $url .= ' />';
    }
    return $url;
}




}