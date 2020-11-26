<?php


namespace DPTools\AliIotHelper\Builder\Ota;


class CreateOTAVerifyJobBuilder extends BasicOTABuilder
{
    /**
     * @param mixed $FirmwareId
     */
    public function setFirmwareId($FirmwareId)
    {
        $this->query['FirmwareId'] = $FirmwareId;
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
     * @param mixed $TargetDeviceNames
     */
    public function setTargetDeviceNames($TargetDeviceNames)
    {
        $this->query['TargetDeviceNames'] = $TargetDeviceNames;
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

    /**
     * @param mixed $TimeoutInMinutes
     */
    public function setTimeoutInMinutes($TimeoutInMinutes)
    {
        $this->query['TimeoutInMinutes'] = $TimeoutInMinutes;
        return $this;
    }

}
