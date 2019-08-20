<?php
namespace Lof\ChinhHelloMagento\Controller\Index;
class Display extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}
	public function execute()
	{
		return $this->_pageFactory->create();
		$this->resultPage = $this->resultPageFactory->create();  
  		$this->resultPage->getConfig()->getTitle()->set((__('Welcome to Codesspires')));
  		return $this->resultPage;
	}
}