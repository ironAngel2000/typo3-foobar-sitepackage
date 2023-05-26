<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsMatchingPaymentMethodsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsMatchingPaymentMethodsRepository::class)]
#[ORM\Table(name: "erp_systems_matching_payment_methods")]
class ErpSystemsMatchingPaymentMethods
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_matching_payment_methods_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	#[ORM\Column]
	private ?int $payment_methods_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $erp_payment_methods = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $erp_payment_methods_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsMatchingPaymentMethodsId():  ?int
	{
		return $this->erp_systems_matching_payment_methods_id;
	}

	public function setErpSystemsMatchingPaymentMethodsId(int $erp_systems_matching_payment_methods_id) : self
	{
		$this->erp_systems_matching_payment_methods_id = $erp_systems_matching_payment_methods_id;
		return $this;
	}

	public function getErpSystemsId():  ?int
	{
		return $this->erp_systems_id;
	}

	public function setErpSystemsId(int $erp_systems_id) : self
	{
		$this->erp_systems_id = $erp_systems_id;
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

	public function getErpPaymentMethods():  ?string
	{
		return $this->erp_payment_methods;
	}

	public function setErpPaymentMethods(string $erp_payment_methods) : self
	{
		$this->erp_payment_methods = $erp_payment_methods;
		return $this;
	}

	public function getErpPaymentMethodsCode():  ?string
	{
		return $this->erp_payment_methods_code;
	}

	public function setErpPaymentMethodsCode(string $erp_payment_methods_code) : self
	{
		$this->erp_payment_methods_code = $erp_payment_methods_code;
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