<?php
function theme_setup_data()
  	{
	return $appointment_options=array(
	//Header Settings
	'upload_image_favicon' => 'http://120.77.50.198/wp-content/uploads/2016/11/cherry.png',
	'header_one_name' => '',
	'header_one_text' => '',
	'text_title' => 1 ,
	'height' => '50',
	'width' => '50',
	'enable_header_logo_text' => '',
	'upload_image_logo' => 'http://120.77.50.198/wp-content/uploads/2016/11/cherry.png',
	'social_media_facebook_link' => '#',
	'social_media_twitter_link' => '#',
	'social_media_linkedin_link' => '#',
	'header_social_media_enabled' => '1', //0
	'facebook_media_enabled' => 0,
	'twitter_media_enabled' => 0,
	'linkedin_media_enabled' => 0,
	'webrit_custom_css' => '',

	//Slider Default settings
	'home_banner_enabled' => '',
	'slider_radio' => 'demo',
	'slider_select_category' =>'Uncategorized',
	'slider_options' => 'slide',
	'slider_transition_delay' => 2000,
	'featured_slider_post' => '',

	//Service section settings
	'service_section_enabled' => '',
	'service_title' => __('樱桃红中麻将','appointment'),
	'service_description' => __('红中麻将是一种休闲娱乐的熟人麻将，节奏快速，极易胡牌。。。','appointment'),
	'service_one_icon' => 'fa-mobile',
	'service_one_title'=>__('拖至底部下载','appointment'),
	'service_one_description' => __('','appointment'),
	'service_two_icon' => 'fa-bell',
	'service_two_title'=>__('易上手','appointment'),
	'service_two_description' => __('','appointment'),
	'service_three_icon' => 'fa-laptop',
	'service_three_title'=>__('易胡牌','appointment'),
	'service_three_description' => __('','appointment'),
	'service_four_icon' => 'fa-support',
	'service_four_title'=>__('支持微信登录','appointment'),
	'service_four_description' => __('','appointment'),
	'service_five_icon' => 'fa-code',
	'service_five_title'=>__('无外挂','appointment'),
	'service_five_description' => __('','appointment'),
	'service_six_icon' => 'fa-cog',
	'service_six_title'=>__('严禁赌博','appointment'),
	'service_six_description' => __('','appointment'),

	//Home callout section
	'home_call_out_area_enabled' => '',
	'home_call_out_title' => __('游戏','appointment'),
	'home_call_out_description' =>  __('快来玩樱桃红中麻将，就等你下载','appointment'),
	'callout_background' => '',
	'home_call_out_btn1_text' =>__('安卓下载','appointment'),
	'home_call_out_btn1_link' => 'http://hzmj.applinzi.com/cjhzmj_peixian.apk',
	'home_call_out_btn1_link_target' => '',
	'home_call_out_btn2_text' => __('IOS下载','appointment'),
	'home_call_out_btn2_link' => 'http://fir.im/hzapplepx',
	'home_call_out_btn2_link_target' => '',

	//News Section
	'home_blog_enabled' => '',
	'home_meta_section_settings' => '',
	'blog_heading' => __('近期文章','appointment'),
	'blog_description' => __('更多资讯请在本站的归档中阅读。','appointment'),
	'blog_selected_category_id'=> 1,
	'post_display_count' => '4',

	//Footer Copyright & footer social links
	'footer_copyright_text' => __('Copyright © 樱桃互娱 2016','appointment'),
	'footer_menu_bar_enabled' => '',
	'footer_social_media_enabled' => '1',  //''
	'footer_social_media_facebook_link' => '', //'#'
	'footer_facebook_media_enabled' => 0,
	'footer_social_media_twitter_link' => '',
	'footer_twitter_media_enabled'=>0,
	'footer_social_media_linkedin_link' => '',
	'footer_linkedin_media_enabled'=>0,
	'footer_social_media_googleplus_link' => '',
	'footer_googleplus_media_enabled' => 0,
	'footer_social_media_skype_link' => '',
	'footer_skype_media_enabled' => 0,
	);
  	}
  ?>
