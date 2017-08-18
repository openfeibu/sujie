<?php
/**
 *  index.php PHPCMS 入口
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-6-1
 */
 //PHPCMS根目录

define('PHPCMS_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
$dirname = array_reverse(explode(DIRECTORY_SEPARATOR,PHPCMS_PATH));
define('DIRNAME', $dirname[1]);
define('ROOT_PATH', str_replace(DIRNAME.DIRECTORY_SEPARATOR, '', dirname(__FILE__).DIRECTORY_SEPARATOR));
include PHPCMS_PATH.'/phpcms/base.php';

pc_base::creat_app();

?>