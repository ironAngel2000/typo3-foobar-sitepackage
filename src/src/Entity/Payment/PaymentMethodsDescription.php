<?php

namespace App\Entity\Payment;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Payment\PaymentMethodsDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: PaymentMethodsDescriptionRepository::class)]
#[ORM\Table(name: "payment_methods_description")]
class PaymentMethodsDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $payment_methods_description_id = null;

	#[ORM\Column]
	private ?int $payment_methods_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $payment_methods_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getPaymentMethodsDescriptionId():  ?int
	{
		return $this->payment_methods_description_id;
	}

	public function setPaymentMethodsDescriptionId(int $payment_methods_description_id) : self
	{
		$this->payment_methods_description_id = $payment_methods_description_id;
		return $this;
	}

	public function getPaymentMethodsId():  ?int
	{
		return $this->payment_methods_id;
	}

	public function setPaymentMethodsId(int $payment_methods_id) : self
	{
		$this->payment_methods_id = $payment_methods_id;
		return $this;
	}

	public function getLanguagesId():  ?int
	{
		return $this->languages_id;
	}

	public function setLanguagesId(int $languages_id) : self
	{
		$this->languages_id = $languages_id;
		return $this;
	}

	public function getPaymentMethodsName():  ?string
	{
		return $this->payment_methods_name;
	}

	public function setPaymentMethodsName(string $payment_methods_name) : self
	{
		$this->payment_methods_name = $payment_methods_name;
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

	public function getDateInsert():  ?\DateTimeInterface
	{
		return $this->date_insert;
	}

	public function setDateInsert(\DateTimeInterface $date_insert) : self
	{
		$this->date_insert = $date_insert;
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