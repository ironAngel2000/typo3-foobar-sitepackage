<?php

namespace App\Entity\Payment;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Payment\PaymentProvidersResponsesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: PaymentProvidersResponsesRepository::class)]
#[ORM\Table(name: "payment_providers_responses")]
class PaymentProvidersResponses
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $payment_providers_responses_id = null;

	#[ORM\Column]
	private ?int $payment_providers_requests_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getPaymentProvidersResponsesId():  ?int
	{
		return $this->payment_providers_responses_id;
	}

	public function setPaymentProvidersResponsesId(int $payment_providers_responses_id) : self
	{
		$this->payment_providers_responses_id = $payment_providers_responses_id;
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