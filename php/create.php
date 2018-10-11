<?php
	$con = mysql_connect("localhost","root","");
	if (!$con)
	   {
	  		die('Could not connect: ' . mysql_error());
	   }

	// Create database
	if (mysql_query("CREATE DATABASE img1",$con))
		{
		  	echo "Database created";
		}
	else
		{
		  	// echo "Error creating database: " . mysql_error();
		  	mysql_query("drop database img1;");
		  	mysql_query("CREATE DATABASE img1",$con);
		  	echo "Database created <br>";
		}


	mysql_select_db("img1", $con);
	$sql = "CREATE TABLE images1
	(
		id int(11) NOT NULL AUTO_INCREMENT,
	 	path varchar(20) DEFAULT NULL,
	  	title varchar(20) DEFAULT NULL,
	  	type varchar(20) DEFAULT NULL,
	  	PRIMARY KEY (`id`)
	)";
	mysql_query($sql,$con);
	if($sql){
		echo "Table created <br>";
	}

	// Create table in my_db database
	// 	插入数据
	mysql_select_db("img1", $con);
	$title =array('途家盛捷服务公寓','MODELAB/爱慕内衣','觉','CNZCO兴宇中科','同仁堂保健酒','伊利乳品','雀巢咖啡','雀巢礼盒','雀巢广告','沃尔沃','黑猫神蚊香','上京东抢零食','安师傅','M&M豆','大众点评玩转迪拜');
	$type1 = array('品牌（LOGO/VI)','品牌（LOGO/VI)','品牌（LOGO/VI)','品牌（LOGO/VI)','包装','包装','包装','包装','广告','广告','广告','广告','广告','广告','网站');
		// 循环添加图片
	for($i=1;$i<16;$i++){
		// 执行sql语句
		mysql_query("insert into images1 values(null,'".$i.".jpg','".$title[$i-1]."','".$type1[$i-1]."');");		
		echo "data:\n$i\nInsert success<br>";
	}
	mysql_close($con);
?>