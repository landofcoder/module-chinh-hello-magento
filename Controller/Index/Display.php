<?php
namespace Lof\ChinhHelloMagento\Controller\Index;
use Lof\ChinhHelloMagento\Helper\Data;

class Display extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	protected $helperData;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Lof\ChinhHelloMagento\Helper\Data $helperData
		)
	{
		
		parent::__construct($context);
		$this->_pageFactory = $pageFactory;
		$this->helperData = $helperData;
	}
	public function execute()
	{
		if($this->helperData->getGeneralConfig('enable') == 1){
			?>
			<head>
				<title>
					<?php echo $this->helperData->getGeneralConfig('title_text');?>
				</title>
			</head>
			<?php
		}
		return $this->_pageFactory->create();
	}
}