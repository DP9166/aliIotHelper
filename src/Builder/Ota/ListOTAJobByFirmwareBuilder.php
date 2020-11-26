<?php


namespace DPTools\AliIotHelper\Builder\Ota;


class ListOTAJobByFirmwareBuilder extends BasicOTABuilder
{
    /**
     * @param mixed $CurrentPage
     */
    public function setCurrentPage($CurrentPage)
    {
        $this->query['CurrentPage'] = $CurrentPage;
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
     * @param mixed $IotInstanceId
     */
    public function setIotInstanceId($IotInstanceId)
    {
        $this->query['IotInstanceId'] = $IotInstanceId;
        return $this;
    }

    public function ruleFields()
    {
        return ['CurrentPage', 'FirmwareId', 'PageSize'];
    }

}
