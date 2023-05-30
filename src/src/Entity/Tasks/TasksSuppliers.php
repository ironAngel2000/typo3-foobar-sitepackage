<?php

namespace App\Entity\Tasks;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Tasks\TasksSuppliersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TasksSuppliersRepository::class)]
#[ORM\Table(name: "tasks_suppliers")]
class TasksSuppliers
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $tasks_suppliers_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $tasks_suppliers_code = null;

	#[ORM\Column]
	private ?int $tasks_suppliers_active = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getTasksSuppliersId():  ?int
	{
		return $this->tasks_suppliers_id;
	}

	public function setTasksSuppliersId(int $tasks_suppliers_id) : self
	{
		$this->tasks_suppliers_id = $tasks_suppliers_id;
		return $this;
	}

	public function getTasksSuppliersCode():  ?string
	{
		return $this->tasks_suppliers_code;
	}

	public function setTasksSuppliersCode(string $tasks_suppliers_code) : self
	{
		$this->tasks_suppliers_code = $tasks_suppliers_code;
		return $this;
	}

	public function getTasksSuppliersActive():  ?int
	{
		return $this->tasks_suppliers_active;
	}

	public function setTasksSuppliersActive(int $tasks_suppliers_active) : self
	{
		$this->tasks_suppliers_active = $tasks_suppliers_active;
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