<?php

namespace App\Entity\Payment;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Payment\PaymentProvidersStatesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: PaymentProvidersStatesRepository::class)]
#[ORM\Table(name: "payment_providers_states")]
class PaymentProvidersStates
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $payment_providers_states_id = null;

	#[ORM\Column]
	private ?int $orders_id = null;

	#[ORM\Column]
	private ?string $auth = null;

	#[ORM\Column]
	private ?string $cap = null;

	#[ORM\Column]
	private ?string $capTax = null;

	#[ORM\Column]
	private ?string $credit = null;

	#[ORM\Column]
	private ?string $creditTax = null;

	#[ORM\Column]
	private ?string $cancelled = null;

	#[ORM\Column]
	private ?string $cancelledTax = null;

	#[ORM\Column]
	private ?string $credited_by_coupons = null;

	#[ORM\Column]
	private ?string $credited_by_credit = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getPaymentProvidersStatesId():  ?int
	{
		return $this->payment_providers_states_id;
	}

	public function setPaymentProvidersStatesId(int $payment_providers_states_id) : self
	{
		$this->payment_providers_states_id = $payment_providers_states_id;
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

	public function getAuth():  ?string
	{
		return $this->auth;
	}

	public function setAuth(string $auth) : self
	{
		$this->auth = $auth;
		return $this;
	}

	public function getCap():  ?string
	{
		return $this->cap;
	}

	public function setCap(string $cap) : self
	{
		$this->cap = $cap;
		return $this;
	}

	public function getCapTax():  ?string
	{
		return $this->capTax;
	}

	public function setCapTax(string $capTax) : self
	{
		$this->capTax = $capTax;
		return $this;
	}

	public function getCredit():  ?string
	{
		return $this->credit;
	}

	public function setCredit(string $credit) : self
	{
		$this->credit = $credit;
		return $this;
	}

	public function getCreditTax():  ?string
	{
		return $this->creditTax;
	}

	public function setCreditTax(string $creditTax) : self
	{
		$this->creditTax = $creditTax;
		return $this;
	}

	public function getCancelled():  ?string
	{
		return $this->cancelled;
	}

	public function setCancelled(string $cancelled) : self
	{
		$this->cancelled = $cancelled;
		return $this;
	}

	public function getCancelledTax():  ?string
	{
		return $this->cancelledTax;
	}

	public function setCancelledTax(string $cancelledTax) : self
	{
		$this->cancelledTax = $cancelledTax;
		return $this;
	}

	public function getCreditedByCoupons():  ?string
	{
		return $this->credited_by_coupons;
	}

	public function setCreditedByCoupons(string $credited_by_coupons) : self
	{
		$this->credited_by_coupons = $credited_by_coupons;
		return $this;
	}

	public function getCreditedByCredit():  ?string
	{
		return $this->credited_by_credit;
	}

	public function setCreditedByCredit(string $credited_by_credit) : self
	{
		$this->credited_by_credit = $credited_by_credit;
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