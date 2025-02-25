<?php
/**
 * Collection.php
 *
 * @category  Devall
 * @package   Devall_MySignup
 */

namespace Devall\MySignup\Model\ResourceModel\Signup;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Devall\MySignup\Model\Signup as SignupModel;
use Devall\MySignup\Model\ResourceModel\Signup as SignupResource;

/**
 * Signup Collection
 */
class Collection extends AbstractCollection
{
    /**
     * Define model & resource model.
     *
     * This method is called by Magento to initialize the collection
     * with the model and resource model classes.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(SignupModel::class, SignupResource::class);
    }
}
