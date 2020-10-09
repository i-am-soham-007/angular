<?php
	$records[] =array("name"=>"soham","email"=>"rsoham00@gmail.com");
	$records[] =array("name"=>"Jinkal","email"=>"Jinkal@gmail.com");
	$records[] =array("name"=>"palak","email"=>"palak@gmail.com");
	$records[] =array("name"=>"krupa","email"=>"krupa@gmail.com");
	$records[] =array("name"=>"pooja","email"=>"pooja@gmail.com");
	$records[] =array("name"=>"kohli","email"=>"kohli@gmail.com");

	$json['records'] = $records;
		echo json_encode($json);
?>