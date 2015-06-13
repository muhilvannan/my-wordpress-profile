<?php get_header(); ?>
 
 <div id="postContainer">
     <section id="main" class="blog">
      	
        
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
        <article>
        
 			<header>
       			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
           		<div class="post-date">
                    <div class="day"><?php the_time('d') ?> <?php the_time('M') ?></div>
                </div>
            </header>
           
            <?php the_content(); ?>
           
            <div class="postmetadata">
            	 Category: <?php the_category(',') ?> &bull; <?php the_tags(); ?>
            </div>
            
           
           
           <?php comments_template(); ?> 
           
            <div style="float:left">
                <?php previous_post_link('<< %link'); ?>   

            </div> 

             <div style="float:right">
                <?php next_post_link('%link >>'); ?>
             </div>
        </article>
		<?php endwhile; ?>       
		
		<?php endif; ?>
    </section>
    
        <?php get_sidebar(); ?>
        
</div>
<?php get_footer(); ?>
 
 