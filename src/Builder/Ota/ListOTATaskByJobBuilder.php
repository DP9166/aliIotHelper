<?php


namespace DPTools\AliIotHelper\Builder\Ota;


class ListOTATaskByJobBuilder extends BasicOTABuilder
{
    protected $JobId;
    protected $IotInstanceId;
    protected $PageSize;
    protected $TaskStatus;
    protected $CurrentPage;

    /**
     * @param mixed $JobId
     */
    public function setJobId($JobId)
    {
        $this->query['JobId'] = $JobId;
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

    /**
     * @param mixed $PageSize
     */
    public function setPageSize($PageSize)
    {
        $this->query['PageSize'] = $PageSize;
        return $this;
    }

    /**
     * @param mixed $TaskStatus
     */
    public function setTaskStatus($TaskStatus)
    {
        $this->query['TaskStatus'] = $TaskStatus;
        return $this;
    }

    /**
     * @param mixed $CurrentPage
     */
    public function setCurrentPage($CurrentPage)
    {
        $this->query['CurrentPage'] = $CurrentPage;
        return $this;
    }

    public function setDeviceNames($DeviceNames)
    {
        foreach ($DeviceNames as $k => $deviceName)
        {
            $this->query['DeviceNames'. ($k + 1)] = $deviceName;
        }
        return $this;
    }

    protected function ruleFields()
    {
        return ['JobId'];
    }
}
