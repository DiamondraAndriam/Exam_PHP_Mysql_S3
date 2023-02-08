<?php 
     if ( ! defined('BASEPATH')) exit('No direct script access allowed');
     if(!function_exists('formater')) {
          function formater($nombre, $unite) {
               echo number_format($nombre, 0, ' ', ' ').' '.$unite;
          }
     }
?>