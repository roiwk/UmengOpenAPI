<?php
namespace Roiwk\UmengOpenAPI\com\umeng\umini\param;

use Roiwk\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Roiwk\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUminiGetVisitPageListParam
{

        
        /**
    * @return 数据源id
    */
    public function getDataSourceId()
    {
        $tempResult = $this->sdkStdResult["dataSourceId"];
        return $tempResult;
    }
    
    /**
     * 设置数据源id
     * @param String $dataSourceId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDataSourceId($dataSourceId)
    {
        $this->sdkStdResult["dataSourceId"] = $dataSourceId;
    }
    
        
    /**
    * @return 时间颗粒度（可选参数：day,7day,30day）
    */
    public function getTimeUnit()
    {
        $tempResult = $this->sdkStdResult["timeUnit"];
        return $tempResult;
    }
    
    /**
     * 设置时间颗粒度（可选参数：day,7day,30day）
     * @param String $timeUnit
     * 参数示例：<pre>day</pre>
     * 此参数必填     */
    public function setTimeUnit($timeUnit)
    {
        $this->sdkStdResult["timeUnit"] = $timeUnit;
    }
    
        
    /**
    * @return 开始时间
    */
    public function getFromDate()
    {
        $tempResult = $this->sdkStdResult["fromDate"];
        return $tempResult;
    }
    
    /**
     * 设置开始时间
     * @param String $fromDate
     * 参数示例：<pre>2020-08-10</pre>
     * 此参数必填     */
    public function setFromDate($fromDate)
    {
        $this->sdkStdResult["fromDate"] = $fromDate;
    }
    
        
    /**
    * @return 结束时间
    */
    public function getToDate()
    {
        $tempResult = $this->sdkStdResult["toDate"];
        return $tempResult;
    }
    
    /**
     * 设置结束时间
     * @param String $toDate
     * 参数示例：<pre>2020-08-10</pre>
     * 此参数必填     */
    public function setToDate($toDate)
    {
        $this->sdkStdResult["toDate"] = $toDate;
    }
    
        
    /**
    * @return 排序指标（可选：visitTimes：页面访问次数；visitUser：页面访问用户数；pageDuration：平均页面访问时长）
    */
    public function getOrderBy()
    {
        $tempResult = $this->sdkStdResult["orderBy"];
        return $tempResult;
    }
    
    /**
     * 设置排序指标（可选：visitTimes：页面访问次数；visitUser：页面访问用户数；pageDuration：平均页面访问时长）
     * @param String $orderBy
     * 参数示例：<pre>visitTimes</pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
    public function setOrderBy($orderBy)
    {
        $this->sdkStdResult["orderBy"] = $orderBy;
    }
    
        
    /**
    * @return 排序方向（desc：降序,asc：正序）
    */
    public function getDirection()
    {
        $tempResult = $this->sdkStdResult["direction"];
        return $tempResult;
    }
    
    /**
     * 设置排序方向（desc：降序,asc：正序）
     * @param String $direction
     * 参数示例：<pre>desc</pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
    public function setDirection($direction)
    {
        $this->sdkStdResult["direction"] = $direction;
    }
    
        
    /**
    * @return 页码
    */
    public function getPageIndex()
    {
        $tempResult = $this->sdkStdResult["pageIndex"];
        return $tempResult;
    }
    
    /**
     * 设置页码
     * @param Integer $pageIndex
     * 参数示例：<pre>1</pre>
     * 此参数为可选参数

     * 默认值：<pre></pre>
          */
    public function setPageIndex($pageIndex)
    {
        $this->sdkStdResult["pageIndex"] = $pageIndex;
    }
    
        
    /**
    * @return 每页记录数
    */
    public function getPageSize()
    {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页记录数
     * @param Integer $pageSize
     * 参数示例：<pre>30</pre>
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
