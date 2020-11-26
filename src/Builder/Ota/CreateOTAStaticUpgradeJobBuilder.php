<?php


namespace DPTools\AliIotHelper\Builder\Ota;
return $this;


class CreateOTAStaticUpgradeJobBuilder extends BasicOTABuilder
{
    /**
     * @param mixed $FirmwareId
     */
    public function setFirmwareId($FirmwareId)
    {
        $this->query['FirmwareId'] = $FirmwareId;
        return $this;
    }

    /**
     * @param mixed $ProductKey
     */
    public function setProductKey($ProductKey)
    {
        $this->query['ProductKey'] = $ProductKey;
        return $this;
    }

    /**
     * @param mixed $Tags
     */
    public function setTags($Tags)
    {
        foreach ($Tags as $k => $v)
        {
            $this->query['Tag.'. ($k + 1).'.Key'] = $v['key'];
            $this->query['Tag.'. ($k + 1).'.Value'] = $v['Value'];
        }
        return $this;
    }

    /**
     * @param mixed $TargetSelection
     */
    public function setTargetSelection($TargetSelection)
    {
        $this->query['TargetSelection'] = $TargetSelection;
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
     * @param mixed $SrcVersions
     */
    public function setSrcVersions($SrcVersions)
    {
        foreach ($SrcVersions as $k => $srcVersion) {
            $this->query['SrcVersion.'. ($k + 1)] = $srcVersion;
        }
        return $this;
    }

    /**
     * @param mixed $ScheduleTime
     */
    public function setScheduleTime($ScheduleTime)
    {
        $this->query['ScheduleTime'] = $ScheduleTime;
        return $this;
    }

    /**
     * @param mixed $RetryInterval
     */
    public function setRetryInterval($RetryInterval)
    {
        $this->query['RetryInterval'] = $RetryInterval;
        return $this;
    }

    /**
     * @param mixed $RetryCount
     */
    public function setRetryCount($RetryCount)
    {
        $this->query['RetryCount'] = $RetryCount;
        return $this;
    }

    /**
     * @param mixed $TimeoutInMinutes
     */
    public function setTimeoutInMinutes($TimeoutInMinutes)
    {
        $this->query['TimeoutInMinutes'] = $TimeoutInMinutes;
        return $this;
    }

    /**
     * @param mixed $MaximumPerMinute
     */
    public function setMaximumPerMinute($MaximumPerMinute)
    {
        $this->query['MaximumPerMinute'] = $MaximumPerMinute;
        return $this;
    }

    /**
     * @param mixed $GrayPercent
     */
    public function setGrayPercent($GrayPercent)
    {
        $this->query['GrayPercent'] = $GrayPercent;
        return $this;
    }

    /**
     * @param mixed $TargetDeviceNames
     */
    public function setTargetDeviceNames($TargetDeviceNames)
    {
        foreach ($TargetDeviceNames as $k => $targetDeviceName) {
            $this->query['TargetDeviceName.'. $k] = $targetDeviceName;
        }
        return $this;
    }

    /**
     * @param mixed $ScheduleFinishTime
     */
    public function setScheduleFinishTime($ScheduleFinishTime)
    {
        $this->query['ScheduleFinishTime'] = $ScheduleFinishTime;
        return $this;
    }

    /**
     * @param mixed $OverwriteMode
     */
    public function setOverwriteMode($OverwriteMode)
    {
        $this->query['OverwriteMode'] = $OverwriteMode;
        return $this;
    }

    /**
     * @param mixed $DnListFileUrl
     */
    public function setDnListFileUrl($DnListFileUrl)
    {
        $this->query['DnListFileUrl'] = $DnListFileUrl;
        return $this;
    }

    protected function ruleFields()
    {
        return ['ProductKey', 'TargetSelection', 'FirmwareId'];
    }
}
