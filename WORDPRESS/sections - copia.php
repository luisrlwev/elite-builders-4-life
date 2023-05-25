<style>
	#features {
		font-size: 0;
		letter-spacing: 0;
	}

	#features .features-list {
		display: inline-block;
		vertical-align: top;
		margin: 0 57px 0 0;
		padding: 0;
		list-style: none;
	}

	#features li {
		font-weight: 300;
		font-size: 13px;
		line-height: 15px;
		color: #212121;
		margin: 6px 0;
	}

	#features li:before {
		display: inline-block;
		width: 5px;
		height: 5px;
		background: #ffcf01 !important;
		content: '';
		border-radius: 2px;
		margin-right: 7px;
	}

	.section {
		margin: 20px;
		width: 555px;
	}

	.section h2 {
		font-weight: bold;
		font-size: 15px;
		text-transform: uppercase;
		color: #424242;
	}

	.fields-table {
		width: 80%;
	}

	.fields-table td {
		padding: 4px 0;
	}

	.fields-table td b {
		font-weight: bold;
	}

	.fields-table td, .fields-table td a {
		width: 50%;
		font-weight: 300;
		font-size: 12px;
		line-height: 15px;
		color: #212121;
		text-decoration: none;
	}

	.listed-fields {
		margin: 0;
		padding: 0;
		list-style: none;
	}

	.listed-fields li, .listed-fields li a {
		font-weight: 300;
		font-size: 13px;
		line-height: 15px;
		color: #212121;
		text-decoration: none;
		padding: 4px 0;
	}

	.listed-fields li strong {
		font-weight: bold;
	}

    .sections-container {
        page-break-before: always;
    }

    .es-file__wrap {
        list-style: none;
        margin: 0;
        padding: 0;
        display: block;
        width: 100%;
    }

    .es-file__wrap img {
        height: auto;
        display: block;
        width: 550px;
        border: 1px solid #333;
    }

    .es-file__wrap .es-file__content a {
        width: 100%;
        display: block;
    }
</style>

<?php if ( $sections = $es_settings->pdf_sections ) : $sections_info = Es_Property_Pdf::get_sections(); ?>
    <div class="sections-container">
        <?php foreach ( $sections as $id ) : ?>
            <?php if ( empty( $sections_info[ $id ] ) ) continue; ?>

            <?php if ( ! empty( $sections_info[ $id ]['render_action'] ) ) : ?>
                <?php do_action( $sections_info[ $id ]['render_action'] . '_pdf', $id, $sections_info[ $id ] ); ?>
            <?php else: ?>
                <?php do_action( 'es_single_render_tab_pdf', $id, $sections_info[ $id ] ); ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
<?php endif;
