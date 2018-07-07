<div id="comments">
<div class="title-comments">
<h3><i class="fa fa-comments" data-unicode="f086"></i><?php comments_number('دیدگاهی برای این مطلب داده نشده...' , 'یک دیدگاه' , '%دیدگاه'); ?> </h3>
</div>

<?php if ( have_comments)  :?>
<ol class="commentslist">
<?php wp_list_comments('avatar_size=40،type=comment');?>
</ol>
<p>
<div id="respond">
<form action="<?php echo get_option('siteurl');?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID) :?>
<?php print 'وارد شده با نام : ' ;?>
<a href="<?php echo get_option('siteurl');?>/wp-admin/profile.php">
<?php echo $user_identity ;?>
</a> /
<a href="<?php echo wp_logout_url(get_permalink());?>"><?php print 'بیرون رفتن' ;?>&nbsp;&raquo;</a>
<textarea name="comment" id="comment" cols="50" rows="10" tabindex="4"
placeholder="نظر شما..." onclick="this.placeholder='';"></textarea>

<input type="submit" name="submit" id="submit" value="ارسال نظر" tabindex="5">
<?php else :?>
<input type="text" name="author" id="author" value="<?php $comment_author ;?>"
placeholder="نام..." onclick="this.placeholder='';" size="22" tabindex="1">
<input type="text" name="email" id="email" value="<?php $comment_author_email ;?>"
placeholder="ایمیل..." onclick="this.placeholder='';" size="22" tabindex="2">
<input type="text" name="url" id="url" value="<?php $comment_author_url ;?>"
placeholder="وبسایت/وبلاگ..." onclick="this.placeholder='';" size="22" tabindex="3">
<p>
<textarea name="comment" id="commentss" cols="50" rows="10" tabindex="4"
placeholder="نظر شما..." onclick="this.placeholder='';"></textarea>
<p>
<input type="submit" name="submit" id="submit" value="ارسال دیدگاه" tabindex="5">
<?php comment_id_fields();?>
<?php do_action('comment_for' , $post>ID );?>
</form>
<?php endif ;?>
</div>
<?php endif ;?>
</div>