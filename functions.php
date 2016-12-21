<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

//page_navpi  
function wp_pagenavi($before = '', $after = '', $prelabel = '', $nxtlabel = '', $pages_to_show = 5, $always_show = false) {
  global $request, $posts_per_page, $wpdb, $paged;
  
  
  if(empty($prelabel)) {
    $prelabel  = '<strong>&laquo;</strong>';
  }
  if(empty($nxtlabel)) {
    $nxtlabel = '<strong>&raquo;</strong>';
  }
  $half_pages_to_show = round($pages_to_show/2);
  if (!is_single()) {
    
    if(!is_category()) {
      preg_match('#FROM\s(.*)\sORDER BY#siU', $request, $matches);    
    } else {
      preg_match('#FROM\s(.*)\sGROUP BY#siU', $request, $matches);    
    }
    
    if(is_tax()) preg_match('#FROM\s(.*)\sGROUP BY#siU', $request, $matches);
    
    $fromwhere = $matches[1];
    $numposts = $wpdb->get_var("SELECT COUNT(DISTINCT ID) FROM $fromwhere");
    $max_page = ceil($numposts /$posts_per_page);
    if(empty($paged)) {
      $paged = 1;
    }
    if($max_page > 1 || $always_show) {
      echo "$before <div class='Nav'><span>Pages: </span>";
      if ($paged >= ($pages_to_show-1)) {
        echo '<a href="'.get_pagenum_link().'">&laquo; First</a> ... ';
      }
      previous_posts_link($prelabel);
      for($i = $paged - $half_pages_to_show; $i  <= $paged + $half_pages_to_show; $i++) {
        if ($i >= 1 && $i <= $max_page) {
          if($i == $paged) {
            echo "<strong class='on'>$i</strong>";
          } else {
            echo ' <a href="'.get_pagenum_link($i).'">'.$i.'</a> ';
          }
        }
      }
      next_posts_link($nxtlabel, $max_page);
      if (($paged+$half_pages_to_show) < ($max_page)) {
        echo ' ... <a href="'.get_pagenum_link($max_page).'">Last &raquo;</a>';
      }
      echo "</div> $after";
    }
  }
}
