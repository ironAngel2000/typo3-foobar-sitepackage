<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsTypesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsTypesRepository::class)]
#[ORM\Table(name: "erp_systems_types")]
class ErpSystemsTypes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_types_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $erp_systems_types_name = null;

	#[ORM\Column]
	private ?string $erp_systems_types_code = null;

	 #[ORM\Column(length: 64)]
	private ?string $erp_systems_module_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsTypesId():  ?int
	{
		return $this->erp_systems_types_id;
	}

	public function setErpSystemsTypesId(int $erp_systems_types_id) : self
	{
		$this->erp_systems_types_id = $erp_systems_types_id;
		return $this;
	}

	public function getErpSystemsTypesName():  ?string
	{
		return $this->erp_systems_types_name;
	}

	public function setErpSystemsTypesName(string $erp_systems_types_name) : self
	{
		$this->erp_systems_types_name = $erp_systems_types_name;
		return $this;
	}

	public function getErpSystemsTypesCode():  ?string
	{
		return $this->erp_systems_types_code;
	}

	public function setErpSystemsTypesCode(string $erp_systems_types_code) : self
	{
		$this->erp_systems_types_code = $erp_systems_types_code;
		return $this;
	}

	public function getErpSystemsModuleName():  ?string
	{
		return $this->erp_systems_module_name;
	}

	public function setErpSystemsModuleName(string $erp_systems_module_name) : self
	{
		$this->erp_systems_module_name = $erp_systems_module_name;
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