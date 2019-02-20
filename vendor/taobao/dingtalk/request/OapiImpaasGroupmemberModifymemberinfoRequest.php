<?php
/**
 * dingtalk API: dingtalk.oapi.impaas.groupmember.modifymemberinfo request
 * 
 * @author auto create
 * @since 1.0, 2018.08.27
 */
class OapiImpaasGroupmemberModifymemberinfoRequest
{
	/** 
	 * 请求
	 **/
	private $request;
	
	private $apiParas = array();
	
	public function setRequest($request)
	{
		$this->request = $request;
		$this->apiParas["request"] = $request;
	}

	public function getRequest()
	{
		return $this->request;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.impaas.groupmember.modifymemberinfo";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
