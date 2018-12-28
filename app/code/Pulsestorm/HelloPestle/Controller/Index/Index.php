<?php
namespace Pulsestorm\HelloPestle\Controller\Index;
class Index extends \Magento\Framework\App\Action\Action
{

    protected $resultPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        var_dump(__METHOD__);
        return $this->resultPageFactory->create();
    }

}
