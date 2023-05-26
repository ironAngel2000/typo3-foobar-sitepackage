<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsGroupsImportsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsGroupsImportsRepository::class)]
#[ORM\Table(name: "erp_systems_groups_imports")]
class ErpSystemsGroupsImports
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_groups_imports_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	#[ORM\Column]
	private ?int $groups_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $groups_hash = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsGroupsImportsId():  ?int
	{
		return $this->erp_systems_groups_imports_id;
	}

	public function setErpSystemsGroupsImportsId(int $erp_systems_groups_imports_id) : self
	{
		$this->erp_systems_groups_imports_id = $erp_systems_groups_imports_id;
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

	public function getGroupsId():  ?int
	{
		return $this->groups_id;
	}

	public function setGroupsId(int $groups_id) : self
	{
		$this->groups_id = $groups_id;
		return $this;
	}

	public function getGroupsHash():  ?string
	{
		return $this->groups_hash;
	}

	public function setGroupsHash(string $groups_hash) : self
	{
		$this->groups_hash = $groups_hash;
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