<?php
if ( $posts->have_posts() ):  
$atts = $posts->info;
extract($atts['info']);

?>
<div class="teams-carousel">
    <div class="center slider" data-autoplay="1">
        <?php 
        // Posts are found
        $count = 300;
        while ( $posts->have_posts() ) :
            $posts->the_post();
            global $post;        
            ?>
            <?php $subtitle = get_post_meta( get_the_ID(), 'subtitle', true ); ?>        
                            
                <div class="team-3 <?php echo !has_post_thumbnail($post->ID)? ' no-post-thumbnail' : '' ?>">                                                         

                    <!-- Link -->                               
                    <a href="<?php the_permalink() ?>">                                         
                        
                        <!-- Speaker Photo -->
                        <?php if( has_post_thumbnail() ): ?>
                            <div class="hover-overlay"> 
                                <?php $image_url = get_the_post_thumbnail_url( $post->ID, $image_size ); ?> 
                                <img class="img-fluid" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr( get_the_title($post->ID) ) ?>">
                            </div>                              
                        <?php endif; ?>
                        <!-- Speaker Meta -->       
                        <div class="team-meta">                                                  
                            <h5 class="h5-xl primary-color"><?php the_title(); ?></h5>
                            <p class="grey-color"><?php echo esc_attr($subtitle);?></p>
                        </div>  

                    </a>
                                                                            
                </div> 
            <?php  
            $count = $count + 100;
        endwhile; 
       ?>   
    </div>
</div>
<?php 
// Posts not found
else :
    echo '<h4>' . __( 'Posts not found', 'landpick' ) . '</h4>';
endif;