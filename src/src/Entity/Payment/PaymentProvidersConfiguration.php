<?php

namespace App\Entity\Payment;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Payment\PaymentProvidersConfigurationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: PaymentProvidersConfigurationRepository::class)]
#[ORM\Table(name: "payment_providers_configuration")]
class PaymentProvidersConfiguration
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $payment_providers_configuration_id = null;

	#[ORM\Column]
	private ?int $payment_providers_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $payment_providers_configuration_key = null;

	#[ORM\Column(nullable: true)]
	private ?string $payment_providers_configuration_value = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getPaymentProvidersConfigurationId():  ?int
	{
		return $this->payment_providers_configuration_id;
	}

	public function setPaymentProvidersConfigurationId(int $payment_providers_configuration_id) : self
	{
		$this->payment_providers_configuration_id = $payment_providers_configuration_id;
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

	public function getPaymentProvidersConfigurationKey():  ?string
	{
		return $this->payment_providers_configuration_key;
	}

	public function setPaymentProvidersConfigurationKey(string $payment_providers_configuration_key) : self
	{
		$this->payment_providers_configuration_key = $payment_providers_configuration_key;
		return $this;
	}

	public function getPaymentProvidersConfigurationValue():  ?string
	{
		return $this->payment_providers_configuration_value;
	}

	public function setPaymentProvidersConfigurationValue(string $payment_providers_configuration_value) : self
	{
		$this->payment_providers_configuration_value = $payment_providers_configuration_value;
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