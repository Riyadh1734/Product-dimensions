<?php 
/**
 * Plugin Name: Dimension for Dokan, Woocommerce
 * Description: A plugin that show your products dimension
 * Plugin URI: http://sajuahmed.epizy.com/
 * Author: Riyadh Ahmed
 * Author URI: http://sajuahmed.epizy.com/
 * Version: 1.0
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html 
 * Domain Path: /languages
 */

//don't call the file directly
if (!defined('ABSPATH')) exit;

add_action( 'woocommerce_single_product_summary', 'display_product_formated_dimensions_table', 25 );
function display_product_formated_dimensions_table(){
    global $product;

    if ( $product->has_dimensions() ) {
        echo '<table class="shop_attributes"><tr>
            <th>' . __( 'Dimensions', 'woocommerce' ) . '</th>
            <td class="product_dimensions">' . esc_html( wc_format_dimensions( $product->get_dimensions( false ) ) ) . '</td>
        </tr></table>';
    }
}