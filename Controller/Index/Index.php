<?php
namespace Lof\ChinhHelloMagento\Controller\Index;
 
class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $layout = $this->_view->getLayout();
        $block = $layout->createBlock('Magento\Framework\View\Element\Text');
        $block->setText('Hello world from Ha !');
        $this->getResponse()->appendBody($block->toHtml());
    }
}