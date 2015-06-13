<?php /*dynamic_sidebar( 'sidebar2' );*/ ?>

<aside>
    <h3>Blog Archive</h3>
<ul>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
 
    
   
      <?php 
    
            wp_get_archives( array( 'type' => 'monthly', 'limit' => 12, 'show_post_count' => 1 ) );
        ?>
    
    
    
    
<?php endif; ?>
</ul>

</aside>