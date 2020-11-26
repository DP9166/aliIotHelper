<?php


namespace DPTools\AliIotHelper\Builder\Ota;


class CreateOTADynamicUpgradeJobBuilder extends BasicOTABuilder
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
     * @param mixed $IotInstanceId
     * @return Object
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
     * @param mixed $OverwriteMode
     */
    public function setOverwriteMode($OverwriteMode)
    {
        $this->query['OverwriteMode'] = $OverwriteMode;
        return $this;
    }

    public function setDynamicMode($DynamicMode)
    {
        $this->query['DynamicMode'] = $DynamicMode;
        return $this;
    }

    protected function ruleFields()
    {
        return ['FirmwareId', 'ProductKey', 'Tag.1.Key', 'Tag.1.Value'];
    }
}
