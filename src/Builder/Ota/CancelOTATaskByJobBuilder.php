<?php


namespace DPTools\AliIotHelper\Builder\Ota;


class CancelOTATaskByJobBuilder extends BasicOTABuilder
{
    /**
     * @param bool $CancelScheduledTask
     */
    public function setCancelScheduledTask($CancelScheduledTask)
    {
        $this->query['CancelScheduledTask'] = $CancelScheduledTask;
        return $this;
    }

    /**
     * @param bool $CancelQueuedTask
     */
    public function setCancelQueuedTask($CancelQueuedTask)
    {
        $this->query['CancelQueuedTask'] = $CancelQueuedTask;
        return $this;
    }

    /**
     * @param bool $CancelInProgressTask
     */
    public function setCancelInProgressTask($CancelInProgressTask)
    {
        $this->query['CancelInProgressTask'] = $CancelInProgressTask;
        return $this;
    }

    /**
     * @param bool $CancelNotifiedTask
     */
    public function setCancelNotifiedTask($CancelNotifiedTask)
    {
        $this->query['CancelNotifiedTask'] = $CancelNotifiedTask;
        return $this;
    }

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
