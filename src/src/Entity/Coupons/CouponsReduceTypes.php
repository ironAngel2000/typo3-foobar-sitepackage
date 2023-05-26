<?php

namespace App\Entity\Coupons;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Coupons\CouponsReduceTypesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: CouponsReduceTypesRepository::class)]
#[ORM\Table(name: "coupons_reduce_types")]
class CouponsReduceTypes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $coupons_reduce_types_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $reduce_code = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $coupons_reduce_types_description = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getCouponsReduceTypesId():  ?int
	{
		return $this->coupons_reduce_types_id;
	}

	public function setCouponsReduceTypesId(int $coupons_reduce_types_id) : self
	{
		$this->coupons_reduce_types_id = $coupons_reduce_types_id;
		return $this;
	}

	public function getReduceCode():  ?string
	{
		return $this->reduce_code;
	}

	public function setReduceCode(string $reduce_code) : self
	{
		$this->reduce_code = $reduce_code;
		return $this;
	}

	public function getCouponsReduceTypesDescription():  ?string
	{
		return $this->coupons_reduce_types_description;
	}

	public function setCouponsReduceTypesDescription(string $coupons_reduce_types_description) : self
	{
		$this->coupons_reduce_types_description = $coupons_reduce_types_description;
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