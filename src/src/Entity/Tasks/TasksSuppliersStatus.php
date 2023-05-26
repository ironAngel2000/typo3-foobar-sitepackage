<?php

namespace App\Entity\Tasks;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Tasks\TasksSuppliersStatusRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TasksSuppliersStatusRepository::class)]
#[ORM\Table(name: "tasks_suppliers_status")]
class TasksSuppliersStatus
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $tasks_suppliers_status_id = null;

	 #[ORM\Column(length: 16)]
	private ?string $tasks_suppliers_status_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getTasksSuppliersStatusId():  ?int
	{
		return $this->tasks_suppliers_status_id;
	}

	public function setTasksSuppliersStatusId(int $tasks_suppliers_status_id) : self
	{
		$this->tasks_suppliers_status_id = $tasks_suppliers_status_id;
		return $this;
	}

	public function getTasksSuppliersStatusCode():  ?string
	{
		return $this->tasks_suppliers_status_code;
	}

	public function setTasksSuppliersStatusCode(string $tasks_suppliers_status_code) : self
	{
		$this->tasks_suppliers_status_code = $tasks_suppliers_status_code;
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