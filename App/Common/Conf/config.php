<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => '127.0.0.1', // 服务器地址
	'DB_NAME'   => 'test', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PARAMS' =>  array(), // 数据库连接参数
	'DB_PREFIX' => '', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集
	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
	'TMPL_PARSE_STRING'  =>array(
		'__PUBLIC__' => '/Public', // 更改默认的/Public 替换规则
		'__UPLOAD__' => '/Public/Uploads', // 增加新的上传路径替换规则
		'__IMG__' => '/Public/images',
        '__CSS__' => '/Public/css',
        '__JS__'  => '/Public/js',
	)
);