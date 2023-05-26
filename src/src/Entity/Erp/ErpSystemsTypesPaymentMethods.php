<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsTypesPaymentMethodsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsTypesPaymentMethodsRepository::class)]
#[ORM\Table(name: "erp_systems_types_payment_methods")]
class ErpSystemsTypesPaymentMethods
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_types_payment_methods_id = null;

	#[ORM\Column]
	private ?int $erp_systems_types_id = null;

	#[ORM\Column]
	private ?int $payment_methods_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $key = null;

	#[ORM\Column(nullable: true)]
	private ?string $value = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsTypesPaymentMethodsId():  ?int
	{
		return $this->erp_systems_types_payment_methods_id;
	}

	public function setErpSystemsTypesPaymentMethodsId(int $erp_systems_types_payment_methods_id) : self
	{
		$this->erp_systems_types_payment_methods_id = $erp_systems_types_payment_methods_id;
		return $this;
	}

	public function getErpSystemsTypesId():  ?int
	{
		return $this->erp_systems_types_id;
	}

	public function setErpSystemsTypesId(int $erp_systems_types_id) : self
	{
		$this->erp_systems_types_id = $erp_systems_types_id;
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

	public function getKey():  ?string
	{
		return $this->key;
	}

	public function setKey(string $key) : self
	{
		$this->key = $key;
		return $this;
	}

	public function getValue():  ?string
	{
		return $this->value;
	}

	public function setValue(string $value) : self
	{
		$this->value = $value;
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