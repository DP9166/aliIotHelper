<?php


namespace  DPTools\AliIotHelper\Builder\Device;


use DPTools\AliIotHelper\Builder\Builder;

/**
 * Class BasicDeviceBuilder
 * @package DPTools\AliIotHelper\Builder\Device
 */
class BasicDeviceBuilder implements Builder
{
    /**
     * @var array
     */
    protected $query = [];

    /**
     * @param $regionId
     * @return $this
     */
    public function setRegionId($regionId)
    {
        $this->query['RegionId'] = ($regionId) ?: config('iot')['aliyun']['regionId'];
        return $this;
    }

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

    /**
     * @param $productKet string 设备所隶属的产品ProductKey。
     *
     * @return Object
     */
    public function setProductKey($productKet)
    {
        $this->query['ProductKey'] = $productKet;
        return $this;
    }

    /**
     * @param $deviceName string|array  要查询设备的名称。
     *
     * @return Object
     */
    public function setDeviceName($deviceName)
    {
        $this->query['DeviceName'] = $deviceName;
        return $this;
    }

    /**
     * @return array
     */
    protected function ruleFields()
    {
        return [];
    }

    /**
     * @return array|mixed
     */
    public function getQuery()
    {

        $diff_arr = array_diff($this->ruleFields(), array_keys($this->query));

        if (!empty($diff_arr)) {
            die('缺失参数');
        }

        return $this->query;
    }
}
