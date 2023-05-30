<?php

namespace App\Entity\Tax;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Tax\TaxRatesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TaxRatesRepository::class)]
#[ORM\Table(name: "tax_rates")]
class TaxRates
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $tax_rates_id = null;

	#[ORM\Column]
	private ?int $tax_categories_id = null;

	#[ORM\Column]
	private ?int $countries_id = null;

	#[ORM\Column]
	private ?float $tax_rate = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getTaxRatesId():  ?int
	{
		return $this->tax_rates_id;
	}

	public function setTaxRatesId(int $tax_rates_id) : self
	{
		$this->tax_rates_id = $tax_rates_id;
		return $this;
	}

	public function getTaxCategoriesId():  ?int
	{
		return $this->tax_categories_id;
	}

	public function setTaxCategoriesId(int $tax_categories_id) : self
	{
		$this->tax_categories_id = $tax_categories_id;
		return $this;
	}

	public function getCountriesId():  ?int
	{
		return $this->countries_id;
	}

	public function setCountriesId(int $countries_id) : self
	{
		$this->countries_id = $countries_id;
		return $this;
	}

	public function getTaxRate():  ?float
	{
		return $this->tax_rate;
	}

	public function setTaxRate(float $tax_rate) : self
	{
		$this->tax_rate = $tax_rate;
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