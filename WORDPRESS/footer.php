<?php $contact_fields = apply_filters( 'es_pdf_contact_fields', array(
    __( 'Phone', 'es-plugin' ) => $es_settings->pdf_phone,
    __( 'Email', 'es-plugin' ) => $es_settings->pdf_email,
    __( 'Address', 'es-plugin' ) => $es_settings->pdf_address,
) );

$contact_fields = array_filter( $contact_fields ); ?>
<style>

    #footer .contact-label {
        font-size: 10px;
        color: #121C24;
    }

    #footer .contact-value {
        font-weight: 300;
        font-size: 10px;
        color: #121C24;
    }

    #footer h3 {
        font-weight: bold;
        font-size: 13px;
        line-height: normal;
        color: #121C24;
        text-transform: uppercase;
        margin: 0 0 10px;
    }

    #footer .pdf-logo {
        width: 180px;
    }

    #footer .pdf-logo__inner {
        width: 160px;
        background: transparent;
        text-align: center;
        height: 105px;
    }

    #footer .pdf-logo img {
        max-width: 160px;
        max-height: 70px;
        height: auto;
        width: auto;
    }

    #footer .qr-code {
        width: 130px;
    }

    #footer .qr-code img {
        margin-left: 20px;
    }
</style>
<table id="footer" cellspacing="0" cellpadding="0">
	<tr>
        <?php if ( $es_settings->pdf_qr ) : ?>
            <td class="qr-code">
                <img src="<?php echo add_query_arg( array(
                    'es_qr' => get_permalink( get_the_ID() ),
                    'es_pdf_nonce' => wp_create_nonce( 'es_qr_action' )
                ), get_permalink( get_the_ID() ) ); ?>"/>
            </td>
        <?php endif; ?>
		<td style="padding-left: 20px;">
			<?php if ( ! empty( $contact_fields ) ) : ?><!--
                --><h3><?php _e( 'Call us now', 'es-plugin' ); ?></h3><!--
                --><table>
                    <?php foreach ( $contact_fields as $label => $value ) : ?>
                        <?php if ( ! empty( $value ) ) : ?>
                            <tr>
                                <td class="contact-label"><?php echo $label; ?>: </td>
                                <td class="contact-value"><?php echo $value; ?></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </td>
        <?php if ( ! empty( $es_settings->logo_attachment_id ) ) : ?>
		<td class="pdf-logo">
            <table class="pdf-logo__inner">
                <tr>
                    <td>
                        <?php echo wp_get_attachment_image( $es_settings->logo_attachment_id, 'full' ); ?>
                    </td>
                </tr>
            </table>
        </td>
        <?php endif; ?>
	</tr>
</table>
