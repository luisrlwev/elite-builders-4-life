<style>
	#gallery {
		width: 100%;
        max-height: 330px;
        overflow: hidden;
	}

	#gallery img {
		width: 100%;
		height: auto;
        /*max-height: 330px;*/
		max-width: none;
	}

	#gallery table {
		width: 100%;
		height: 334px;
		position: absolute;
		z-index:50;
        top: 0;
        left: 0;
	}

	#gallery .es-price {
		width: 100%;
	}

    #content, #sidebar {
        display: inline-block;
        vertical-align: top;
    }

    #content {
        width: 360px;
    }

    #sidebar {
        width: 235px;
    }

    .address-container {
        padding: 30px 15px 5px;
    }

    #agent {
        margin-top: 20px;
    }

    .content-header {
        padding: 15px 20px;
    }

    .property-excerpt {
        padding: 0 20px;
    }

    .price-wrapper {
        width: 235px !important;
        display: block;
        margin-left: 360px;
        margin-top: -49px;
        height: 49px;
    }

    .price-wrapper .es-price {
        width: 235px !important;
    }

    #property-map {
        width: 235px;
    }

    #property-map img {
        width: 235px;
        height: auto;
    }
</style>

<?php if ( has_post_thumbnail() || ! empty( $es_property->gallery[0] ) ) : ?>
	<div id="gallery">
		<?php es_the_post_thumbnail( 'es-image-size-archive' ); ?>
		<table cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td style="width: auto;"> </td>
				<td valign="bottom" style="width: 235px;" class="es-table-price" align="right">

				</td>
			</tr>
		</table>
	</div>
    <div class="price-wrapper">
		<?php es_the_formatted_price(); ?>
        <span style="font-weight: bold;"><?php es_the_property_field( 'price_note', '<span class="es-price-note">', '</span>' ); ?></span>
    </div>
<?php endif; ?>

<div id="content">
    <div class="content-header">
	    <?php es_the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <span class="site-url"><?php echo home_url(); ?></span>
    </div>
	<?php do_action( 'es_single_description_tab_pdf' ); ?>
	<?php do_action( 'es_single_agent_tab_pdf', $agent ); ?>
</div><!--
--><div id="sidebar">
    <?php if ( $es_settings->show_address && $es_property->address ) : ?>
        <div class="address-container address">
            <?php echo $es_property->address; ?>
        </div>
    <?php endif; ?>
	<?php do_action( 'es_single_basic_fields_pdf', 5 ); ?>
	<?php do_action( 'es_single_map_pdf', '300x184' ); ?>
</div>
