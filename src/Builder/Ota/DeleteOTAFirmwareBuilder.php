<?php


namespace DPTools\AliIotHelper\Builder\Ota;


class DeleteOTAFirmwareBuilder extends BasicOTABuilder
{
    /**
     * @param mixed $FirmwareId
     * @return Object
     */
    public function setFirmwareId($FirmwareId)
    {
        $this->query['FirmwareId'] = $FirmwareId;
        return $this;
    }

    /**
     * @param mixed $IotInstanceId
     * @return Object
     */
    public function setIotInstanceId($IotInstanceId)
    {
        $this->query['IotInstanceId'] = $IotInstanceId;
        return $this;
    }

    protected function ruleFields()
    {
        return ['FirmwareId'];
    }
}
