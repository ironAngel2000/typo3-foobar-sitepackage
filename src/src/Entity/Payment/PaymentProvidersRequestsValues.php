<?php

namespace App\Entity\Payment;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Payment\PaymentProvidersRequestsValuesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: PaymentProvidersRequestsValuesRepository::class)]
#[ORM\Table(name: "payment_providers_requests_values")]
class PaymentProvidersRequestsValues
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $payment_providers_requests_values_id = null;

	#[ORM\Column]
	private ?int $payment_providers_requests_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $payment_providers_requests_key = null;

	#[ORM\Column(nullable: true)]
	private ?string $payment_providers_requests_value = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getPaymentProvidersRequestsValuesId():  ?int
	{
		return $this->payment_providers_requests_values_id;
	}

	public function setPaymentProvidersRequestsValuesId(int $payment_providers_requests_values_id) : self
	{
		$this->payment_providers_requests_values_id = $payment_providers_requests_values_id;
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

	public function getPaymentProvidersRequestsKey():  ?string
	{
		return $this->payment_providers_requests_key;
	}

	public function setPaymentProvidersRequestsKey(string $payment_providers_requests_key) : self
	{
		$this->payment_providers_requests_key = $payment_providers_requests_key;
		return $this;
	}

	public function getPaymentProvidersRequestsValue():  ?string
	{
		return $this->payment_providers_requests_value;
	}

	public function setPaymentProvidersRequestsValue(string $payment_providers_requests_value) : self
	{
		$this->payment_providers_requests_value = $payment_providers_requests_value;
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