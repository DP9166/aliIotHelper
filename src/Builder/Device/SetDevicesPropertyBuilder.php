<?php


namespace  DPTools\AliIotHelper\Builder\Device;


class SetDevicesPropertyBuilder extends BasicDeviceBuilder
{

    /**
     * @param array $items 要设置的属性信息，数据格式为 JSON String。属性组成为属性标识符key:属性值value
     * @return $this
     */
    public function setItems(array $items)
    {
        $this->query['Items'] = json_encode($items, JSON_UNESCAPED_UNICODE);
        return $this;
    }

    /**
     * @param $iotInstanceId string
     * 公共实例不传此参数；您购买的实例需传入实例ID。
     * @return $this
     */
    public function setIotInstanceId($iotInstanceId)
    {
        $this->query['IotInstanceId'] = json_encode($iotInstanceId, JSON_UNESCAPED_UNICODE);
        return $this;
    }

    public function setDevicesName($devicesName)
    {
        foreach ($devicesName as $k => $deviceName) {
            $this->query['DeviceName.'. ($k + 1)] = $deviceName;
        }
        return $this;
    }

    public function ruleFields()
    {
        return ['DeviceName.1', 'Items', 'DeviceName'];
    }

}
