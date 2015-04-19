<ol class="commentlist">
	<?php wp_list_comments(); ?>
</ol>
            
<?php
		  
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
  
	$fields =  array(
	'author' => '<p class="comment-form-author">' .
				'<input id="author" name="author" class="form-control" type="text" placeholder="Name" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
	'email'  => '<p class="comment-form-email">'.
				'<input id="email" name="email" class="form-control" type="email" placeholder="E-mail" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',        
    
	'url'    => '',
); ?>
   
   
   
<?php comment_form(
	array(
	'fields' => apply_filters( 'comment_form_default_fields', $fields ),
	'title_reply' => 'Leave a Reply, And Voice Yourself',
    'comment_field' => '<p class="comment-form-comment">'.'<textarea id="comment" name="comment" cols="45" rows="8" class="form-control" aria-describedby="form-allowed-tags" placeholder="Comment"  aria-required="true"></textarea>'.'</p>',
	'comment_notes_after' => ''
	)
); ?>
           
           