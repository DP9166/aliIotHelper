<?php


namespace DPTools\AliIotHelper\Builder\Ota;


class ListOTAFirmwareBuilder extends BasicOTABuilder
{
    /**
     * @param mixed $CurrentPage
     */
    public function setCurrentPage($CurrentPage)
    {
        $this->query['CurrentPage'] = $CurrentPage;
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
     * @param mixed $IotInstanceId
     */
    public function setIotInstanceId($IotInstanceId)
    {
        $this->query['IotInstanceId'] = $IotInstanceId;
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
     * @param mixed $DestVersion
     */
    public function setDestVersion($DestVersion)
    {
        $this->query['DestVersion'] = $DestVersion;
        return $this;
    }

    protected function ruleFields()
    {
        return ['CurrentPage', 'PageSize'];
    }

}
