<?php


namespace  DPTools\AliIotHelper\Builder\Device;


class QueryDeviceDesiredPropertyBuilder extends BasicDeviceBuilder
{
    /**
     * @param $identifiers array
     *
     * @return $this
     */
    public function setIdentifiers($identifiers)
    {
        foreach ($identifiers as $k => $identifier) {
            $this->query['Identifier'. ($k + 1)] = $identifier;
        }
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

}
