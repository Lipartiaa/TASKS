<?php
namespace Magento\Customer\Api\Data;

/**
 * Extension class for @see \Magento\Customer\Api\Data\CustomerInterface
 */
class CustomerExtension extends \Magento\Framework\Api\AbstractSimpleObject implements CustomerExtensionInterface
{
    /**
     * @return integer|null
     */
    public function getAssistanceAllowed()
    {
        return $this->_get('assistance_allowed');
    }

    /**
     * @param integer $assistanceAllowed
     * @return $this
     */
    public function setAssistanceAllowed($assistanceAllowed)
    {
        $this->setData('assistance_allowed', $assistanceAllowed);
        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsSubscribed()
    {
        return $this->_get('is_subscribed');
    }

    /**
     * @param boolean $isSubscribed
     * @return $this
     */
    public function setIsSubscribed($isSubscribed)
    {
        $this->setData('is_subscribed', $isSubscribed);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLinkedinProfile()
    {
        return $this->_get('linkedin_profile');
    }

    /**
     * @param string $linkedinProfile
     * @return $this
     */
    public function setLinkedinProfile($linkedinProfile)
    {
        $this->setData('linkedin_profile', $linkedinProfile);
        return $this;
    }
}
