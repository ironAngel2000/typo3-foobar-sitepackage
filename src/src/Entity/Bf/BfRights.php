<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfRightsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfRightsRepository::class)]
#[ORM\Table(name: "bf_rights")]
class BfRights
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_rights_id = null;

	#[ORM\Column]
	private ?int $bf_groups_id = null;

	#[ORM\Column(length: 30, nullable: true)]
	private ?string $module = null;

	#[ORM\Column(length: 30, nullable: true)]
	private ?string $controller = null;

	#[ORM\Column(length: 30, nullable: true)]
	private ?string $action = null;

	#[ORM\Column(length: 30, nullable: true)]
	private ?string $privilege = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfRightsId():  ?int
	{
		return $this->bf_rights_id;
	}

	public function setBfRightsId(int $bf_rights_id) : self
	{
		$this->bf_rights_id = $bf_rights_id;
		return $this;
	}

	public function getBfGroupsId():  ?int
	{
		return $this->bf_groups_id;
	}

	public function setBfGroupsId(int $bf_groups_id) : self
	{
		$this->bf_groups_id = $bf_groups_id;
		return $this;
	}

	public function getModule():  ?string
	{
		return $this->module;
	}

	public function setModule(string $module) : self
	{
		$this->module = $module;
		return $this;
	}

	public function getController():  ?string
	{
		return $this->controller;
	}

	public function setController(string $controller) : self
	{
		$this->controller = $controller;
		return $this;
	}

	public function getAction():  ?string
	{
		return $this->action;
	}

	public function setAction(string $action) : self
	{
		$this->action = $action;
		return $this;
	}

	public function getPrivilege():  ?string
	{
		return $this->privilege;
	}

	public function setPrivilege(string $privilege) : self
	{
		$this->privilege = $privilege;
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