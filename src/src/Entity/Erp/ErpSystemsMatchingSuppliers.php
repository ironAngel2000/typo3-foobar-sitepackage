<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsMatchingSuppliersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsMatchingSuppliersRepository::class)]
#[ORM\Table(name: "erp_systems_matching_suppliers")]
class ErpSystemsMatchingSuppliers
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_matching_suppliers_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	#[ORM\Column]
	private ?int $suppliers_id = null;

	 #[ORM\Column(length: 32)]
	private ?string $erp_suppliers = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsMatchingSuppliersId():  ?int
	{
		return $this->erp_systems_matching_suppliers_id;
	}

	public function setErpSystemsMatchingSuppliersId(int $erp_systems_matching_suppliers_id) : self
	{
		$this->erp_systems_matching_suppliers_id = $erp_systems_matching_suppliers_id;
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

	public function getSuppliersId():  ?int
	{
		return $this->suppliers_id;
	}

	public function setSuppliersId(int $suppliers_id) : self
	{
		$this->suppliers_id = $suppliers_id;
		return $this;
	}

	public function getErpSuppliers():  ?string
	{
		return $this->erp_suppliers;
	}

	public function setErpSuppliers(string $erp_suppliers) : self
	{
		$this->erp_suppliers = $erp_suppliers;
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