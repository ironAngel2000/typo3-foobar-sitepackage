<?php

namespace App\Entity\Groups;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Groups\GroupsDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: GroupsDescriptionRepository::class)]
#[ORM\Table(name: "groups_description")]
class GroupsDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $groups_description_id = null;

	#[ORM\Column]
	private ?int $groups_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	#[ORM\Column(length: 128, nullable: true)]
	private ?string $groups_name = null;

	#[ORM\Column(nullable: true)]
	private ?string $groups_description = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getGroupsDescriptionId():  ?int
	{
		return $this->groups_description_id;
	}

	public function setGroupsDescriptionId(int $groups_description_id) : self
	{
		$this->groups_description_id = $groups_description_id;
		return $this;
	}

	public function getGroupsId():  ?int
	{
		return $this->groups_id;
	}

	public function setGroupsId(int $groups_id) : self
	{
		$this->groups_id = $groups_id;
		return $this;
	}

	public function getLanguagesId():  ?int
	{
		return $this->languages_id;
	}

	public function setLanguagesId(int $languages_id) : self
	{
		$this->languages_id = $languages_id;
		return $this;
	}

	public function getGroupsName():  ?string
	{
		return $this->groups_name;
	}

	public function setGroupsName(string $groups_name) : self
	{
		$this->groups_name = $groups_name;
		return $this;
	}

	public function getGroupsDescription():  ?string
	{
		return $this->groups_description;
	}

	public function setGroupsDescription(string $groups_description) : self
	{
		$this->groups_description = $groups_description;
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