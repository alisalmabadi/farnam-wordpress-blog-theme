<?php

/*-----------------------------------------------------------------------------------*/
/* تنظیمات پیش فرض بعد از فعالسازی */
/*-----------------------------------------------------------------------------------*/
function marketpanel_default_settings_install(){

if(is_admin()):
 
	global $pagenow;
	
	// check if we are on theme activation page and activated is true.
	if(@$pagenow == 'themes.php' && @$_GET['activated'] == true):

	//if we are on theme activation page, do the following..
	
		$template = get_option('of_template');

			foreach($template as $t):
				@$option_name = $t['id'];
				@$default_value = $t['std'];
				$value_check = get_option("$option_name");
				if($value_check == ''){
				  update_option("$option_name","$default_value");
				}	
		
			endforeach;
	endif; //end if $pagenow
  
endif; //end if is_admin check

}
add_action('init','marketpanel_default_settings_install',90);





/*-----------------------------------------------------------------------------------*/
/* مدیریت وردپرس */
/*-----------------------------------------------------------------------------------*/
function marketpanel_siteoptions_admin_head() { ?>

<<script type="text/javascript"> jQuery(function(){ var message = '<p><strong>پوسته با موفقیت فعال شد!</strong> برای شخصی سازی پوسته فرنام به <a href="<?php echo admin_url('admin.php?page=siteoptions'); ?>">نمایش » تنظیمات پوسته فرنام</a> بروید.</p>'; jQuery('.themes-php #message2').html(message); }); </script>
    
    
<?php }

add_action('admin_head', 'marketpanel_siteoptions_admin_head');
?>