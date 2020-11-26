<?php

namespace DPTools\AliIotHelper\Tests;

require './../vendor/autoload.php';

use DPTools\AliIotHelper\Builder\Device\QueryDevicePropertyDataBuilder;
use DPTools\AliIotHelper\Request\Device\QueryDevicePropertyDataRequest;
use DPTools\AliIotHelper\Request\Request;

class Index
{
    public function getConfig()
    {
        return [
            'accessKeyId'       =>  '',
            'accessKeySecret'   =>  '',
            'regionId'          =>  '',
            'device'            =>  [
                'productKey'    =>  '',
                'name'    =>  ''
            ]
        ];
    }

    public function one()
    {
        $config = $this->getConfig();

        $iotRequest = new Request(
            $config['accessKeyId'],
            $config['accessKeySecret'],
            $config['regionId']
        );


        $res = $iotRequest
            ->setAction('QueryDevicePropertyData')
            ->setQuery([
                'RegionId' => $config['regionId'],
                'StartTime' => (time() - 7 * 24 * 60 * 60) . '000',
                'Identifier' => "Volume",
                'Asc' => 0,
                'EndTime' => time(). '000',
                'PageSize' => 10,
                'ProductKey' => $config['device']['productKey'],
                'DeviceName' => $config['device']['name'],
            ])
            ->exec();

        var_dump($res);

    }

    public function two()
    {
        $config = $this->getConfig();
        $iotRequest = new QueryDevicePropertyDataRequest(
            $config['accessKeyId'],
            $config['accessKeySecret'],
            $config['regionId']
        );

        $iotQueryBuilder = new QueryDevicePropertyDataBuilder();

        $now = time();

        $iotQuery = $iotQueryBuilder
            ->setRegionId($config['regionId'])
            ->setIdentifier('Volume')
            ->setProductKey($config['device']['productKey'])
            ->setDeviceName($config['device']['name'])
            ->setEndTime($now)
            ->setStartTime($now - 6 * 60 * 24)
            ->setAsc(0)
            ->setPageSize()
            ->getQuery();

        $res = $iotRequest->setQuery($iotQuery)->exec();

        var_dump($res);
    }
}

$obj = new Index();
$obj->one();
