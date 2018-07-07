<?php get_header();?>

<div id="main"> 

<div id="ads2"> <div class="adss1"><img src="<?php bloginfo('template_url');?>/pics/beruztarin.gif" /> </div><div class="adss2"><img src="<?php bloginfo('template_url');?>/pics/beruztarin.gif" /></div></div>

<div id="uclearn"> 
<?php if(have_posts()) :?>
<?php while(have_posts())  : the_post();?>
<div id="content">
<h3 class="cont-title"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
<div class="cont-img"><a href="<?php the_permalink()?>"><?php the_post_thumbnail();?></a></div>
<div class="cont-entry"><?php the_excerpt(); ?></div>
<div class="read-more"><a href="<?php the_permalink();?>">ادامه مطلب</a></div>
<div class="post-info">
<ul>

<li class="post-author">نویسنده :<?php the_author(); ?></li>
     <li class="post-cat">دسته بندی : <?php the_category(', '); ?></li>
<li class="post-date">تاریخ :<?php the_time('Y/m/d'); ?> </li>

<li class="post-comment"> دیدگاه: <?php comments_popup_link('بدون دیدگاه', '۱ دیدگاه', '% دیدگاه'); ?> </li>
</ul>
</div>
</div>
<?php endwhile; ?>
<?php endif;?>
</div>

<?php get_sidebar(); ?>



</div>
<?php get_footer();?>