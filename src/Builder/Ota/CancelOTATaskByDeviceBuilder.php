<?php


namespace DPTools\AliIotHelper\Builder\Ota;


class CancelOTATaskByDeviceBuilder extends BasicOTABuilder
{
    public function setDeviceNames($DeviceNames)
    {
        foreach ($DeviceNames as $k => $deviceName)
        {
            $this->query['DeviceNames'. ($k + 1)] = $deviceName;
        }
        return $this;
    }

    /**
     * @param mixed $JobId
     */
    public function setJobId($JobId)
    {
        $this->query['JobId'] = $JobId;
        return $this;
    }

    /**
     * @param mixed $JobId
     */
    public function setProductKey($ProductKey)
    {
        $this->query['ProductKey'] = $ProductKey;
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

    public function setFirmwareId($firmwareId)
    {
        $this->query['FirmwareId'] = $firmwareId;
        return $this;
    }

    protected function ruleFields()
    {
        return ['DeviceName.1', 'FirmwareId', 'ProductKey'];
    }
}
