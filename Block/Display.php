<?php
namespace Lof\ChinhHelloMagento\Block;

use Lof\ChinhHelloMagento\Helper\Data;
use Magento\Framework\View\Element\Template;

class Display extends \Magento\Framework\View\Element\Template
{
	protected $helperData;
	public function __construct(\Magento\Framework\View\Element\Template\Context $context,
	\Lof\ChinhHelloMagento\Helper\Data $helperData,
	\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		parent::__construct($context);
		$this->helperData = $helperData;
		$this->_pageFactory = $pageFactory;
	}
	public function sayHello()
	{	
		return __('<H1>Chinh Hello Magento</H1>
		<?php
		echo "";
		?>
        <style>
        H1{
            color: blue;
        }
		</style>');
		return $this->_pageFactory->create();
	}
	public function GetDisplayText()
    {
		$textdisplay = $this->helperData->getConfigDisplayText();
		$enable = $this->helperData->getConfigEnable();
		if($enable == 1){
			return $textdisplay;
		}
	}
	public function GetTitle()
    {
		$title = $this->helperData->getConfigTitle();
		$enable = $this->helperData->getConfigEnable();
		if($enable == 1){
			return $title;
		}
    }
}