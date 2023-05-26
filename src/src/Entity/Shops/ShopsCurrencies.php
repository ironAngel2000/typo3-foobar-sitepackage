<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsCurrenciesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsCurrenciesRepository::class)]
#[ORM\Table(name: "shops_currencies")]
class ShopsCurrencies
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_currencies_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column]
	private ?int $currencies_id = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $extern_shops_currencies_id = null;

	#[ORM\Column]
	private ?string $main_currency = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsCurrenciesId():  ?int
	{
		return $this->shops_currencies_id;
	}

	public function setShopsCurrenciesId(int $shops_currencies_id) : self
	{
		$this->shops_currencies_id = $shops_currencies_id;
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

	public function getCurrenciesId():  ?int
	{
		return $this->currencies_id;
	}

	public function setCurrenciesId(int $currencies_id) : self
	{
		$this->currencies_id = $currencies_id;
		return $this;
	}

	public function getExternShopsCurrenciesId():  ?string
	{
		return $this->extern_shops_currencies_id;
	}

	public function setExternShopsCurrenciesId(string $extern_shops_currencies_id) : self
	{
		$this->extern_shops_currencies_id = $extern_shops_currencies_id;
		return $this;
	}

	public function getMainCurrency():  ?string
	{
		return $this->main_currency;
	}

	public function setMainCurrency(string $main_currency) : self
	{
		$this->main_currency = $main_currency;
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