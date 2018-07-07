<?php

add_action('init','marketpanel_of_options');

if (!function_exists('marketpanel_of_options')) {
function marketpanel_of_options(){

//نام کوتاه پوسته
$shortname = "marketwp";


//آرایه پنل تنظیمات
global $mw_options;
$mw_options = get_option('of_options');


//دسترسی به برگه های وردپرس با یک آرایه
$mw_pages = array();
$mw_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($mw_pages_obj as $mw_page) {
$mw_pages[$mw_page->ID] = $mw_page->post_name; }
$mw_pages_tmp = array_unshift($mw_pages, "یک برگه را انتخاب کنید:"); 


//دسترسی به دسته های وردپرس با یک آرایه
$mw_categories = array();  
$mw_categories_obj = get_categories('hide_empty=0');
foreach ($mw_categories_obj as $mw_cat) {
$mw_categories[$mw_cat->cat_ID] = $mw_cat->cat_name;}
$categories_tmp = array_unshift($mw_categories, "یک دسته را انتخاب کنید:");


//نمونه آرایه برای منوی کشویی
$market_array = array("1","2","3","4","5");


//نمونه آرایه پیشرفته
$market_advanced_array = array("image" => "The Image","post" => "The Post"); 


//مسیر پوشه برای "type" => "images"
$marketurl =  get_template_directory_uri() . '/admin/images/sample-layouts/';


/*-----------------------------------------------------------------------------------*/
/* پنل تنظیمات اهل بیت
/*-----------------------------------------------------------------------------------*/
$options = array(); //این خط را پاک نکنید

/* تب اول - تنظیمات عمومی */	
$options[] = array( "name" => __('General Options - تنظیمات عمومی','marketwplang'),
			"type" => "heading");
			
			
$options[] = array( "name" => __('توجه','marketwplang'),
			"desc" => "",
			"id" => $shortname."_mwp_callout",
			"std" => "اگر تنظیمات را کامل انجام ندهید پوسته ناقص به نظر خواهد رسید.",
			"type" => "info");
			
$options[] = array( "name" => __('توجه','marketwplang'),
			"desc" => "",
			"id" => $shortname."_mwp_callout",
			"std" => " برای نمایش بنر های تبلیغاتی لینک بنر را در قسمت تبلیغات وارد نمایید.",
			"type" => "info");			
$options[] = array( "name" => __('توجه','marketwplang'),
			"desc" => "",
			"id" => $shortname."_mwp_callout",
			"std" => "تمامی لینک ها را همراه با http یا https وارید نمایید.",
			"type" => "info");
			
			$options[] = array( "name" => __('توجه','marketwplang'),
			"desc" => "",
			"id" => $shortname."_mwp_callout",
			"std" => "در صورت هر گونه مشکل به هنگام نصب با بنده تماس حاصل فرمایید.",
			"type" => "info");
			
			$options[] = array( "name" => __('لوگو سایت','marketwplangg'),
			"desc" => ".آدرس لوگو سایت خود را در این قسمت قرار دهید",
			"id" => $shortname."_gn_text_field0",
			"std" => "",
			"type" => "text");				
				
			
$options[] = array( "name" => __('نام سایت','marketwplangg'),
			"desc" => "نام سایت خود را در اینجا قرار دهید تا در هدر نمایش داده شود.",
			"id" => $shortname."_gn_text_field1",
			"std" => "",
			"type" => "text");				
				



$options[] = array( "name" => __('توضیحات سایت','marketwplangg'),
			"desc" => "توضیحات سایت خود را در اینجا قرار دهید تا زیر عنوان سایت قرار گیرد ",
			"id" => $shortname."_gn_text_field2",
			"std" => "",
			"type" => "text");				
				
				
$options[] = array( "name" => __('لینک فاوآیکون','marketwplangg'),
			"desc" => "در اینجا لینک مورد نظر را قرار دهید.",
			"id" => $shortname."_gn_text_field3",
			"std" => "",
			"type" => "text");	


			

			

			
/* تب اول - تنظیمات عمومی */	

/* تب اول - تنظیمات شبکه های اجتماعی */

$options[] = array( "name" => __('Social Options - تنظیمات شبکه های اجتماعی','marketwplang'),
			"type" => "heading");
			
$options[] = array( "name" => __('لینک کانال تلگرام','marketwplangg'),
			"desc" => "در اینجا لینک مورد نظر را قرار دهید.",
			"id" => $shortname."_gn_text_field4",
			"std" => "",
			"type" => "text");
			
$options[] = array( "name" => __('لینک صفحه اینستاگرام','marketwplangg'),
			"desc" => "در اینجا لینک مورد نظر را قرار دهید.",
			"id" => $shortname."_gn_text_field5",
			"std" => "",
			"type" => "text");
			
$options[] = array( "name" => __('لینک صفحه فیسبوک','marketwplangg'),
			"desc" => "در اینجا لینک مورد نظر را قرار دهید.",
			"id" => $shortname."_gn_text_field6",
			"std" => "",
			"type" => "text");

/* تب اول - تنظیمات شبکه های اجتماعی */		
/*تبلیغات- تب سوم*/

$options[] = array( "name" => __('ads Options - تبلیغات','marketwplang'),
			"type" => "heading");
			
$options[] = array( "name" => __('بنر داخل هدر سایت','marketwplangg'),
		"desc" => "در اینجا لینک عکس مورد نظر را قرار دهید.",
			"id" => $shortname."_gn_text_field7",
			"std" => "",
			"type" => "text");
			$options[] = array( "name" => __('','marketwplangg'),
			"desc" => "در اینجا لینک مورد نظر را قرار دهید.",
			"id" => $shortname."_gn_text_field8",
			"std" => "",
			"type" => "text");
			
			
			
		
		
$options[] = array( "name" => __('بنر پایین هدر، سمت راست','marketwplangg'),
			"desc" => "در اینجا لینک عکس مورد نظر را قرار دهید.",
			"id" => $shortname."_gn_text_field9",
			"std" => "",
			"type" => "text");
			
			
	$options[] = array( "name" => __('','marketwplangg'),
			"desc" => "در اینجا لینک مورد نظر را قرار دهید.",
			"id" => $shortname."_gn_text_field10",
			"std" => "",
			"type" => "text");
						
						
			
$options[] = array( "name" => __('بنر پایین هدر، سمت چپ','marketwplangg'),
			"desc" => "در اینجا لینک عکس مورد نظر را قرار دهید.",
			"id" => $shortname."_gn_text_field11",
			"std" => "",
			"type" => "text");	
			
				$options[] = array( "name" => __('','marketwplangg'),
			"desc" => "در اینجا لینک مورد نظر را قرار دهید.",
			"id" => $shortname."_gn_text_field12",
			"std" => "",
			"type" => "text");
						
						
/*تبلیغات- تب سوم*/

update_option('of_template',$options); 					  
update_option('of_shortname',$shortname);

}
}
?>