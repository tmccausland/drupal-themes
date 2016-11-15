<?php

  // Breadcrumbs
  function VC3_breadcrumb($variables) {
    $breadcrumb = $variables['breadcrumb'];

    if (!empty($breadcrumb)) {
      // Provide a navigational heading to give context for breadcrumb links to
      // screen-reader users. Make the heading invisible with .element-invisible.
      $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

      $output .= '<div class="breadcrumb">' . implode('', $breadcrumb) . '</div>';
      return $output;
    }
  }

  /** 
 * Override theme_node_add_list()
 * This theme function is called to generate the contents of node/add page
 *
 * Add node type's class to each list item
 */
function VC3_node_add_list($variables) {
  $content = $variables['content'];
  $output = '';
  if ($content) {
    $output = '<dl class="node-type-list">';
    
    foreach ($content as $item) {
      $output .= '<a href=/' . $item['href'] . ' class="button"><h2>' . $item['title'] . '</h2><p>' . filter_xss_admin($item['description']) . '</p></a>';
    }
    $output .= '</dl>';
   
  }
  return $output;
}