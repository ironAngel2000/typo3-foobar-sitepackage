<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersCreditsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersCreditsRepository::class)]
#[ORM\Table(name: "orders_credits")]
class OrdersCredits
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_credits_id = null;

	#[ORM\Column]
	private ?int $orders_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $payment_providers_requests_id = null;

	#[ORM\Column]
	private ?float $amount_credited_calculated = null;

	#[ORM\Column]
	private ?float $amount_credited_transferred = null;

	#[ORM\Column]
	private ?int $currencies_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersCreditsId():  ?int
	{
		return $this->orders_credits_id;
	}

	public function setOrdersCreditsId(int $orders_credits_id) : self
	{
		$this->orders_credits_id = $orders_credits_id;
		return $this;
	}

	public function getOrdersId():  ?int
	{
		return $this->orders_id;
	}

	public function setOrdersId(int $orders_id) : self
	{
		$this->orders_id = $orders_id;
		return $this;
	}

	public function getPaymentProvidersRequestsId():  ?int
	{
		return $this->payment_providers_requests_id;
	}

	public function setPaymentProvidersRequestsId(int $payment_providers_requests_id) : self
	{
		$this->payment_providers_requests_id = $payment_providers_requests_id;
		return $this;
	}

	public function getAmountCreditedCalculated():  ?float
	{
		return $this->amount_credited_calculated;
	}

	public function setAmountCreditedCalculated(float $amount_credited_calculated) : self
	{
		$this->amount_credited_calculated = $amount_credited_calculated;
		return $this;
	}

	public function getAmountCreditedTransferred():  ?float
	{
		return $this->amount_credited_transferred;
	}

	public function setAmountCreditedTransferred(float $amount_credited_transferred) : self
	{
		$this->amount_credited_transferred = $amount_credited_transferred;
		return $this;
	}

	public function getCurrenciesId():  ?int
	{
		return $this->currencies_id;
	}

	public function setCurrenciesId(int $currencies_id) : self
	{
		$this->currencies_id = $currencies_id;
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