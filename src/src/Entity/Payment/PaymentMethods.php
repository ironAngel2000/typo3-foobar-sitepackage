<?php

namespace App\Entity\Payment;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Payment\PaymentMethodsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: PaymentMethodsRepository::class)]
#[ORM\Table(name: "payment_methods")]
class PaymentMethods
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $payment_methods_id = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $payment_methods_code = null;

	#[ORM\Column(nullable: true)]
	private ?int $orders_hold_status_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $payment_providers_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $payment_class = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getPaymentMethodsId():  ?int
	{
		return $this->payment_methods_id;
	}

	public function setPaymentMethodsId(int $payment_methods_id) : self
	{
		$this->payment_methods_id = $payment_methods_id;
		return $this;
	}

	public function getPaymentMethodsCode():  ?string
	{
		return $this->payment_methods_code;
	}

	public function setPaymentMethodsCode(string $payment_methods_code) : self
	{
		$this->payment_methods_code = $payment_methods_code;
		return $this;
	}

	public function getOrdersHoldStatusId():  ?int
	{
		return $this->orders_hold_status_id;
	}

	public function setOrdersHoldStatusId(int $orders_hold_status_id) : self
	{
		$this->orders_hold_status_id = $orders_hold_status_id;
		return $this;
	}

	public function getPaymentProvidersId():  ?int
	{
		return $this->payment_providers_id;
	}

	public function setPaymentProvidersId(int $payment_providers_id) : self
	{
		$this->payment_providers_id = $payment_providers_id;
		return $this;
	}

	public function getPaymentClass():  ?string
	{
		return $this->payment_class;
	}

	public function setPaymentClass(string $payment_class) : self
	{
		$this->payment_class = $payment_class;
		return $this;
	}

	public function getDateInsert():  ?\DateTimeInterface
	{
		return $this->date_insert;
	}

	public function setDateInsert(\DateTimeInterface $date_insert) : self
	{
		$this->date_insert = $date_insert;
		return $this;
	}

	public function getLastUpdate():  ?\DateTimeInterface
	{
		return $this->last_update;
	}

	public function setLastUpdate(\DateTimeInterface $last_update) : self
	{
		$this->last_update = $last_update;
		return $this;
	}

	public function getLastUpdater():  ?int
	{
		return $this->last_updater;
	}

	public function setLastUpdater(int $last_updater) : self
	{
		$this->last_updater = $last_updater;
		return $this;
	}


}