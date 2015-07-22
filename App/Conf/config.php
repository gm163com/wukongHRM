<?php
return array(
	'URL_MODEL'=>0,
	'URL_CASE_INSENSITIVE' =>true,
	'TMPL_ACTION_ERROR' => 'Public:message', 
	'TMPL_ACTION_SUCCESS' => 'Public:message',
	'TMPL_EXCEPTION_FILE'=>'./App/Tpl/Core/Public/exception.html',
	'DEFAULT_TIMEZONE' => 'PRC',
    'LOG_LEVEL'  =>'EMERG',
    'APP_GROUP_LIST' => 'Hrm,Core,Crm',
    'APP_GROUP_NAME' => array('hrm'=>'人力资源管理','core'=>'系统','crm'=>'客户管理'),
    'DEFAULT_GROUP'  => 'Core',
	'LOAD_EXT_CONFIG' => 'db,version'
);
?>