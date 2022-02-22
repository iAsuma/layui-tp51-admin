<?php
namespace app\facade;
use think\Facade;
/**
 * 注册/登录门面
 * @method isLogined() 判断是否登录
 * @method check(array $post, bool $boolval = false, &$loginUser = []) 验证登录用户信息
 * @method login(array $user, $remembered=false) 用户登录
 * @method logout() 退出登录
 */
class Register extends Facade
{
	
	protected static function getFacadeClass()
    {
    	return 'register';
    }
}