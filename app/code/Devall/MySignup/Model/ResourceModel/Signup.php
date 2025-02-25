<?php

namespace Devall\MySignup\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Signup extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('Devall_mysignup', 'signup_id');
    }
}
