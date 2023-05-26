<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfLockedGuisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfLockedGuisRepository::class)]
#[ORM\Table(name: "bf_locked_guis")]
class BfLockedGuis
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_locked_guis_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $locked_gui = null;

	#[ORM\Column]
	private ?int $locked_id = null;

	#[ORM\Column]
	private ?int $bf_users_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_action_date = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfLockedGuisId():  ?int
	{
		return $this->bf_locked_guis_id;
	}

	public function setBfLockedGuisId(int $bf_locked_guis_id) : self
	{
		$this->bf_locked_guis_id = $bf_locked_guis_id;
		return $this;
	}

	public function getLockedGui():  ?string
	{
		return $this->locked_gui;
	}

	public function setLockedGui(string $locked_gui) : self
	{
		$this->locked_gui = $locked_gui;
		return $this;
	}

	public function getLockedId():  ?int
	{
		return $this->locked_id;
	}

	public function setLockedId(int $locked_id) : self
	{
		$this->locked_id = $locked_id;
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

	public function getLastActionDate():  ?\DateTimeInterface
	{
		return $this->last_action_date;
	}

	public function setLastActionDate(\DateTimeInterface $last_action_date) : self
	{
		$this->last_action_date = $last_action_date;
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