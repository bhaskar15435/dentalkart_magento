<?php
namespace Dentalkart\CustomerDob\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
  protected $customerFactory;
  protected $date;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
    \Magento\customer\Model\CustomerFactory $customerFactory,
    \Magento\Framework\Stdlib\DateTime\DateTime $date)
	{
		$this->_pageFactory = $pageFactory;
    $this->date = $date;
    $this->customerFactory=$customerFactory;

		return parent::__construct($context);
	}

	public function execute()
	{
		$date= $this->date->gmtDate();
    $customer=$this->customerFactory->create();
    $dob=$customer->getDob();


	}
}
