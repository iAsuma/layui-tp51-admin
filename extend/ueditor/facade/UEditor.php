<?php
// +----------------------------------------------------------------------
// | QingCMS [ MAKE THINGS BETTER ]
// +----------------------------------------------------------------------
// | Author: asuma(lishuaiqiu) <weibo.com/770878450>
// +----------------------------------------------------------------------
namespace ueditor\facade;
use think\Facade;

/**
 * 权限类门面
 * @method action() static ueditor入口方法
 */
class UEditor extends Facade
{
	
	protected static function getFacadeClass()
    {
    	return 'ueditor\UEditor';
    }
}
