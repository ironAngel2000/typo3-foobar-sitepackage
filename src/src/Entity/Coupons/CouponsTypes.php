<?php

namespace App\Entity\Coupons;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Coupons\CouponsTypesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: CouponsTypesRepository::class)]
#[ORM\Table(name: "coupons_types")]
class CouponsTypes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $coupons_types_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $coupons_types_code = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $coupons_types_description = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getCouponsTypesId():  ?int
	{
		return $this->coupons_types_id;
	}

	public function setCouponsTypesId(int $coupons_types_id) : self
	{
		$this->coupons_types_id = $coupons_types_id;
		return $this;
	}

	public function getCouponsTypesCode():  ?string
	{
		return $this->coupons_types_code;
	}

	public function setCouponsTypesCode(string $coupons_types_code) : self
	{
		$this->coupons_types_code = $coupons_types_code;
		return $this;
	}

	public function getCouponsTypesDescription():  ?string
	{
		return $this->coupons_types_description;
	}

	public function setCouponsTypesDescription(string $coupons_types_description) : self
	{
		$this->coupons_types_description = $coupons_types_description;
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