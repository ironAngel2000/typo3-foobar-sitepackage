<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfCronsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfCronsRepository::class)]
#[ORM\Table(name: "bf_crons")]
class BfCrons
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_crons_id = null;

	 #[ORM\Column(length: 16)]
	private ?string $bf_crons_minute = null;

	 #[ORM\Column(length: 16)]
	private ?string $bf_crons_hour = null;

	 #[ORM\Column(length: 16)]
	private ?string $bf_crons_day = null;

	 #[ORM\Column(length: 16)]
	private ?string $bf_crons_weekday = null;

	 #[ORM\Column(length: 16)]
	private ?string $bf_crons_month = null;

	 #[ORM\Column(length: 512)]
	private ?string $bf_crons_command = null;

	#[ORM\Column]
	private ?string $bf_crons_status = null;

	#[ORM\Column(nullable: true)]
	private ?int $is_extern_url = null;

	#[ORM\Column(nullable: true)]
	private ?int $ignore_certification = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $bf_crons_last_run = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $bf_crons_next_run = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfCronsId():  ?int
	{
		return $this->bf_crons_id;
	}

	public function setBfCronsId(int $bf_crons_id) : self
	{
		$this->bf_crons_id = $bf_crons_id;
		return $this;
	}

	public function getBfCronsMinute():  ?string
	{
		return $this->bf_crons_minute;
	}

	public function setBfCronsMinute(string $bf_crons_minute) : self
	{
		$this->bf_crons_minute = $bf_crons_minute;
		return $this;
	}

	public function getBfCronsHour():  ?string
	{
		return $this->bf_crons_hour;
	}

	public function setBfCronsHour(string $bf_crons_hour) : self
	{
		$this->bf_crons_hour = $bf_crons_hour;
		return $this;
	}

	public function getBfCronsDay():  ?string
	{
		return $this->bf_crons_day;
	}

	public function setBfCronsDay(string $bf_crons_day) : self
	{
		$this->bf_crons_day = $bf_crons_day;
		return $this;
	}

	public function getBfCronsWeekday():  ?string
	{
		return $this->bf_crons_weekday;
	}

	public function setBfCronsWeekday(string $bf_crons_weekday) : self
	{
		$this->bf_crons_weekday = $bf_crons_weekday;
		return $this;
	}

	public function getBfCronsMonth():  ?string
	{
		return $this->bf_crons_month;
	}

	public function setBfCronsMonth(string $bf_crons_month) : self
	{
		$this->bf_crons_month = $bf_crons_month;
		return $this;
	}

	public function getBfCronsCommand():  ?string
	{
		return $this->bf_crons_command;
	}

	public function setBfCronsCommand(string $bf_crons_command) : self
	{
		$this->bf_crons_command = $bf_crons_command;
		return $this;
	}

	public function getBfCronsStatus():  ?string
	{
		return $this->bf_crons_status;
	}

	public function setBfCronsStatus(string $bf_crons_status) : self
	{
		$this->bf_crons_status = $bf_crons_status;
		return $this;
	}

	public function getIsExternUrl():  ?int
	{
		return $this->is_extern_url;
	}

	public function setIsExternUrl(int $is_extern_url) : self
	{
		$this->is_extern_url = $is_extern_url;
		return $this;
	}

	public function getIgnoreCertification():  ?int
	{
		return $this->ignore_certification;
	}

	public function setIgnoreCertification(int $ignore_certification) : self
	{
		$this->ignore_certification = $ignore_certification;
		return $this;
	}

	public function getBfCronsLastRun():  ?\DateTimeInterface
	{
		return $this->bf_crons_last_run;
	}

	public function setBfCronsLastRun(\DateTimeInterface $bf_crons_last_run) : self
	{
		$this->bf_crons_last_run = $bf_crons_last_run;
		return $this;
	}

	public function getBfCronsNextRun():  ?\DateTimeInterface
	{
		return $this->bf_crons_next_run;
	}

	public function setBfCronsNextRun(\DateTimeInterface $bf_crons_next_run) : self
	{
		$this->bf_crons_next_run = $bf_crons_next_run;
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