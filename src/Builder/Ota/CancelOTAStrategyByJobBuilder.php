<?php


namespace DPTools\AliIotHelper\Builder\Ota;


class CancelOTAStrategyByJobBuilder extends BasicOTABuilder
{
    /**
     * @param mixed $JobId
     */
    public function setJobId($JobId)
    {
        $this->query['JobId'] = $JobId;
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

    protected function ruleFields()
    {
        return ['JobId'];
    }
}
