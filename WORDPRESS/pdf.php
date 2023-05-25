<?php

/**
 * @var $this Es_Property_Pdf
 */

global $es_settings;
$es_property = es_get_property( get_the_ID() );
$layout = $es_settings->pdf_flyer_layout ;
$agent = $es_property->get_agent(); ?><!DOCTYPE html>
<html>
    <head>
        <title><?php es_the_title(); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"/>
        <style type="text/css">

            #footer {
                width: 595px;
                height: 105px;
                background: #C4C4C4;
                position: fixed;
                bottom: -65px;
            }

            @page {
                margin: 0px 0px 2cm 0px!important;
                padding: 0px 0px 0px 0px;
            }

            /*@page :first {*/
                /*margin: 0px 0px 0px 0px !important;*/
                /*padding: 0px 0px 0px 0px !important;*/
            /*}*/

            @page :first footer {
                bottom: 0;
             }

            * {
                box-sizing: border-box;
            }

            html, body {
                margin: 0;
                padding: 0;
                /*font-family: 'Lato', sans-serif;*/
                font-family: DejaVu Sans;
            }

            /*body {*/
                /*margin-bottom: 2cm;*/
            /*}*/

            @font-face {
                font-family: 'fontawesome3';
                src: url('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/fonts/fontawesome-webfont.ttf?v=4.6.1') format('truetype');
                font-weight: normal;
                font-style: normal;
            }
            .fa, .fa3 {
                display: inline-block;
                font: normal normal normal 14px/1 fontawesome3;
                text-rendering: auto;

                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }

            /*@page {*/
                /*margin-bottom: 135px;*/
            /*}*/

            table {
                border: 0;
            }

            .es-price .fa {
                white-space: nowrap;
            }

            .es-price {
                background-color: #ffcf01 !important;
                font-size: 22px;
                letter-spacing: 0.05em;
                display: inline-block;
                padding: 10px 25px;
                color: #121C24;
                white-space: nowrap;
                text-align: left;
            }

            .themed-background {
                background-color: #ffcf01 !important;
            }

            .sup-line {
                display: inline-block;
                width: 25px;
                height: 2px;
                background: #ffcf01 !important;
            }

            .themed-sup-line:before {
                display: block;
                width: 25px;
                height: 2px;
                background: #ffcf01 !important;
                position: relative;
                top: -6px;
                margin-top: 18px;
            }

            .site-url {
                font-weight: 300;
                font-size: 10px;
                line-height: 13px;

                color: #121C24;
            }

            .entry-title {
                font-weight: bold;
                font-size: 19px;
                line-height: 1.1;
                color: #121C24;
                text-transform: uppercase;
                margin: 0;
            }

            .address {
                font-size: 11px;
            }

            #basic-fields {
                background: #121C24;
                vertical-align: top;
            }

            #basic-fields ul {
                padding: 10px 20px;
                margin: 0;
            }

            #basic-fields li a {
                color: #FFFFFF;
                text-decoration: none;
            }

            #property-map {
                margin-top: 5px;
            }

            #basic-fields li {
                font-size: 12px;
                line-height: 14px;
                color: #FFFFFF;
                margin-left: 7px;
                padding: 5px 0;
            }

            .property-excerpt {
                font-weight: 300;
                font-size: 12px;
                line-height: 16px;
                color: #212121;
            }

            #property-map {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <?php if ( in_array( $es_settings->pdf_flyer_layout, array( 'single_photo', 'photo_gallery' ) ) ) : ?>
	        <?php include es_locate_template( 'property/pdf/footer.php' ); ?>
            <div class="<?php echo $es_settings->pdf_flyer_layout; ?>">
                <?php include es_locate_template( 'property/pdf/' . $es_settings->pdf_flyer_layout . '.php' ); ?>
                <?php include es_locate_template( 'property/pdf/sections.php' ); ?>
            </div>
        <?php endif; ?>
    </body>
</html>
