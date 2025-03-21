<?php

namespace Devall\MySignup\Controller\Signup;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Devall\MySignup\Model\SignupFactory;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\Request\InvalidRequestException;
use Magento\Framework\App\CsrfAwareActionInterface;

class Delete extends \Magento\Framework\App\Action\Action implements HttpPostActionInterface, CsrfAwareActionInterface
{
    protected $resultJsonFactory;
    protected $signupFactory;

    public function __construct(
        Context $context,
        JsonFactory $resultJsonFactory,
        SignupFactory $signupFactory
    ) {
        parent::__construct($context);
        $this->resultJsonFactory = $resultJsonFactory;
        $this->signupFactory = $signupFactory;
    }

    public function execute()
    {
        $resultJson = $this->resultJsonFactory->create();
        $id = $this->getRequest()->getParam('id');

        if (!$id) {
            return $resultJson->setData(['success' => false, 'message' => 'Invalid ID']);
        }

        try {
            $signup = $this->signupFactory->create()->load($id);
            if (!$signup->getId()) {
                return $resultJson->setData(['success' => false, 'message' => 'Signup not found']);
            }

            $signup->delete();
            return $resultJson->setData(['success' => true, 'message' => 'Signup deleted successfully']);
        } catch (\Exception $e) {
            return $resultJson->setData(['success' => false, 'message' => 'Error deleting signup']);
        }
    }

    public function createCsrfValidationException(RequestInterface $request): ?InvalidRequestException
    {
        return null;
    }

    public function validateForCsrf(RequestInterface $request): ?bool
    {
        return true;
    }
}
