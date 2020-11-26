<?php


namespace DPTools\AliIotHelper\Builder\Ota;


class ListOTAJobByDeviceBuilder extends BasicOTABuilder
{

    /**
     * @param mixed $currentPage
     */
    public function setCurrentPage($currentPage)
    {
        $this->query['currentPage'] = $currentPage;
        return $this;
    }

    /**
     * @param mixed $DeviceName
     */
    public function setDeviceName($DeviceName)
    {
        $this->query['DeviceName'] = $DeviceName;
        return $this;
    }

    /**
     * @param mixed $FirmwareId
     */
    public function setFirmwareId($FirmwareId)
    {
        $this->query['FirmwareId'] = $FirmwareId;
        return $this;
    }

    /**
     * @param mixed $PageSize
     */
    public function setPageSize($PageSize)
    {
        $this->query['PageSize'] = $PageSize;
        return $this;
    }

    /**
     * @param mixed $ProductKey
     */
    public function setProductKey($ProductKey)
    {
        $this->query['ProductKey'] = $ProductKey;
        return $this;
    }

    /**
     * @param mixed $IotInstanceId
     */
    public function setIotInstanceId($IotInstanceId)
    {
        $this->query['IotInstanceId'] = $IotInstanceId;
        return $this;
    }

    protected function ruleFields()
    {
        return ['CurrentPage', 'DeviceName', 'FirmwareId', 'PageSize', 'ProductKey'];
    }
}
