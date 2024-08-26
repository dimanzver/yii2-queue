<?php

namespace yii\queue\dto;

use yii\base\BaseObject;

class HandleMessageResult extends BaseObject
{

    public bool $status;
    public bool $retry = false;

}
