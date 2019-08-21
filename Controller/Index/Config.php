<?php

namespace Lof\ChinhHelloMagento\Controller\Index;

class Config extends \Magento\Framework\App\Action\Action
{

	protected $helperData;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
        \Lof\ChinhHelloMagento\Helper\Data $helperData
	)
	{
		$this->helperData = $helperData;
		return parent::__construct($context);
	}

	public function execute()
	{

		// TODO: Implement execute() method.
        if($this->helperData->getGeneralConfig('enable') == 1){
            echo $this->helperData->getGeneralConfig('display_text');
            ?>
            <head>
                <title>
                    <?php
                        echo $this->helperData->getGeneralConfig('title_text');
                    ?>
                </title>
            </head>
            <?php
        }
		exit();
	}
}