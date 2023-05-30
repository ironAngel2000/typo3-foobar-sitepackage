<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfScriptLoggerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfScriptLoggerRepository::class)]
#[ORM\Table(name: "bf_script_logger")]
class BfScriptLogger
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_script_logger_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $bf_jobs_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $name = null;

	 #[ORM\Column(length: 50)]
	private ?string $status = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $started_at = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $finished_at = null;

	#[ORM\Column(nullable: true)]
	private ?string $message = null;

	#[ORM\Column(length: 46, nullable: true)]
	private ?string $ip = null;

	#[ORM\Column(nullable: true)]
	private ?float $memory = null;

	#[ORM\Column(nullable: true)]
	private ?int $pid = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfScriptLoggerId():  ?int
	{
		return $this->bf_script_logger_id;
	}

	public function setBfScriptLoggerId(int $bf_script_logger_id) : self
	{
		$this->bf_script_logger_id = $bf_script_logger_id;
		return $this;
	}

	public function getBfJobsId():  ?int
	{
		return $this->bf_jobs_id;
	}

	public function setBfJobsId(int $bf_jobs_id) : self
	{
		$this->bf_jobs_id = $bf_jobs_id;
		return $this;
	}

	public function getName():  ?string
	{
		return $this->name;
	}

	public function setName(string $name) : self
	{
		$this->name = $name;
		return $this;
	}

	public function getStatus():  ?string
	{
		return $this->status;
	}

	public function setStatus(string $status) : self
	{
		$this->status = $status;
		return $this;
	}

	public function getStartedAt():  ?\DateTimeInterface
	{
		return $this->started_at;
	}

	public function setStartedAt(\DateTimeInterface $started_at) : self
	{
		$this->started_at = $started_at;
		return $this;
	}

	public function getFinishedAt():  ?\DateTimeInterface
	{
		return $this->finished_at;
	}

	public function setFinishedAt(\DateTimeInterface $finished_at) : self
	{
		$this->finished_at = $finished_at;
		return $this;
	}

	public function getMessage():  ?string
	{
		return $this->message;
	}

	public function setMessage(string $message) : self
	{
		$this->message = $message;
		return $this;
	}

	public function getIp():  ?string
	{
		return $this->ip;
	}

	public function setIp(string $ip) : self
	{
		$this->ip = $ip;
		return $this;
	}

	public function getMemory():  ?float
	{
		return $this->memory;
	}

	public function setMemory(float $memory) : self
	{
		$this->memory = $memory;
		return $this;
	}

	public function getPid():  ?int
	{
		return $this->pid;
	}

	public function setPid(int $pid) : self
	{
		$this->pid = $pid;
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