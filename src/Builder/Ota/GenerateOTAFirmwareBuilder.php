<?php


namespace DPTools\AliIotHelper\Builder\Ota;

class GenerateOTAFirmwareBuilder extends BasicOTABuilder
{

    public function setDestVersion($destVersion)
    {
        $this->query['DestVersion'] = $destVersion;
        return $this;
    }

    public function setFirmwareUrl($firmwareUrl)
    {
        $this->query['FirmwareUrl'] = $firmwareUrl;
        return $this;
    }

    public function setFirmwareName($firmwareName)
    {
        $this->query['FirmwareName'] = $firmwareName;
        return $this;
    }

    public function setProductKey($productKey)
    {
        $this->query['ProductKey'] = $productKey;
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

    public function setFirmwareSign($firmwareSign)
    {
        $this->query['FirmwareSign'] = $firmwareSign;
        return $this;
    }


    public function setFirmwareDesc($firmwareDesc)
    {
        $this->query['FirmwareDesc'] = $firmwareDesc;
        return $this;
    }

    public function setType($type)
    {
        $this->query['Type'] = $type;
        return $this;
    }

    public function setSrcVersion($srvVersion)
    {
        $this->query['SrcVersion'] = $srvVersion;
        return $this;
    }

    public function setModuleName($moduleName)
    {
        $this->query['ModuleName'] = $moduleName;
        return $this;
    }

    public function setNeedToVerify($needToVerify)
    {
        $this->query['NeedToVerify'] = $needToVerify;
        return $this;
    }

    protected function ruleFields()
    {
        return ['DestVersion', 'FirmwareName', 'FirmwareUrl'];
    }
}
