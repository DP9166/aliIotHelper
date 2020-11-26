<?php


namespace DPTools\AliIotHelper\Builder\Ota;


class QueryOTAFirmwareBuilder extends BasicOTABuilder
{
    /**
     * @param string $FirmWareId
     */
    public function setFirmWareId($FirmWareId)
    {
        $this->query['FirmWareId'] = $FirmWareId;
        return $this;
    }

    /**
     * @param string $IotInstanceId
     */
    public function setIotInstanceId($IotInstanceId)
    {
        $this->query['IotInstanceId'] = $IotInstanceId;
        return $this;
    }

}
