<?php

/**
 * @file
 * template.php
 */


/**
 *  Queremos poner como clase en body el título de la página padre
 */

function ausias_drupal_preprocess_html(&$vars) {
  $menuParent = menu_get_active_trail();
  //get rid of the last item in the array as it is the current page
  $menuParentPop = array_pop($menuParent);
  //Just grab the last item in the array now
  $menuParent = end($menuParent);
  //if it is not the home page and it is not an empty array
  if(!empty($menuParent) && $menuParent['link_path'] != ''){
     $vars['classes_array'][] = $menuParent['title'];
  } else {
      $vars['classes_array'][] = menu_get_active_title();
  }  
    
}