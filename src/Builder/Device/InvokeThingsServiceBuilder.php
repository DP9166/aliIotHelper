<?php


namespace  DPTools\AliIotHelper\Builder\Device;


class InvokeThingsServiceBuilder extends BasicDeviceBuilder
{
    /**
     * @param $args
     * @return $this
     */
    public function setArgs($args)
    {
        $this->query['Args'] = json_encode($args, JSON_UNESCAPED_UNICODE);
        return $this;
    }

    /**
     * @param $devicesName string 要调用服务的设备的名称列表。最多支持传入100个设备名称。
     * @return $this
     */
    public function setDevicesName($devicesName)
    {
        foreach ($devicesName as $k => $deviceName) {
            $this->query['DeviceName.'. ($k + 1)] = $deviceName;
        }

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
        return ['Args', 'DeviceName.1', 'Identifier', 'ProductKey'];
    }

}
