<?php
namespace Lof\ChinhHelloMagento\Controller;
class Router implements \Magento\Framework\App\RouterInterface
{
   protected $actionFactory;
   protected $helperData;
   protected $_response;
   public function __construct(
       \Magento\Framework\App\ActionFactory $actionFactory,
       \Magento\Framework\App\ResponseInterface $response,
       \Lof\ChinhHelloMagento\Helper\Data $helperData
   ) {
       $this->actionFactory = $actionFactory;
       $this->helperData = $helperData;
       $this->_response = $response;
   }
   public function match(\Magento\Framework\App\RequestInterface $request)
   {
        $identifier = trim($request->getPathInfo(), '/');
        $urltext = $this->helperData->getConfigUrlText();
        if(strpos($identifier, $urltext) !== false) {
                $request->setModuleName('chinhhellomagento')-> //module name
                setControllerName('index')-> //controller name
                setActionName('display'); //action name
        } else {
            return false;
        }
        return $this->actionFactory->create(
            'Magento\Framework\App\Action\Forward',
            ['request' => $request]
        );
   }
}