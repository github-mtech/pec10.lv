<?php defined('SYSPATH') OR die('No direct access allowed.');

 
return array(
    'plugins'   => array(         
        'jquery'    => array(
            'js'    => array(
                '/ui-plugins/jquery/jquery-1.11.1.min.js'
            )
        
        ),
        'bootstrap' => array(
            'js'    => array(
                '/ui-plugins/bootstrap-3.2.0/js/bootstrap.min.js',
            ),
            'css'   => array(
                '/ui-plugins/bootstrap-3.2.0/css/bootstrap.min.css'
            ),
           
            
            
        ),
        'gmap'      => array(
            'js'    => array(
                'https://maps.googleapis.com/maps/api/js?key=AIzaSyAwRfYNlNeHOMoZIpDqfo0oTYm2KGBO-zI&language='.Request::current()->param('lang'),
            )             
                         
        ),
        'font-awesome' => array(
            'css'      => array(
                '/ui-plugins/font-awesome/css/font-awesome.min.css' ,
            )
        )

    )
);
