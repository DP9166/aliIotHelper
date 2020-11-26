<?php


namespace DPTools\AliIotHelper\Builder\Ota;


class DeleteOTAModuleBuilder extends BasicOTABuilder
{
    /**
     * @param mixed $ModuleName
     */
    public function setModuleName($ModuleName)
    {
        $this->query['ModuleName'] = $ModuleName;
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
     * @param mixed $AliasName
     */
    public function setAliasName($AliasName)
    {
        $this->query['AliasName'] = $AliasName;
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
     * @param mixed $Desc
     */
    public function setDesc($Desc)
    {
        $this->query['Desc'] = $Desc;
        return $this;
    }

    protected function ruleFields()
    {
        return ['ModuleName', 'ProductKey'];
    }
}
