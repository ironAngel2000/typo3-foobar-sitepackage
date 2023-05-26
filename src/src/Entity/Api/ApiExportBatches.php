<?php

namespace App\Entity\Api;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Api\ApiExportBatchesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ApiExportBatchesRepository::class)]
#[ORM\Table(name: "api_export_batches")]
class ApiExportBatches
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $api_export_batches_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	 #[ORM\Column(length: 128)]
	private ?string $type = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_started = null;

	 #[ORM\Column(length: 128)]
	private ?string $check_url = null;

	 #[ORM\Column(length: 128)]
	private ?string $message = null;

	 #[ORM\Column(length: 128)]
	private ?string $status = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getApiExportBatchesId():  ?int
	{
		return $this->api_export_batches_id;
	}

	public function setApiExportBatchesId(int $api_export_batches_id) : self
	{
		$this->api_export_batches_id = $api_export_batches_id;
		return $this;
	}

	public function getShopsId():  ?int
	{
		return $this->shops_id;
	}

	public function setShopsId(int $shops_id) : self
	{
		$this->shops_id = $shops_id;
		return $this;
	}

	public function getType():  ?string
	{
		return $this->type;
	}

	public function setType(string $type) : self
	{
		$this->type = $type;
		return $this;
	}

	public function getDateStarted():  ?\DateTimeInterface
	{
		return $this->date_started;
	}

	public function setDateStarted(\DateTimeInterface $date_started) : self
	{
		$this->date_started = $date_started;
		return $this;
	}

	public function getCheckUrl():  ?string
	{
		return $this->check_url;
	}

	public function setCheckUrl(string $check_url) : self
	{
		$this->check_url = $check_url;
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

	public function getStatus():  ?string
	{
		return $this->status;
	}

	public function setStatus(string $status) : self
	{
		$this->status = $status;
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