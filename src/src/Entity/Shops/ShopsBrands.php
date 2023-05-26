<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsBrandsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsBrandsRepository::class)]
#[ORM\Table(name: "shops_brands")]
class ShopsBrands
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_brands_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column]
	private ?int $brands_id = null;

	#[ORM\Column]
	private ?string $shops_brands_status = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $extern_shops_brands_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsBrandsId():  ?int
	{
		return $this->shops_brands_id;
	}

	public function setShopsBrandsId(int $shops_brands_id) : self
	{
		$this->shops_brands_id = $shops_brands_id;
		return $this;
	}

	public function getShopsId():  ?int
	{
		return $this->shops_id;
	}

	public function setShopsId(int $shops_id) : self
	{
		$this->shops_id = $shops_id;
		return $this;
	}

	public function getBrandsId():  ?int
	{
		return $this->brands_id;
	}

	public function setBrandsId(int $brands_id) : self
	{
		$this->brands_id = $brands_id;
		return $this;
	}

	public function getShopsBrandsStatus():  ?string
	{
		return $this->shops_brands_status;
	}

	public function setShopsBrandsStatus(string $shops_brands_status) : self
	{
		$this->shops_brands_status = $shops_brands_status;
		return $this;
	}

	public function getExternShopsBrandsId():  ?string
	{
		return $this->extern_shops_brands_id;
	}

	public function setExternShopsBrandsId(string $extern_shops_brands_id) : self
	{
		$this->extern_shops_brands_id = $extern_shops_brands_id;
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