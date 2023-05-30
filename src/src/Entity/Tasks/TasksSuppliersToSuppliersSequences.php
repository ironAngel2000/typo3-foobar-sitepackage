<?php

namespace App\Entity\Tasks;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Tasks\TasksSuppliersToSuppliersSequencesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TasksSuppliersToSuppliersSequencesRepository::class)]
#[ORM\Table(name: "tasks_suppliers_to_suppliers_sequences")]
class TasksSuppliersToSuppliersSequences
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $tasks_suppliers_to_suppliers_sequences_id = null;

	#[ORM\Column]
	private ?int $tasks_suppliers_to_suppliers_id = null;

	#[ORM\Column]
	private ?int $sequences_weekday = null;

	#[ORM\Column]
	private ?string $sequences_time = null;

	#[ORM\Column(nullable: true)]
	private ?string $sequences_result_description = null;

	#[ORM\Column]
	private ?int $tasks_suppliers_status_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $tasks_started = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $tasks_finished = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getTasksSuppliersToSuppliersSequencesId():  ?int
	{
		return $this->tasks_suppliers_to_suppliers_sequences_id;
	}

	public function setTasksSuppliersToSuppliersSequencesId(int $tasks_suppliers_to_suppliers_sequences_id) : self
	{
		$this->tasks_suppliers_to_suppliers_sequences_id = $tasks_suppliers_to_suppliers_sequences_id;
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

	public function getSequencesWeekday():  ?int
	{
		return $this->sequences_weekday;
	}

	public function setSequencesWeekday(int $sequences_weekday) : self
	{
		$this->sequences_weekday = $sequences_weekday;
		return $this;
	}

	public function getSequencesTime():  ?string
	{
		return $this->sequences_time;
	}

	public function setSequencesTime(string $sequences_time) : self
	{
		$this->sequences_time = $sequences_time;
		return $this;
	}

	public function getSequencesResultDescription():  ?string
	{
		return $this->sequences_result_description;
	}

	public function setSequencesResultDescription(string $sequences_result_description) : self
	{
		$this->sequences_result_description = $sequences_result_description;
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

	public function getTasksStarted():  ?\DateTimeInterface
	{
		return $this->tasks_started;
	}

	public function setTasksStarted(\DateTimeInterface $tasks_started) : self
	{
		$this->tasks_started = $tasks_started;
		return $this;
	}

	public function getTasksFinished():  ?\DateTimeInterface
	{
		return $this->tasks_finished;
	}

	public function setTasksFinished(\DateTimeInterface $tasks_finished) : self
	{
		$this->tasks_finished = $tasks_finished;
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