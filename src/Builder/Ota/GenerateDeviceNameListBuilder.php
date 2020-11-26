<?php


namespace DPTools\AliIotHelper\Builder\Ota;


class GenerateDeviceNameListBuilder extends BasicOTABuilder
{
    /**
     * @param $iotInstanceId string
     * 公共实例不传此参数；您购买的实例需传入实例ID。
     * @return $this
     */
    public function setIotInstanceId($iotInstanceId)
    {
        $this->query['IotInstanceId'] = $iotInstanceId;
        return $this;
    }
}
