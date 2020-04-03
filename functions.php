<?php


//$black_list = [1,2,3];
//
//function nk_add_user_to_black_list($users){
//	$users[] = 23;
//
//	return $users;
//}
//
//add_filter('add_user_to_black_list','nk_add_user_to_black_list');
//
//$black_list = apply_filters('add_user_to_black_list', $black_list);
//
//var_dump($black_list);

$content = 'وردپرس یک سیستم مدیریت محتوای رایگان میباشد. وردپرس خیلییی خوبه.';

function nk_filter_wordpress_word($content){
	$content = preg_replace('/وردپرس/', '<a href="/category/wordpress">وردپرس</a>', $content);
	return $content;
}

add_filter('custom_content', 'nk_filter_wordpress_word');
$content = apply_filters('custom_content',$content);

echo '<p>'.$content.'</p>';