<?php
namespace Roiwk\UmengOpenAPI\com\umeng\apptrack\param;

use Roiwk\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Roiwk\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengApptrackGetActiveDetailDataParam
{

        
        /**
    * @return 应用appkey
    */
    public function getAppKey()
    {
        $tempResult = $this->sdkStdResult["appKey"];
        return $tempResult;
    }
    
    /**
     * 设置应用appkey
     * @param String $appKey
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setAppKey($appKey)
    {
        $this->sdkStdResult["appKey"] = $appKey;
    }
    
        
    /**
    * @return 计划id
    */
    public function getPlanId()
    {
        $tempResult = $this->sdkStdResult["planId"];
        return $tempResult;
    }
    
    /**
     * 设置计划id
     * @param Long $planId
     * 参数示例：<pre>从用户计划列表接口获取</pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
    public function setPlanId($planId)
    {
        $this->sdkStdResult["planId"] = $planId;
    }
    
        
    /**
    * @return 查询日期
    */
    public function getQueryDate()
    {
        $tempResult = $this->sdkStdResult["queryDate"];
        return $tempResult;
    }
    
    /**
     * 设置查询日期
     * @param String $queryDate
     * 参数示例：<pre>2018-12-19</pre>
     * 此参数必填     */
    public function setQueryDate($queryDate)
    {
        $this->sdkStdResult["queryDate"] = $queryDate;
    }
    
        
    /**
    * @return 当前页数
    */
    public function getPageNum()
    {
        $tempResult = $this->sdkStdResult["pageNum"];
        return $tempResult;
    }
    
    /**
     * 设置当前页数
     * @param Integer $pageNum
     * 参数示例：<pre>1</pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
    public function setPageNum($pageNum)
    {
        $this->sdkStdResult["pageNum"] = $pageNum;
    }
    
        
    /**
    * @return 每页显示的记录数
    */
    public function getPageSize()
    {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页显示的记录数
     * @param Integer $pageSize
     * 参数示例：<pre>10</pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
    public function setPageSize($pageSize)
    {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
