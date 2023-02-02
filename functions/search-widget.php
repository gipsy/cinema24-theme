<?php
/*
 * Search form in widget
 */

if ( ! function_exists('cinema24_search_form') ) {

  function cinema24_search_form( $form ) {
    $form = '<form class="form-inline mb-3" role="search" method="get" id="searchform" action="' . home_url('/') . '" >
      <input class="form-control mr-sm-1" type="text" value="' . get_search_query() . '" placeholder="' . esc_attr_x('Search', 'cinema24') . '..." name="s" id="s" />
      <button type="submit" id="searchsubmit" value="'. esc_attr_x('Search', 'cinema24') .'" class="btn btn-primary"><i class="fas fa-search"></i></button>
    </form>';
    return $form;
  }
}
add_filter( 'get_search_form', 'cinema24_search_form' );
