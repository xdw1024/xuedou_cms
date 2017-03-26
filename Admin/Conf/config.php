<?php
if (!defined('THINK_PATH')) exit();

//载入网站配置
$web_config	=	require 'web_config.php';

//载入数据库配置
$db_config = require 'db_config.php';

//设定项目配置
$array	=	array(
/* SESSION 设定 */
'SESSION_TYPE'		=>	'File',
'SESSION_EXPIRE'	=>	'300000',
'SESSION_TABLE'		=>	'thinkcms_session',

/* 调试配置 */
'DB_FIELDS_CACHE'	=>	false,
'TMPL_CACHE_ON'		=>	false,
'WEB_LOG_RECORD'	=>	false,
'SQL_DEBUG_LOG'		=>	false,
'HTML_CACHE_ON'		=>	false,
'DEBUG_MODE'		=>	false,

/* 项目配置 */
'ROUTER_ON'			=>	true,
'DATA_RESULT_TYPE'	=>	1,
'DEFAULT_MODULE'	=>	'Index',
'USER_UPLOADS'		=>	'./UserUploads/',
'DISPATCH_ON'       =>  true,
'PATH_MODEL'        =>  2,
'URL_AUTO_REDIRECT ' => true,

/* 权限配置 */
'USER_AUTH_ON'=>true,
'USER_AUTH_TYPE'   => 1,
'USER_AUTH_KEY'   => 'uid',
'USER_AUTH_PROVIDER' => 'DaoAuthentictionProvider',
'USER_AUTH_GATEWAY' => '/Public/login',
'NOT_AUTH_MODULE'  => 'Public',


/*模糊查询*/
'LIKE_MATCH_FIELDS' => 'name',

'DEFAULT_TEMPLATE'=>'default',
);

//合并输出配置
return array_merge($db_config,$web_config,$array);
?>