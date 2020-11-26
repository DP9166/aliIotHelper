<?php


namespace DPTools\AliIotHelper\Builder\Ota;


use DPTools\AliIotHelper\Builder\Builder;

class BasicOTABuilder implements Builder
{
    /**
     * @var array
     */
    protected $query = [];

    /**
     * @return array
     */
    protected function ruleFields()
    {
        return [];
    }

    public function getQuery()
    {
        $diff_arr = array_diff($this->ruleFields(), array_keys($this->query));

        if (!empty($diff_arr)) {
            die('缺失参数');
        }

        return $this->query;
    }
}
