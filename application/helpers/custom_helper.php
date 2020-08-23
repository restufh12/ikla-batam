<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('show_hide_memberverifikasi'))
{
    function show_hide_memberverifikasi($var = '')
    {
        return ($var=="1"?"display-none":"");
    }   
}