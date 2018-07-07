<?php get_header();?>

<div id="main"> 
<div id="ads2"> <div class="adss1"><a href="<?php $market_text_field = get_option('marketwp_gn_text_field10');echo $market_text_field;?>"><img src="<?php $market_text_field = get_option('marketwp_gn_text_field9');echo $market_text_field;?>" /> </a></div><div class="adss2"><a href="<?php $market_text_field = get_option('marketwp_gn_text_field12');echo $market_text_field;?>"><img src="<?php $market_text_field = get_option('marketwp_gn_text_field11');echo $market_text_field;?>" /> </a></div></div>


<div id="uclearn"> 
<?php if(have_posts()) :?>
<?php while(have_posts())  : the_post();?>
<div id="scontent">
<h3 class="scont-title"><?php the_title(); ?></h3>
<div class="scont-img"><a href="<?php the_permalink()?>"><?php the_post_thumbnail();?></a></div>
<div class="scont-entry"><?php the_content(); ?></div>

</div>

<?php endwhile; ?>
<?php endif;?>
<div class="single-tags"><i class="fa fa-tags fa-lg"></i>
<?php _e('برچسب ها :' , 'framework'); ?>
<?php the_tags('',',',''); ?>

</div>
<div class="related-posts">
<div class="related-title">
					<h4>مطالب مرتبط </h4>
                    </div>
<?php

$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>
	<ul>
        <li>
        <div class="s2cont-img"><a href="<?php the_permalink()?>"><?php the_post_thumbnail();?></a></div>
       <div class="related-posts-link"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
       </div>
        </li>
	</ul>
<?php }
wp_reset_postdata(); ?>
				</div>
                 <div id="war">
    	<li>
    		<i class="fa fa-exclamation-triangle"></i><a href="#">استفاده از مطالب سایت فقط با ذکر منبع مجاز است</a><p>
    		<i class="fa fa-exclamation-triangle"></i><a href="#"> پسوورد تمامی فایل ها    میباشد  </a><p>
    		<i class="fa fa-exclamation-triangle"></i><a href="#">در صورت خرابی لینک ها از بخش نظرات اعلام کنید</a><p>
    	</li>
    </div>
<div class="author-box">
    		<div class="r-author">
    		<div class="author-pic"><?php echo get_avatar( get_the_author_email () , '80');?></div></div>
    		<div class="l-author">
    		<div class="author-bio"><?php the_author_meta("user_description");?></div>
                <div class="author-name">درباره نویسنده:<?php the_author_meta("display_name");?></div>
    		<div class="author-link"><a href="<?php echo get_author_posts_url( get_the_author_meta('ID') );?>"><?php _e('دیدن همه مطالب نویسنده ' , '');?>&rarr;</a></div>
        
    				</div>
                    
                    </div> 
      <?php comments_template();?>  
</div>

<?php get_sidebar(); ?>



</div>
<?php get_footer();?>