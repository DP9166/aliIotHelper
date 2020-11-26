<?php


namespace  DPTools\AliIotHelper\Builder\Device;


class InvokeThingServiceBuilder extends BasicDeviceBuilde
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
     * @param $identifier string
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->query['Identifier'] = $identifier;
        return $this;
    }

    /**
     * @param $iotId string 设备ID。物联网平台为该设备颁发的ID，设备的唯一标识符
     * @return $this
     */
    public function setIotId($iotId)
    {
        $this->query['IotId'] = $iotId;
        return $this;
    }

    protected function ruleFields()
    {
        return ['Args', 'Identifier'];
    }
}
