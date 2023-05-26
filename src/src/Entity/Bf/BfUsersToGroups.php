<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfUsersToGroupsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfUsersToGroupsRepository::class)]
#[ORM\Table(name: "bf_users_to_groups")]
class BfUsersToGroups
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_users_to_groups_id = null;

	#[ORM\Column]
	private ?int $bf_users_id = null;

	#[ORM\Column]
	private ?int $bf_groups_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfUsersToGroupsId():  ?int
	{
		return $this->bf_users_to_groups_id;
	}

	public function setBfUsersToGroupsId(int $bf_users_to_groups_id) : self
	{
		$this->bf_users_to_groups_id = $bf_users_to_groups_id;
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

	public function getBfGroupsId():  ?int
	{
		return $this->bf_groups_id;
	}

	public function setBfGroupsId(int $bf_groups_id) : self
	{
		$this->bf_groups_id = $bf_groups_id;
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