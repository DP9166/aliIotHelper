<?php


namespace  DPTools\AliIotHelper\Builder\Device;

/*
 *      调用该接口查询指定设备的属性记录。
 *      @url https://help.aliyun.com/document_detail/69539.html?spm=a2c4g.11186623.6.853.66c75ee2NB0tD3
 *
 * */
class QueryDevicePropertyDataBuilder extends BasicDeviceBuilder
{
    /**
     * @param int $asc Integer  返回结果中属性记录的排序方式，取值： 0. 倒序， 1. 正序
     * @return Object
     */
    public function setAsc($asc = 0)
    {
        $this->query['Asc'] = $asc;
        return $this;
    }

    /**
     * @param string $startTime 开始时间
     *
     * @return Object
     */
    public function setStartTime($startTime)
    {
        $this->query['StartTime'] = ($startTime - 7 * 24 * 60 * 60) . '000';
        return $this;
    }

    /**
     * @param string $endTime 结束时间(时间戳)
     *
     * @return Object
     */
    public function setEndTime($endTime)
    {
        $this->query['EndTime'] = $endTime . '000';
        return $this;
    }

    /**
     * @param int $pageSize 页数, 默认为10
     *
     * @return Object
     */
    public function setPageSize($pageSize = 10)
    {
        $this->query['PageSize'] = $pageSize;
        return $this;
    }

    /**
     * @param $iotId string 设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符
     * @return $this
     */
    public function setIotId($iotId)
    {
        $this->query['IotId'] = $iotId;
        return $this;
    }

    /**
     * @param $identifier string 服务的标识符。
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->query['Identifier'] = $identifier;
        return $this;
    }

    protected function ruleFields()
    {
        return ['Asc', 'EndTime', 'Identifier', 'Identifier', 'StartTime'];
    }
}
