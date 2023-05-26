<?php

namespace App\Entity\Coupons;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Coupons\CouponsGroupsDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: CouponsGroupsDescriptionRepository::class)]
#[ORM\Table(name: "coupons_groups_description")]
class CouponsGroupsDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $coupons_groups_description_id = null;

	#[ORM\Column]
	private ?int $coupons_groups_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $coupons_groups_name = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $coupons_groups_description = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getCouponsGroupsDescriptionId():  ?int
	{
		return $this->coupons_groups_description_id;
	}

	public function setCouponsGroupsDescriptionId(int $coupons_groups_description_id) : self
	{
		$this->coupons_groups_description_id = $coupons_groups_description_id;
		return $this;
	}

	public function getCouponsGroupsId():  ?int
	{
		return $this->coupons_groups_id;
	}

	public function setCouponsGroupsId(int $coupons_groups_id) : self
	{
		$this->coupons_groups_id = $coupons_groups_id;
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

	public function getCouponsGroupsName():  ?string
	{
		return $this->coupons_groups_name;
	}

	public function setCouponsGroupsName(string $coupons_groups_name) : self
	{
		$this->coupons_groups_name = $coupons_groups_name;
		return $this;
	}

	public function getCouponsGroupsDescription():  ?string
	{
		return $this->coupons_groups_description;
	}

	public function setCouponsGroupsDescription(string $coupons_groups_description) : self
	{
		$this->coupons_groups_description = $coupons_groups_description;
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