<?php
/**
 *  extention.func.php 用户自定义函数库
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-10-27
 */
/**
 * 获取剩余时间
 *
 * @param int $begin_time
 * @param int $end_time
 * @return array
 */
function timediff($begin_time,$end_time){
    if($begin_time < $end_time){
        $starttime = $begin_time;
        $endtime = $end_time;
    }else{
        $starttime = $end_time;
        $endtime = $begin_time;
    }
    $timediff = $endtime-$starttime;
    $days = intval($timediff/86400);
    $remain = $timediff%86400;
    $hours = intval($remain/3600);
    $remain = $remain%3600;
    $mins = intval($remain/60);
    $secs = $remain%60;
    $res = array("day" => $days,"hour" => $hours,"min" => $mins,"sec" => $secs);
    return $res;
}
/**
* 获取catid所有父类以及当前catid
*
* @param int $catid
* @param int $CATEGORYS
* @return Array
*/
function catids($mycatid,$CATEGORYS){
	static $catids;
	//var_dump($CATEGORYS[$mycatid]['parentid']);
	if($CATEGORYS[$mycatid]['parentid']){
		$catids[] = $CATEGORYS[$mycatid]['parentid'];
		catids($CATEGORYS[$mycatid]['parentid'],$CATEGORYS);
	}
	$catids[] = $mycatid;
	return $catids;
}
/**
* 获取根据模型id和字段查字段配置
*
* @param char $field
* @param int $modelid
* @return Array
*/
function box($field,  $modelid='',  $value){
    $fields = getcache('model_field_'.$modelid,'model');
    extract(string2array($fields[$field]['setting']));
    $options = explode(PHP_EOL,$fields[$field]['options']);
    $data = array();
    foreach($options as $_k){
        $v = explode("|",$_k);
        $data[$v[0]] = $v[1];
    }
    return $data;
}
/**
 * 根据用户名查用户信息
 *
 * @param char $username
 * @return Array
 */
function get_memberinfo_by_username($username){
    $member_db = pc_base::load_model('member_model');
    $member_info = $member_db->get_one(array('username'=>$username));
    //获取用户模型信息
    $member_db->set_model($member_info['modelid']);
    $member_modelinfo = $member_db->get_one(array('userid'=>$member_info['userid']));
    $member_modelinfo = $member_modelinfo ? $member_modelinfo : array();
    if(is_array($member_info)) {
        $member_info = array_merge($member_info, $member_modelinfo);
    }
    unset($member_info['password']);
    unset($member_info['encrypt']);
    $member_db->set_model();
    return $member_info;
}
/**
 * 筛选
 * @param array $param
 * @param array $need_unset
 * @return string
 */
function list_filter($param = array(), $need_unset = array()){
    if(!is_numeric($param['catid'])){
        $need_unset = array_merge($need_unset, array('m','c','a','catid','page'));
    }
    foreach($param as $key=>$value){
        if(in_array($key,$need_unset)){
            unset($param[$key]);
        }
    }
    $url_var = $param ? http_build_query($param).'&filter=1&' : 'filter=1&';
    return $url_var;
}
function creat_filter($param = array(), $modelid, $catid){
    $param['catid'] = $catid;
    $fields = getcache('model_field_'.$modelid,'model');
    $check_fields = array();
    foreach($fields as $k=>$v){
        $check_fields[] = $k;
    }
    foreach($param as $k=>$v){
        if(!in_array($k,$check_fields) || !$v){
            unset($param[$k]);
        }
    }
    return $param;
}
?>