<?php


namespace DPTools\AliIotHelper\Builder\Ota;


class CreateOTAModuleBuilder extends BasicOTABuilder
{
    /**
     * @param string $ModuleName
     */
    public function setModuleName($ModuleName)
    {
        $this->query['ModuleName'] = $ModuleName;
    }

    /**
     * @param string $ProductKey
     */
    public function setProductKey($ProductKey)
    {
        $this->query['ProductKey'] = $ProductKey;
    }

    /**
     * @param string $AliasName
     */
    public function setAliasName($AliasName)
    {
        $this->query['AliasName'] = $AliasName;
    }

    /**
     * @param string $IotInstanceId
     */
    public function setIotInstanceId($IotInstanceId)
    {
        $this->query['IotInstanceId'] = $IotInstanceId;
    }

    /**
     * @param string $Desc
     */
    public function setDesc($Desc)
    {
        $this->query['Desc'] = $Desc;
    }

    protected function ruleFields()
    {
        return ['ModuleName', 'ProductKey'];
    }
}
