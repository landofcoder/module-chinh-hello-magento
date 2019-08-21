<?php
namespace Lof\ChinhHelloMagento\Block;
class Display extends \Magento\Framework\View\Element\Template
{
	public function __construct(\Magento\Framework\View\Element\Template\Context $context)
	{
		parent::__construct($context);
	}
	public function sayHello()
	{
        return __('<H1>Chinh Hello Magento</H1>
        <style>
        H1{
            color: red;
        }
        </style>');
	}
}