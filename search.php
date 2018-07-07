<?php get_header();?>

<div id="main"> 
<div id="ads2"> <div class="adss1"><img src="<?php bloginfo('template_url');?>/pics/beruztarin.gif" /> </div><div class="adss2"><img src="<?php bloginfo('template_url');?>/pics/beruztarin.gif" /></div></div>

<div id="uclearn"> 
<h2 class="search-title"><i class="fa fa-search"></i>نتیجه جستجو</h2>
<?php if(have_posts()) :?>
<?php while(have_posts())  : the_post();?>
<div id="scontent">
<h3 class="scont-title"><?php the_title(); ?></h3>
<div class="scont-img"><a href="<?php the_permalink()?>"><?php the_post_thumbnail();?></a></div>
<div class="scont-entry"><?php the_content(); ?></div>

</div>

<?php endwhile; ?>
<?php else :?>
<h3 class="error-title"><i class="fa fa-thumbs-down"></i>
مطلب مورد نظر یافت نشد.
</h3>

<?php endif;?>

                

    
</div>

<?php get_sidebar(); ?>



</div>
<?php get_footer();?>