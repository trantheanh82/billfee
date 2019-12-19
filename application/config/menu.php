<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['admin']['main_menu'] = array(
	'Products'=> array(
		'Product'=>array('link'=>'admin/products'),
		'Category'=>array('link'=>'admin/categories')
		
	),
	'Capabilities'=>array(
		'Deparments'=>array('link'=>'admin/capabilities/departments'),
		'Machines'=>array('link'=>'admin/capabilities/machines'),
	),
	'Services'=>array(
		'link'=>'admin/services',
	),
	'Recruitments'=>array('link'=>'admin/recruitments'),
	
	'News'=>array(
		'Category'=>array('link'=>'admin/news/category'),
		'News'=> array('link'=>'admin/news/'),
	),
	'Pages'=>array(
		'Products'=>array('link'=>'admin/pages/products/'),
		'Product Machines'=>array('link'=>'admin/pages/productmachines/'),
		'About us'=>array('link'=>'admin/pages/about'),
		'Contact us'=>array('link'=>'admin/pages/contact/'),
		'Capability'=>array('link'=>'admin/pages/capability/'),
		'Services'=>array('link'=>'admin/pages/services/'),
		'News'=>array('link'=>'admin/pages/news/'),
		'Recruitments'=>array('link'=>'admin/pages/recruitments/'),
		'Videos'=>array('link'=>'/admin/pages/videos')
	),

	'Modules' =>
		array(
			'Banners'=>array('link'=>'admin/modules/banners'),
			'Brochuce' => array('link'=>'admin/modules/brochuce'),
			'Testimonials'=>array('link'=>'admin/modules/testimonials'),
			'Video'=>array('link'=>'admin/modules/videos'),
			'Links'=>array('link'=>'admin/modules/links')
		)
);

$config['public']['main_menu'] = array(
	'About Us' => array(
		'link'=>'pages/about',
		'slug'=>'about-us'),
		
	'Real Estate'=> array(
		'link'=>'realestate/index',
		'slug'=>'real-estate',
	),
	'Services'=> array(
		'link'=>'services',
	),
	'News'=>array(
		'link'=>'news',
	)
	
)

?>