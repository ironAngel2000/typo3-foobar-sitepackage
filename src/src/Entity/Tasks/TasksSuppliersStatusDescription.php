<?php

namespace App\Entity\Tasks;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Tasks\TasksSuppliersStatusDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TasksSuppliersStatusDescriptionRepository::class)]
#[ORM\Table(name: "tasks_suppliers_status_description")]
class TasksSuppliersStatusDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $tasks_suppliers_status_description_id = null;

	#[ORM\Column]
	private ?int $tasks_suppliers_status_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $tasts_suppliers_status_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getTasksSuppliersStatusDescriptionId():  ?int
	{
		return $this->tasks_suppliers_status_description_id;
	}

	public function setTasksSuppliersStatusDescriptionId(int $tasks_suppliers_status_description_id) : self
	{
		$this->tasks_suppliers_status_description_id = $tasks_suppliers_status_description_id;
		return $this;
	}

	public function getTasksSuppliersStatusId():  ?int
	{
		return $this->tasks_suppliers_status_id;
	}

	public function setTasksSuppliersStatusId(int $tasks_suppliers_status_id) : self
	{
		$this->tasks_suppliers_status_id = $tasks_suppliers_status_id;
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

	public function getTastsSuppliersStatusName():  ?string
	{
		return $this->tasts_suppliers_status_name;
	}

	public function setTastsSuppliersStatusName(string $tasts_suppliers_status_name) : self
	{
		$this->tasts_suppliers_status_name = $tasts_suppliers_status_name;
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