<?php

namespace App\Entity\Tasks;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Tasks\TasksSuppliersToSuppliersSchedulesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TasksSuppliersToSuppliersSchedulesRepository::class)]
#[ORM\Table(name: "tasks_suppliers_to_suppliers_schedules")]
class TasksSuppliersToSuppliersSchedules
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $tasks_suppliers_to_suppliers_schedules_id = null;

	#[ORM\Column]
	private ?int $tasks_suppliers_to_suppliers_id = null;

	#[ORM\Column]
	private ?int $tasks_suppliers_to_suppliers_schedules_active = null;

	#[ORM\Column]
	private ?int $scheduled_weekday = null;

	#[ORM\Column]
	private ?string $scheduled_time = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getTasksSuppliersToSuppliersSchedulesId():  ?int
	{
		return $this->tasks_suppliers_to_suppliers_schedules_id;
	}

	public function setTasksSuppliersToSuppliersSchedulesId(int $tasks_suppliers_to_suppliers_schedules_id) : self
	{
		$this->tasks_suppliers_to_suppliers_schedules_id = $tasks_suppliers_to_suppliers_schedules_id;
		return $this;
	}

	public function getTasksSuppliersToSuppliersId():  ?int
	{
		return $this->tasks_suppliers_to_suppliers_id;
	}

	public function setTasksSuppliersToSuppliersId(int $tasks_suppliers_to_suppliers_id) : self
	{
		$this->tasks_suppliers_to_suppliers_id = $tasks_suppliers_to_suppliers_id;
		return $this;
	}

	public function getTasksSuppliersToSuppliersSchedulesActive():  ?int
	{
		return $this->tasks_suppliers_to_suppliers_schedules_active;
	}

	public function setTasksSuppliersToSuppliersSchedulesActive(int $tasks_suppliers_to_suppliers_schedules_active) : self
	{
		$this->tasks_suppliers_to_suppliers_schedules_active = $tasks_suppliers_to_suppliers_schedules_active;
		return $this;
	}

	public function getScheduledWeekday():  ?int
	{
		return $this->scheduled_weekday;
	}

	public function setScheduledWeekday(int $scheduled_weekday) : self
	{
		$this->scheduled_weekday = $scheduled_weekday;
		return $this;
	}

	public function getScheduledTime():  ?string
	{
		return $this->scheduled_time;
	}

	public function setScheduledTime(string $scheduled_time) : self
	{
		$this->scheduled_time = $scheduled_time;
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