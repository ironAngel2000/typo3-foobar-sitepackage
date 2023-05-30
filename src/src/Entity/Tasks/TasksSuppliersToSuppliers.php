<?php

namespace App\Entity\Tasks;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Tasks\TasksSuppliersToSuppliersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TasksSuppliersToSuppliersRepository::class)]
#[ORM\Table(name: "tasks_suppliers_to_suppliers")]
class TasksSuppliersToSuppliers
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $tasks_suppliers_to_suppliers_id = null;

	#[ORM\Column]
	private ?int $tasks_suppliers_id = null;

	#[ORM\Column]
	private ?int $suppliers_id = null;

	#[ORM\Column]
	private ?int $tasks_suppliers_to_suppliers_active = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $data_date = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getTasksSuppliersToSuppliersId():  ?int
	{
		return $this->tasks_suppliers_to_suppliers_id;
	}

	public function setTasksSuppliersToSuppliersId(int $tasks_suppliers_to_suppliers_id) : self
	{
		$this->tasks_suppliers_to_suppliers_id = $tasks_suppliers_to_suppliers_id;
		return $this;
	}

	public function getTasksSuppliersId():  ?int
	{
		return $this->tasks_suppliers_id;
	}

	public function setTasksSuppliersId(int $tasks_suppliers_id) : self
	{
		$this->tasks_suppliers_id = $tasks_suppliers_id;
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

	public function getTasksSuppliersToSuppliersActive():  ?int
	{
		return $this->tasks_suppliers_to_suppliers_active;
	}

	public function setTasksSuppliersToSuppliersActive(int $tasks_suppliers_to_suppliers_active) : self
	{
		$this->tasks_suppliers_to_suppliers_active = $tasks_suppliers_to_suppliers_active;
		return $this;
	}

	public function getDataDate():  ?\DateTimeInterface
	{
		return $this->data_date;
	}

	public function setDataDate(\DateTimeInterface $data_date) : self
	{
		$this->data_date = $data_date;
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