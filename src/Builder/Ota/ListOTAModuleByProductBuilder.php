<?php


namespace DPTools\AliIotHelper\Builder\Ota;


class ListOTAModuleByProductBuilder extends BasicOTABuilder
{
    /**
     * @param mixed $ProductKey
     */
    public function setProductKey($ProductKey)
    {
        $this->query['ProductKey'] = $ProductKey;
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

    protected function ruleFields()
    {
        return ['ProductKey'];
    }

}
