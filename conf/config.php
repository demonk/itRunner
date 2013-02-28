<?php

return array(
//'配置项'=>'配置值'

    'RESOURCE_COMMON_PATH' => array(
        '__CSS__' => '/itRunner/common/css',
        '__JS__' => '/itRunner/common/js'
    ),
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => 'itRunner', // 数据库名
    'DB_USER' => 'root', // 用户名
    'DB_PWD' => 'string', // 密码
    'DB_PORT' => 3306, // 端口
    'DB_PREFIX' => 'ir_', // 数据库表前缀 
    
    'APP_GROUP_LIST' => 'root,admin',
    'DEFAULT_GROUP' => 'root',
    'TMPL_FILE_DEPR' => '_', //修改默认模板位置分隔符,如/user/user.html即可表示为user_user.html
    
    'SHOW_PAGE_TRACE' =>true,
    
    'USER_AUTH_KEY'	=> 'authId',
);
?>