<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfClientsInfoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfClientsInfoRepository::class)]
#[ORM\Table(name: "bf_clients_info")]
class BfClientsInfo
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_clients_info_id = null;

	#[ORM\Column]
	private ?int $bf_clients_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $info_key = null;

	#[ORM\Column(nullable: true)]
	private ?string $info_value = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfClientsInfoId():  ?int
	{
		return $this->bf_clients_info_id;
	}

	public function setBfClientsInfoId(int $bf_clients_info_id) : self
	{
		$this->bf_clients_info_id = $bf_clients_info_id;
		return $this;
	}

	public function getBfClientsId():  ?int
	{
		return $this->bf_clients_id;
	}

	public function setBfClientsId(int $bf_clients_id) : self
	{
		$this->bf_clients_id = $bf_clients_id;
		return $this;
	}

	public function getInfoKey():  ?string
	{
		return $this->info_key;
	}

	public function setInfoKey(string $info_key) : self
	{
		$this->info_key = $info_key;
		return $this;
	}

	public function getInfoValue():  ?string
	{
		return $this->info_value;
	}

	public function setInfoValue(string $info_value) : self
	{
		$this->info_value = $info_value;
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