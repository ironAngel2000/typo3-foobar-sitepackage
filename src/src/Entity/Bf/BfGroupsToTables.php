<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfGroupsToTablesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfGroupsToTablesRepository::class)]
#[ORM\Table(name: "bf_groups_to_tables")]
class BfGroupsToTables
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_groups_to_tables_id = null;

	#[ORM\Column]
	private ?int $bf_groups_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $tables_names = null;

	#[ORM\Column(nullable: true)]
	private ?int $tables_names_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfGroupsToTablesId():  ?int
	{
		return $this->bf_groups_to_tables_id;
	}

	public function setBfGroupsToTablesId(int $bf_groups_to_tables_id) : self
	{
		$this->bf_groups_to_tables_id = $bf_groups_to_tables_id;
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

	public function getTablesNames():  ?string
	{
		return $this->tables_names;
	}

	public function setTablesNames(string $tables_names) : self
	{
		$this->tables_names = $tables_names;
		return $this;
	}

	public function getTablesNamesId():  ?int
	{
		return $this->tables_names_id;
	}

	public function setTablesNamesId(int $tables_names_id) : self
	{
		$this->tables_names_id = $tables_names_id;
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