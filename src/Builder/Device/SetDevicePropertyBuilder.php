<?php


namespace  DPTools\AliIotHelper\Builder\Device;


use DPTools\AliIotHelper\Builder\Builder;

/**
 * Class SetDevicePropertyBuilder
 * @package DPTools\AliIotHelper\Builder\Device
 */
class SetDevicePropertyBuilder extends BasicDeviceBuilder
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
