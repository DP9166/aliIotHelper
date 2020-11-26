<?php


namespace DPTools\AliIotHelper\Request;


use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

class Request
{
    protected $regionId;

    protected $action;
    protected $query;

    public function __construct($accessKeyId, $accessKeySecret, $regionId)
    {
        $this->regionId = $regionId;

        // 创建公共的实例
        AlibabaCloud::accessKeyClient($accessKeyId, $accessKeySecret)
            ->regionId($regionId)
            ->asDefaultClient();
    }

    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    public function setQuery($query)
    {
        $this->query = $query;
        return $this;
    }

    public function exec()
    {
        try {
            $result = AlibabaCloud::rpc()
                ->product('Request')
                // ->scheme('https') // https | http
                ->version('2018-01-20')
                ->action($this->action)
                ->method('POST')
                ->host('iot.cn-shanghai.aliyuncs.com')
                ->options([
                    'query' => $this->query
                ])
                ->request();
            return $result->toArray();
        } catch (ClientException $e) {
            var_dump($e->getErrorMessage());
            return false;
        } catch (ServerException $e) {
            var_dump($e->getErrorMessage());
            return false;
        }
    }
}
