<?php

$settings = array(

  'available_scripts'      => array(
    'jquery-g'             => array('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js','1.11.1'),
    'plugins'              => array('/assets/js/vendor.min.js'),
    'scripts'              => array('/assets/js/app.min.js'),
  ),

  'default_scripts'        => array(
    'jquery-g',
    'plugins',
    'scripts',
  ),

  'available_stylesheets'  => array(
    'theme'                => array('/assets/css/site.theme.css'),
    'vendor'               => array('/assets/css/site.plugins.css'),
  ),

  'default_stylesheets'    => array(
    'vendor',
    'theme',
  ),

);

Themewrangler::set_defaults( $settings );