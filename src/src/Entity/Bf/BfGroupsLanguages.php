<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfGroupsLanguagesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfGroupsLanguagesRepository::class)]
#[ORM\Table(name: "bf_groups_languages")]
class BfGroupsLanguages
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_groups_languages_id = null;

	#[ORM\Column]
	private ?int $bf_groups_id = null;

	#[ORM\Column]
	private ?string $languages_code = null;

	 #[ORM\Column(length: 50)]
	private ?string $groups_name = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $groups_description = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfGroupsLanguagesId():  ?int
	{
		return $this->bf_groups_languages_id;
	}

	public function setBfGroupsLanguagesId(int $bf_groups_languages_id) : self
	{
		$this->bf_groups_languages_id = $bf_groups_languages_id;
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

	public function getLanguagesCode():  ?string
	{
		return $this->languages_code;
	}

	public function setLanguagesCode(string $languages_code) : self
	{
		$this->languages_code = $languages_code;
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