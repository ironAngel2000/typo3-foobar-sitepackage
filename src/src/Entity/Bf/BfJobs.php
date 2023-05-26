<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfJobsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfJobsRepository::class)]
#[ORM\Table(name: "bf_jobs")]
class BfJobs
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_jobs_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $module = null;

	 #[ORM\Column(length: 50)]
	private ?string $controller = null;

	 #[ORM\Column(length: 50)]
	private ?string $action = null;

	#[ORM\Column]
	private ?string $params = null;

	 #[ORM\Column(length: 50)]
	private ?string $status = null;

	#[ORM\Column(nullable: true)]
	private ?string $data = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfJobsId():  ?int
	{
		return $this->bf_jobs_id;
	}

	public function setBfJobsId(int $bf_jobs_id) : self
	{
		$this->bf_jobs_id = $bf_jobs_id;
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

	public function getParams():  ?string
	{
		return $this->params;
	}

	public function setParams(string $params) : self
	{
		$this->params = $params;
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

	public function getData():  ?string
	{
		return $this->data;
	}

	public function setData(string $data) : self
	{
		$this->data = $data;
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