<?php

namespace Lof\ChinhHelloMagento\Helper;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Helper\Context;

class Data extends AbstractHelper
{
	protected $scopeConfig;
	const XML_PATH_HELLOWORLD = 'helloworld/';

	public function __construct(Context $context,ScopeConfigInterface $scopeConfig)
    {
        parent::__construct($context);
        $this->scopeConfig=$scopeConfig;
    }
	public function getConfigValue($field, $storeId = null)
	{
		return $this->scopeConfig->getValue(
			$field, ScopeInterface::SCOPE_STORE, $storeId
		);
	}
	public function getConfigDisplayText()
    {
        return $this->scopeConfig->getValue('helloworld/general/display_text',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	public function getConfigTitle()
    {
        return $this->scopeConfig->getValue('helloworld/general/title_text',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	public function getConfigEnable()
    {
        return $this->scopeConfig->getValue('helloworld/general/enable',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	public function getConfigUrlText()
    {
        return $this->scopeConfig->getValue('helloworld/general/url_text',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
	public function getGeneralConfig($code, $storeId = null)
	{

		return $this->getConfigValue(self::XML_PATH_HELLOWORLD .'general/'. $code, $storeId);
	}

}