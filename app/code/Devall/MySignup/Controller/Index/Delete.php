<?php
namespace Devall\MySignup\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Devall\MySignup\Model\SignupFactory;
use Magento\Framework\Controller\ResultFactory;

class Delete extends Action
{
    protected $signupFactory;

    public function __construct(
        Context $context,
        SignupFactory $signupFactory
    ) {
        parent::__construct($context);
        $this->signupFactory = $signupFactory;
    }

    public function execute()
    {
        $result = ['success' => false, 'message' => 'Something went wrong.'];

        if ($id = $this->getRequest()->getParam('id')) {
            try {
                $signup = $this->signupFactory->create()->load($id);
                if ($signup->getId()) {
                    $signup->delete();
                    $result = ['success' => true, 'message' => 'Signup deleted successfully.'];
                } else {
                    $result['message'] = 'Signup not found.';
                }
            } catch (\Exception $e) {
                $result['message'] = 'Error: ' . $e->getMessage();
            }
        }

        $this->getResponse()->setHeader('Content-Type', 'application/json');
        $this->getResponse()->setBody(json_encode($result));
    }
}
