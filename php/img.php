<?php
		try{
		// 连接数据库  mysql:host=域名;dbname=数据库名；
		$dsn = "mysql:host=localhost;dbname=img1";

		// PDO($dsn,用户名,密码)
		$res = new PDO($dsn,'root','');
		// var_dump($res);

		// 设置字符集
		$res->exec('set names utf8');

		// 编写sql语句，插入数据
		$res = $res->prepare("SELECT path,title,type FROM images1");

		// 执行sql语句
		$res->execute();

		// 解析结果集
		$result = $res->fetchAll();
		// var_dump($result);
		// 转换为json  返回到客户端
		echo json_encode($result);

	}catch(EXCEPtion $e){
		echo $e->getMessage();
	}
?>