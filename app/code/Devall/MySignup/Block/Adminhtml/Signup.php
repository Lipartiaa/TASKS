<?php
// remove this block class! only use UI components for building grid!
namespace Devall\MySignup\Block\Adminhtml;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Devall\MySignup\Model\ResourceModel\Signup\CollectionFactory as SignupCollectionFactory;

class Signup extends Template
{
    /**
     * @var SignupCollectionFactory
     */
    protected $collectionFactory;

    public function __construct(
        Context                 $context,
        SignupCollectionFactory $collectionFactory,
        array                   $data = []
    )
    {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * Retrieve signup collection
     *
     * @return \Devall\MySignup\Model\ResourceModel\Signup\Collection
     */
    public function getSignupCollection()
    {
        $collection = $this->collectionFactory->create();
        // Optionally, add filters or sorting here.
        return $collection;
    }
}
