<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsProductsVariationsOffersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsProductsVariationsOffersRepository::class)]
#[ORM\Table(name: "shops_products_variations_offers")]
class ShopsProductsVariationsOffers
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_products_variations_offers_id = null;

	#[ORM\Column]
	private ?int $shops_products_variations_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $start = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $end = null;

	#[ORM\Column(nullable: true)]
	private ?int $shops_products_variations_offers_types_id = null;

	#[ORM\Column]
	private ?int $lock_active = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $extern_shops_products_variations_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $extern_sku = null;

	#[ORM\Column]
	private ?int $fba_active = null;

	#[ORM\Column]
	private ?int $b2b_active = null;

	#[ORM\Column]
	private ?int $fulfillment_by_marketplace = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsProductsVariationsOffersId():  ?int
	{
		return $this->shops_products_variations_offers_id;
	}

	public function setShopsProductsVariationsOffersId(int $shops_products_variations_offers_id) : self
	{
		$this->shops_products_variations_offers_id = $shops_products_variations_offers_id;
		return $this;
	}

	public function getShopsProductsVariationsId():  ?int
	{
		return $this->shops_products_variations_id;
	}

	public function setShopsProductsVariationsId(int $shops_products_variations_id) : self
	{
		$this->shops_products_variations_id = $shops_products_variations_id;
		return $this;
	}

	public function getStart():  ?\DateTimeInterface
	{
		return $this->start;
	}

	public function setStart(\DateTimeInterface $start) : self
	{
		$this->start = $start;
		return $this;
	}

	public function getEnd():  ?\DateTimeInterface
	{
		return $this->end;
	}

	public function setEnd(\DateTimeInterface $end) : self
	{
		$this->end = $end;
		return $this;
	}

	public function getShopsProductsVariationsOffersTypesId():  ?int
	{
		return $this->shops_products_variations_offers_types_id;
	}

	public function setShopsProductsVariationsOffersTypesId(int $shops_products_variations_offers_types_id) : self
	{
		$this->shops_products_variations_offers_types_id = $shops_products_variations_offers_types_id;
		return $this;
	}

	public function getLockActive():  ?int
	{
		return $this->lock_active;
	}

	public function setLockActive(int $lock_active) : self
	{
		$this->lock_active = $lock_active;
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

	public function getExternSku():  ?string
	{
		return $this->extern_sku;
	}

	public function setExternSku(string $extern_sku) : self
	{
		$this->extern_sku = $extern_sku;
		return $this;
	}

	public function getFbaActive():  ?int
	{
		return $this->fba_active;
	}

	public function setFbaActive(int $fba_active) : self
	{
		$this->fba_active = $fba_active;
		return $this;
	}

	public function getB2bActive():  ?int
	{
		return $this->b2b_active;
	}

	public function setB2bActive(int $b2b_active) : self
	{
		$this->b2b_active = $b2b_active;
		return $this;
	}

	public function getFulfillmentByMarketplace():  ?int
	{
		return $this->fulfillment_by_marketplace;
	}

	public function setFulfillmentByMarketplace(int $fulfillment_by_marketplace) : self
	{
		$this->fulfillment_by_marketplace = $fulfillment_by_marketplace;
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