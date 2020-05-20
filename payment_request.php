add_filter( 'wc_stripe_hide_payment_request_on_product_page', '__return_true' );

remove_action( 'woocommerce_proceed_to_checkout', array( WC_Stripe_Payment_Request::instance(), 'display_payment_request_button_html' ), 1 );
remove_action( 'woocommerce_proceed_to_checkout', array( WC_Stripe_Payment_Request::instance(), 'display_payment_request_button_separator_html' ), 2 );

add_filter( 'wc_stripe_show_payment_request_on_checkout', '__return_true' );

remove_action( 'woocommerce_checkout_before_customer_details', array( WC_Stripe_Payment_Request::instance(), 'display_payment_request_button_html' ), 1 );
remove_action( 'woocommerce_checkout_before_customer_details', array( WC_Stripe_Payment_Request::instance(), 'display_payment_request_button_separator_html' ), 2 );

add_action( 'woocommerce_credit_card_form_start', array( WC_Stripe_Payment_Request::instance(), 'display_payment_request_button_html' ), 1 );
add_action( 'woocommerce_credit_card_form_start', array( WC_Stripe_Payment_Request::instance(), 'display_payment_request_button_separator_html' ), 2 );
