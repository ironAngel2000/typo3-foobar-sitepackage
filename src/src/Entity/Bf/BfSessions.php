<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfSessionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfSessionsRepository::class)]
#[ORM\Table(name: "bf_sessions")]
class BfSessions
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	 #[ORM\Column(length: 32)]
	private ?string $bf_sessions_id = null;

	 #[ORM\Column(length: 32)]
	private ?string $session_name = null;

	#[ORM\Column]
	private ?int $bf_users_id = null;

	#[ORM\Column]
	private ?int $timestamp = null;

	#[ORM\Column(type: Types::BLOB, nullable: true)]
	private $data = null;

	 #[ORM\Column(length: 39)]
	private ?string $ip_lock = null;

	#[ORM\Column]
	private ?int $hash_lock = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfSessionsId():  ?string
	{
		return $this->bf_sessions_id;
	}

	public function setBfSessionsId(string $bf_sessions_id) : self
	{
		$this->bf_sessions_id = $bf_sessions_id;
		return $this;
	}

	public function getSessionName():  ?string
	{
		return $this->session_name;
	}

	public function setSessionName(string $session_name) : self
	{
		$this->session_name = $session_name;
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

	public function getTimestamp():  ?int
	{
		return $this->timestamp;
	}

	public function setTimestamp(int $timestamp) : self
	{
		$this->timestamp = $timestamp;
		return $this;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setData($data) : self
	{
		$this->data = $data;
		return $this;
	}

	public function getIpLock():  ?string
	{
		return $this->ip_lock;
	}

	public function setIpLock(string $ip_lock) : self
	{
		$this->ip_lock = $ip_lock;
		return $this;
	}

	public function getHashLock():  ?int
	{
		return $this->hash_lock;
	}

	public function setHashLock(int $hash_lock) : self
	{
		$this->hash_lock = $hash_lock;
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