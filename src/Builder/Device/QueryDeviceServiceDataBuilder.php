<?php


namespace  DPTools\AliIotHelper\Builder\Device;


class QueryDeviceServiceDataBuilder extends BasicDeviceBuilder
{
    /**
     * @param $identifier string
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->query['Identifier'] = $identifier;
        return $this;
    }

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

    protected function ruleFields()
    {
        return ['EndTime', 'StartTime'];
    }
}
