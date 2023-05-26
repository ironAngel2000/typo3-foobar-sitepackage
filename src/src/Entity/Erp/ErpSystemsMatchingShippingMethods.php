<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsMatchingShippingMethodsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsMatchingShippingMethodsRepository::class)]
#[ORM\Table(name: "erp_systems_matching_shipping_methods")]
class ErpSystemsMatchingShippingMethods
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_matching_shipping_methods_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	#[ORM\Column]
	private ?int $shipping_methods_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $erp_shipping_methods = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsMatchingShippingMethodsId():  ?int
	{
		return $this->erp_systems_matching_shipping_methods_id;
	}

	public function setErpSystemsMatchingShippingMethodsId(int $erp_systems_matching_shipping_methods_id) : self
	{
		$this->erp_systems_matching_shipping_methods_id = $erp_systems_matching_shipping_methods_id;
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

	public function getShippingMethodsId():  ?int
	{
		return $this->shipping_methods_id;
	}

	public function setShippingMethodsId(int $shipping_methods_id) : self
	{
		$this->shipping_methods_id = $shipping_methods_id;
		return $this;
	}

	public function getErpShippingMethods():  ?string
	{
		return $this->erp_shipping_methods;
	}

	public function setErpShippingMethods(string $erp_shipping_methods) : self
	{
		$this->erp_shipping_methods = $erp_shipping_methods;
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