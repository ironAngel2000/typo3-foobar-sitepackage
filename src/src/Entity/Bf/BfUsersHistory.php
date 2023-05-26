<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfUsersHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfUsersHistoryRepository::class)]
#[ORM\Table(name: "bf_users_history")]
class BfUsersHistory
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_users_history_id = null;

	#[ORM\Column]
	private ?int $bf_users_id = null;

	#[ORM\Column]
	private ?string $active = null;

	#[ORM\Column]
	private ?string $enable_login = null;

	#[ORM\Column]
	private ?string $enable_get_login = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfUsersHistoryId():  ?int
	{
		return $this->bf_users_history_id;
	}

	public function setBfUsersHistoryId(int $bf_users_history_id) : self
	{
		$this->bf_users_history_id = $bf_users_history_id;
		return $this;
	}

	public function getBfUsersId():  ?int
	{
		return $this->bf_users_id;
	}

	public function setBfUsersId(int $bf_users_id) : self
	{
		$this->bf_users_id = $bf_users_id;
		return $this;
	}

	public function getActive():  ?string
	{
		return $this->active;
	}

	public function setActive(string $active) : self
	{
		$this->active = $active;
		return $this;
	}

	public function getEnableLogin():  ?string
	{
		return $this->enable_login;
	}

	public function setEnableLogin(string $enable_login) : self
	{
		$this->enable_login = $enable_login;
		return $this;
	}

	public function getEnableGetLogin():  ?string
	{
		return $this->enable_get_login;
	}

	public function setEnableGetLogin(string $enable_get_login) : self
	{
		$this->enable_get_login = $enable_get_login;
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