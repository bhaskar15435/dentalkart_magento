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
    $name=$customer->getCustomerName();

    $customer_day=date("d",$dob);
    $customer_month=date("m",$dob);

    $today_day=date("d",$date);
    $today_month=date("m",$date);

    if( ($customer_month==$today_month) &&($customer_day==$today_day))
    {
       echo "Happy birthday to you"." ". $name." "." from dentalkart";
    }


	}
}
