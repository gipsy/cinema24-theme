<?php
/**
 * Widgets
 */

function cinema24_widgets_init() {

  /**
   * Versatile widget areas using Bootstrap grid columns
   * ===================================================
   *
   * Flexbox `col-sm` gives the correct the column width:
   *
   * — If only 1 widget, then this will have full width ...
   * — If 2 widgets, then these will each have half width ...
   * — If 3 widgets, then these will each have third width ...
   * — If 4 widgets, then these will each have quarter width ...
   *
   * ... above the Bootstrap `sm` breakpoint.
   */

  /**
   * Main
   */

//   register_sidebar( array(
//    'name'            => __( 'Main', 'cinema24' ),
//    'id'              => 'main-widget-area',
//    'description'     => __( 'Use 1, 2, 3 or 4 widgets.', 'cinema24' ),
//    'before_widget'   => '<div class="%1$s %2$s col-sm">',
//    'after_widget'    => '</div>',
//    'before_title'    => '<h2 class="h4">',
//    'after_title'     => '</h2>',
//  ) );

  /**
   * Footer
   */

//  register_sidebar( array(
//    'name'            => __( 'Footer', 'cinema24' ),
//    'id'              => 'footer-widget-area',
//    'description'     => __( 'Use 1, 2, 3 or 4 widgets.', 'cinema24' ),
//    'before_widget'   => '<div class="%1$s %2$s col-sm">',
//    'after_widget'    => '</div>',
//    'before_title'    => '<h2 class="h4">',
//    'after_title'     => '</h2>',
//  ) );

}
add_action( 'widgets_init', 'cinema24_widgets_init' );
