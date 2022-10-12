<?php


namespace App\Modules\MoMo\MService\Payment\AllInOne\Models;

use App\Modules\MoMo\MService\Payment\Shared\Constants\RequestType;

class RefundStatusRequest extends AIORequest
{
    public function __construct(array $params = array())
    {
        parent::__construct($params);
        $this->setRequestType(RequestType::QUERY_REFUND);
    }

}