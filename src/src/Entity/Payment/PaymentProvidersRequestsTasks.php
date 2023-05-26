<?php

namespace App\Entity\Payment;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Payment\PaymentProvidersRequestsTasksRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: PaymentProvidersRequestsTasksRepository::class)]
#[ORM\Table(name: "payment_providers_requests_tasks")]
class PaymentProvidersRequestsTasks
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $payment_providers_requests_tasks_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $payment_providers_requests_tasks_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getPaymentProvidersRequestsTasksId():  ?int
	{
		return $this->payment_providers_requests_tasks_id;
	}

	public function setPaymentProvidersRequestsTasksId(int $payment_providers_requests_tasks_id) : self
	{
		$this->payment_providers_requests_tasks_id = $payment_providers_requests_tasks_id;
		return $this;
	}

	public function getPaymentProvidersRequestsTasksCode():  ?string
	{
		return $this->payment_providers_requests_tasks_code;
	}

	public function setPaymentProvidersRequestsTasksCode(string $payment_providers_requests_tasks_code) : self
	{
		$this->payment_providers_requests_tasks_code = $payment_providers_requests_tasks_code;
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