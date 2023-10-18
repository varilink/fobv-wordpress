<?php
/*
 * Plugin Name: FoBV Site Plugin
 * Description: Site plugin for the FoBV website.
 */

// Require functionality divided into other files for manageability

foreach ( scandir( dirname( __FILE__ ) . '/includes' ) as $filename ) {
    $path = dirname( __FILE__ ) . '/includes/' . $filename;
    if ( is_file( $path ) && $filename != 'index.php' ) {
        require $path;
    }
}

// Block explorer category for any site specific blocks that we might define.

add_filter(
    'block_categories_all',
    function ( $categories ) {
        array_unshift(
            $categories,
            array(
                'slug' => 'fobv',
                'title' => 'FoBV'
            )
        );
        return $categories;
    }
);

function fobv_process_page () {

    // This function returns a 404 (not found) response for "process pages" if
    // there is an attempt to access them outside of their process flow. A
    // process page is a page that is shown in the dialog flow that occurs to
    // complete an end-to-end transaction after the form that initiates the
    // transaction has been submitted.

    global $post;

    $process_pages = [

        // These are the process pages identified by their slug; for each, one
        // or both of two attributes are set:
        //
        // parameters = An array of query parameters that the page will receive
        //              if called within its process flow.
        // referrers  = The path of the URLs, one of which will be the HTTP
        //              referrer if the page is called within its process flow.

        'donation-cancelled' => [
            'parameters' => [ 'token' ]
        ],
        'donation-received' => [
            'parameters' => [ 'token', 'PayerID' ],
        ],
        'gift-aid' => [
            'parameters' => [ 'transaction' ],
            // Note that the gift-aid page only refers to itself in the rare
            // circumstance that Javascript is disable and so the back-end
            // duplication of the validation of the gift-aid form redirects back
            // to the form to correct an error.
            'referrers' => [ '/gift-aid/', '/support-our-charity/' ]
        ],
        'membership-confirmed' => [
            'referrers' => [ '/gift-aid/' ]
        ],
        'membership-confirmed-and-payment-cancelled' => [
            'parameters' => [ 'token' ]
        ],
        'membership-confirmed-and-payment-received' => [
            'parameters' => [ 'token', 'PayerID' ],
        ],
        'subscription-confirmed' => [
            'referrers' => [ '/latest-news/' ]
        ]

    ];

    if (
        ! is_user_logged_in() && ! is_null( $post ) &&
        array_key_exists( $post->post_name, $process_pages )
    ) {

        $valid_call = TRUE;
        $page = $post->post_name;

        if ( array_key_exists( 'referrers', $process_pages[ $page ] ) ) {

            // Validate that have a referrer URL whose path is what we expected
            // it to be. If that's not the case then this is an invalid call.

            if (
                ! ( $rp = parse_url( wp_get_raw_referer(), PHP_URL_PATH ) )
                ||
                ! in_array( $rp, $process_pages[ $page ][ 'referrers' ] )
            ) {
                $valid_call = FALSE;
            }

        }

        if (
            $valid_call &&
            array_key_exists( 'parameters', $process_pages[ $page ] )
        ) {

            // So far we think that the call is valid but it must include the
            // expected query parameters to confirm that's the case, so check
            // them too now.

            $expected_parms = $process_pages[ $page ][ 'parameters' ];
            sort( $expected_parms );
            $actual_parms = array_keys( $_GET );
            sort( $actual_parms );

            if ( $actual_parms != $expected_parms ) {
                $valid_call = FALSE;
            }

        }

        if ( ! $valid_call ) {
            global $wp_query;
            $wp_query->set_404();
            status_header( 404 );
        }

    }

};

add_action( 'wp', 'fobv_process_page' );

function fobv_start_session() {
    if ( ! session_id() ) {
        session_start();
    };
}

add_action( 'init', 'fobv_start_session' );

function fobv_payment_reference ( $atts ) {

    $atts = shortcode_atts( [
        'name' => NULL,
        'clear' => 'no'
    ], $atts );

    if ( ! array_key_exists( 'payment_reference', $_SESSION ) ) {
        $_SESSION[ 'payment_reference' ] = wp_rand( 10000000, 99999999 );
    }

    if ( isset( $atts['name'] ) ) {
        $return  = '<input type="hidden" name="';
        $return .= $atts['name'];
        $return .= '" value="';
        $return .= $_SESSION[ 'payment_reference' ];
        $return .= '">';
    } else {
        $return = $_SESSION[ 'payment_reference' ];
    }

    if ( $atts[ 'clear' ] === 'yes' ) {
        unset( $_SESSION[ 'payment_reference' ] );
    }

    return $return;

}

add_shortcode( 'fobv-payment-reference', 'fobv_payment_reference' );

function fobv_write_log( $message ) {

    if ( function_exists( 'varilink_write_log' ) ) {
        varilink_write_log( $message, 'FOBV' );
    }

};