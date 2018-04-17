<?php
return array(
	
	'sms'=>array(
		'BASE_URL' => "https://api.miaodiyun.com/20150822/",

		/**
		 * url中的accountSid。如果接口验证级别是主账户则传网站“个人中心”页面的“账户ID”，
		 */
		'ACCOUNT_SID' => "120548e0fed3493f9529a68f473e8260", // 主账户
		'AUTH_TOKEN' => "491f5530a7e740be800c4cc992af106c",

		/**
		 * 请求的内容类型，application/x-www-form-urlencoded
		 */
		'CONTENT_TYPE' => "application/x-www-form-urlencoded",

		/**
		 * 期望服务器响应的内容类型，可以是application/json或application/xml
		 */
		'ACCEPT' => "application/json"
		)
);