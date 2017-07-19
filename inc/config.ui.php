<?php

//CONFIGURATION for SmartAdmin UI

//ribbon breadcrumbs config
//array("Display Name" => "URL");
$breadcrumbs = array(
	"Home" => APP_URL
);

/*navigation array config

ex:
"dashboard" => array(
	"title" => "Display Title",
	"url" => "http://yoururl.com",
	"url_target" => "_blank",
	"icon" => "fa-home",
	"label_htm" => "<span>Add your custom label/badge html here</span>",
	"sub" => array() //contains array of sub items with the same format as the parent
)

*/
$page_nav = array(
	"dashboard" => array(
		"title" => "Dashboard",
		"icon" => "fa-home",
		"url" => "main/dashboard"	
	),
	
	"setting" => array(
		"title" => "Smart Settings",
		"icon" => "fa-gear",
		"sub" => array(
			"users" => array(
				"title" => "Smart Users",
				"icon" => "fa-users",
				"url" => "main/users"
			),
		    "holidays" => array(
		        "title" => "Holidays",
		        "icon" => "fa-users",
		        "url" => "main/holidays"
		    ),
		    
		)
	),

	"attendance" => array(
		"title" => "Smart Attendance",
		"icon" => "fa-clock-o",
		"url" => "main/attendance"
	),

	"reports" => array(
		"title" => "Smart Reports",
		"icon" => "fa-calendar",
		"sub" => array(
			"students" => array(
				"title" => "Students",
				"icon" => "fa-calendar",
				"url" => "main/students"
			),
		    "teachers" => array(
		        "title" => "Teachers",
		        "icon" => "fa-calendar",
		        "url" => "main/teachers"
		    ),
		    "staff" => array(
		        "title" => "Staff",
		        "icon" => "fa-calendar",
		        "url" => "main/staff"
		    )
		)
	)	
);

//configuration variables
$page_title = "";
$page_css = array();
$no_main_header = false; //set true for lock and login
$page_body_prop = array(); //optional properties for <body>
$page_html_prop = array(); //optional properties for <html>
?>