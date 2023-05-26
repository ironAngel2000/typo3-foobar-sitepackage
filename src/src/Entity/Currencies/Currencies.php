<?php

namespace App\Entity\Currencies;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Currencies\CurrenciesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: CurrenciesRepository::class)]
#[ORM\Table(name: "currencies")]
class Currencies
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $currencies_id = null;

	#[ORM\Column]
	private ?string $exchange_rate = null;

	#[ORM\Column]
	private ?string $default_is_net = null;

	 #[ORM\Column(length: 32)]
	private ?string $currencies_name = null;

	 #[ORM\Column(length: 32)]
	private ?string $currencies_code = null;

	 #[ORM\Column(length: 8)]
	private ?string $currencies_symbol = null;

	 #[ORM\Column(length: 8)]
	private ?string $html_entity = null;

	#[ORM\Column]
	private ?string $decimal_point = null;

	#[ORM\Column]
	private ?string $thousands_point = null;

	 #[ORM\Column(length: 2)]
	private ?string $decimal_places = null;

	#[ORM\Column]
	private ?string $symbol_position = null;

	#[ORM\Column]
	private ?string $currencies_iso_code = null;

	#[ORM\Column(nullable: true)]
	private ?int $sort = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getCurrenciesId():  ?int
	{
		return $this->currencies_id;
	}

	public function setCurrenciesId(int $currencies_id) : self
	{
		$this->currencies_id = $currencies_id;
		return $this;
	}

	public function getExchangeRate():  ?string
	{
		return $this->exchange_rate;
	}

	public function setExchangeRate(string $exchange_rate) : self
	{
		$this->exchange_rate = $exchange_rate;
		return $this;
	}

	public function getDefaultIsNet():  ?string
	{
		return $this->default_is_net;
	}

	public function setDefaultIsNet(string $default_is_net) : self
	{
		$this->default_is_net = $default_is_net;
		return $this;
	}

	public function getCurrenciesName():  ?string
	{
		return $this->currencies_name;
	}

	public function setCurrenciesName(string $currencies_name) : self
	{
		$this->currencies_name = $currencies_name;
		return $this;
	}

	public function getCurrenciesCode():  ?string
	{
		return $this->currencies_code;
	}

	public function setCurrenciesCode(string $currencies_code) : self
	{
		$this->currencies_code = $currencies_code;
		return $this;
	}

	public function getCurrenciesSymbol():  ?string
	{
		return $this->currencies_symbol;
	}

	public function setCurrenciesSymbol(string $currencies_symbol) : self
	{
		$this->currencies_symbol = $currencies_symbol;
		return $this;
	}

	public function getHtmlEntity():  ?string
	{
		return $this->html_entity;
	}

	public function setHtmlEntity(string $html_entity) : self
	{
		$this->html_entity = $html_entity;
		return $this;
	}

	public function getDecimalPoint():  ?string
	{
		return $this->decimal_point;
	}

	public function setDecimalPoint(string $decimal_point) : self
	{
		$this->decimal_point = $decimal_point;
		return $this;
	}

	public function getThousandsPoint():  ?string
	{
		return $this->thousands_point;
	}

	public function setThousandsPoint(string $thousands_point) : self
	{
		$this->thousands_point = $thousands_point;
		return $this;
	}

	public function getDecimalPlaces():  ?string
	{
		return $this->decimal_places;
	}

	public function setDecimalPlaces(string $decimal_places) : self
	{
		$this->decimal_places = $decimal_places;
		return $this;
	}

	public function getSymbolPosition():  ?string
	{
		return $this->symbol_position;
	}

	public function setSymbolPosition(string $symbol_position) : self
	{
		$this->symbol_position = $symbol_position;
		return $this;
	}

	public function getCurrenciesIsoCode():  ?string
	{
		return $this->currencies_iso_code;
	}

	public function setCurrenciesIsoCode(string $currencies_iso_code) : self
	{
		$this->currencies_iso_code = $currencies_iso_code;
		return $this;
	}

	public function getSort():  ?int
	{
		return $this->sort;
	}

	public function setSort(int $sort) : self
	{
		$this->sort = $sort;
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