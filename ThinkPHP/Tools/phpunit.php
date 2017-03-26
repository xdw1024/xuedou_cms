#! php -d safe_mode=Off
<?php
// +----------------------------------------------------------------------
// | ThinkPHP
// +----------------------------------------------------------------------
// | Copyright (c) 2008 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id: phpunit.php 943 2009-01-13 06:21:12Z nonultimate $

$vendor_path = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'Vendor';
set_include_path($vendor_path . PATH_SEPARATOR . get_include_path());

require_once 'PHPUnit/Util/Filter.php';

PHPUnit_Util_Filter::addFileToFilter(__FILE__, 'PHPUNIT');

require_once 'PHPUnit/TextUI/Command.php';
?>