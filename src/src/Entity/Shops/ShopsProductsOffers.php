<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsProductsOffersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsProductsOffersRepository::class)]
#[ORM\Table(name: "shops_products_offers")]
class ShopsProductsOffers
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_products_offers_id = null;

	#[ORM\Column]
	private ?int $shops_products_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $start = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $end = null;

	#[ORM\Column]
	private ?int $variations_offer = null;

	#[ORM\Column]
	private ?int $lock_active = null;

	#[ORM\Column]
	private ?int $has_variations = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsProductsOffersId():  ?int
	{
		return $this->shops_products_offers_id;
	}

	public function setShopsProductsOffersId(int $shops_products_offers_id) : self
	{
		$this->shops_products_offers_id = $shops_products_offers_id;
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

	public function getVariationsOffer():  ?int
	{
		return $this->variations_offer;
	}

	public function setVariationsOffer(int $variations_offer) : self
	{
		$this->variations_offer = $variations_offer;
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

	public function getHasVariations():  ?int
	{
		return $this->has_variations;
	}

	public function setHasVariations(int $has_variations) : self
	{
		$this->has_variations = $has_variations;
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