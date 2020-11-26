<?php


namespace DPTools\AliIotHelper\Builder\Ota;


class UpdateOTAModuleBuilder extends BasicOTABuilder
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
     * @param string $desc
     */
    public function setDesc($desc)
    {
        $this->query['desc'] = $desc;
    }

    protected function ruleFields()
    {
        return ['ModuleName', 'ProductKey'];
    }
}
