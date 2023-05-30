<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsRepository::class)]
#[ORM\Table(name: "erp_systems")]
class ErpSystems
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $extern_erp_systems_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $erp_systems_name = null;

	#[ORM\Column]
	private ?int $erp_systems_types_id = null;

	#[ORM\Column]
	private ?int $erp_systems_visible = null;

	#[ORM\Column]
	private ?int $sort_order = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsId():  ?int
	{
		return $this->erp_systems_id;
	}

	public function setErpSystemsId(int $erp_systems_id) : self
	{
		$this->erp_systems_id = $erp_systems_id;
		return $this;
	}

	public function getExternErpSystemsId():  ?string
	{
		return $this->extern_erp_systems_id;
	}

	public function setExternErpSystemsId(string $extern_erp_systems_id) : self
	{
		$this->extern_erp_systems_id = $extern_erp_systems_id;
		return $this;
	}

	public function getErpSystemsName():  ?string
	{
		return $this->erp_systems_name;
	}

	public function setErpSystemsName(string $erp_systems_name) : self
	{
		$this->erp_systems_name = $erp_systems_name;
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

	public function getErpSystemsVisible():  ?int
	{
		return $this->erp_systems_visible;
	}

	public function setErpSystemsVisible(int $erp_systems_visible) : self
	{
		$this->erp_systems_visible = $erp_systems_visible;
		return $this;
	}

	public function getSortOrder():  ?int
	{
		return $this->sort_order;
	}

	public function setSortOrder(int $sort_order) : self
	{
		$this->sort_order = $sort_order;
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