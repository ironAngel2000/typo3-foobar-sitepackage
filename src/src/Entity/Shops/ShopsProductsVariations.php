<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsProductsVariationsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsProductsVariationsRepository::class)]
#[ORM\Table(name: "shops_products_variations")]
class ShopsProductsVariations
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_products_variations_id = null;

	#[ORM\Column]
	private ?int $shops_products_id = null;

	#[ORM\Column]
	private ?int $products_variations_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $extern_shops_products_variations_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $ean = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $uuid = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $extern_sku = null;

	#[ORM\Column]
	private ?string $products_variations_status = null;

	#[ORM\Column]
	private ?string $has_errors = null;

	#[ORM\Column]
	private ?string $to_delete = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $initial_shop_date = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $prices_last_update = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsProductsVariationsId():  ?int
	{
		return $this->shops_products_variations_id;
	}

	public function setShopsProductsVariationsId(int $shops_products_variations_id) : self
	{
		$this->shops_products_variations_id = $shops_products_variations_id;
		return $this;
	}

	public function getShopsProductsId():  ?int
	{
		return $this->shops_products_id;
	}

	public function setShopsProductsId(int $shops_products_id) : self
	{
		$this->shops_products_id = $shops_products_id;
		return $this;
	}

	public function getProductsVariationsId():  ?int
	{
		return $this->products_variations_id;
	}

	public function setProductsVariationsId(int $products_variations_id) : self
	{
		$this->products_variations_id = $products_variations_id;
		return $this;
	}

	public function getExternShopsProductsVariationsId():  ?string
	{
		return $this->extern_shops_products_variations_id;
	}

	public function setExternShopsProductsVariationsId(string $extern_shops_products_variations_id) : self
	{
		$this->extern_shops_products_variations_id = $extern_shops_products_variations_id;
		return $this;
	}

	public function getEan():  ?string
	{
		return $this->ean;
	}

	public function setEan(string $ean) : self
	{
		$this->ean = $ean;
		return $this;
	}

	public function getUuid():  ?string
	{
		return $this->uuid;
	}

	public function setUuid(string $uuid) : self
	{
		$this->uuid = $uuid;
		return $this;
	}

	public function getExternSku():  ?string
	{
		return $this->extern_sku;
	}

	public function setExternSku(string $extern_sku) : self
	{
		$this->extern_sku = $extern_sku;
		return $this;
	}

	public function getProductsVariationsStatus():  ?string
	{
		return $this->products_variations_status;
	}

	public function setProductsVariationsStatus(string $products_variations_status) : self
	{
		$this->products_variations_status = $products_variations_status;
		return $this;
	}

	public function getHasErrors():  ?string
	{
		return $this->has_errors;
	}

	public function setHasErrors(string $has_errors) : self
	{
		$this->has_errors = $has_errors;
		return $this;
	}

	public function getToDelete():  ?string
	{
		return $this->to_delete;
	}

	public function setToDelete(string $to_delete) : self
	{
		$this->to_delete = $to_delete;
		return $this;
	}

	public function getInitialShopDate():  ?\DateTimeInterface
	{
		return $this->initial_shop_date;
	}

	public function setInitialShopDate(\DateTimeInterface $initial_shop_date) : self
	{
		$this->initial_shop_date = $initial_shop_date;
		return $this;
	}

	public function getPricesLastUpdate():  ?\DateTimeInterface
	{
		return $this->prices_last_update;
	}

	public function setPricesLastUpdate(\DateTimeInterface $prices_last_update) : self
	{
		$this->prices_last_update = $prices_last_update;
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