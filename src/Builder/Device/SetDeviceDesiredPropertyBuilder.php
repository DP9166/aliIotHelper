<?php


namespace  DPTools\AliIotHelper\Builder\Device;


class SetDeviceDesiredPropertyBuilder extends BasicDeviceBuilder
{
    /**
     * @param array $items
     * @return $this
     */
    public function setItems(array $items)
    {
        $this->query['Items'] = json_encode($items, JSON_UNESCAPED_UNICODE);
        return $this;
    }

    /**
     * @param array $versions
     * @return $this
     */
    public function setVersions(array $versions)
    {
        $this->query['Versions'] = json_encode($versions, JSON_UNESCAPED_UNICODE);
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
        return ['Items'];
    }

}
