<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsPriceSchemesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsPriceSchemesRepository::class)]
#[ORM\Table(name: "shops_price_schemes")]
class ShopsPriceSchemes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_price_schemes_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $title = null;

	#[ORM\Column]
	private ?float $smaller10_half1 = null;

	#[ORM\Column]
	private ?float $smaller10_half2 = null;

	#[ORM\Column]
	private ?int $smaller10_precision = null;

	#[ORM\Column]
	private ?float $smaller100_half1 = null;

	#[ORM\Column]
	private ?float $smaller100_half2 = null;

	#[ORM\Column]
	private ?int $smaller100_precision = null;

	#[ORM\Column]
	private ?float $smaller1000_half1 = null;

	#[ORM\Column]
	private ?float $smaller1000_half2 = null;

	#[ORM\Column]
	private ?int $smaller1000_precision = null;

	#[ORM\Column]
	private ?float $bigger1000_half1 = null;

	#[ORM\Column]
	private ?float $bigger1000_half2 = null;

	#[ORM\Column]
	private ?int $bigger1000_precision = null;

	#[ORM\Column]
	private ?int $round_full_values = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsPriceSchemesId():  ?int
	{
		return $this->shops_price_schemes_id;
	}

	public function setShopsPriceSchemesId(int $shops_price_schemes_id) : self
	{
		$this->shops_price_schemes_id = $shops_price_schemes_id;
		return $this;
	}

	public function getTitle():  ?string
	{
		return $this->title;
	}

	public function setTitle(string $title) : self
	{
		$this->title = $title;
		return $this;
	}

	public function getSmaller10Half1():  ?float
	{
		return $this->smaller10_half1;
	}

	public function setSmaller10Half1(float $smaller10_half1) : self
	{
		$this->smaller10_half1 = $smaller10_half1;
		return $this;
	}

	public function getSmaller10Half2():  ?float
	{
		return $this->smaller10_half2;
	}

	public function setSmaller10Half2(float $smaller10_half2) : self
	{
		$this->smaller10_half2 = $smaller10_half2;
		return $this;
	}

	public function getSmaller10Precision():  ?int
	{
		return $this->smaller10_precision;
	}

	public function setSmaller10Precision(int $smaller10_precision) : self
	{
		$this->smaller10_precision = $smaller10_precision;
		return $this;
	}

	public function getSmaller100Half1():  ?float
	{
		return $this->smaller100_half1;
	}

	public function setSmaller100Half1(float $smaller100_half1) : self
	{
		$this->smaller100_half1 = $smaller100_half1;
		return $this;
	}

	public function getSmaller100Half2():  ?float
	{
		return $this->smaller100_half2;
	}

	public function setSmaller100Half2(float $smaller100_half2) : self
	{
		$this->smaller100_half2 = $smaller100_half2;
		return $this;
	}

	public function getSmaller100Precision():  ?int
	{
		return $this->smaller100_precision;
	}

	public function setSmaller100Precision(int $smaller100_precision) : self
	{
		$this->smaller100_precision = $smaller100_precision;
		return $this;
	}

	public function getSmaller1000Half1():  ?float
	{
		return $this->smaller1000_half1;
	}

	public function setSmaller1000Half1(float $smaller1000_half1) : self
	{
		$this->smaller1000_half1 = $smaller1000_half1;
		return $this;
	}

	public function getSmaller1000Half2():  ?float
	{
		return $this->smaller1000_half2;
	}

	public function setSmaller1000Half2(float $smaller1000_half2) : self
	{
		$this->smaller1000_half2 = $smaller1000_half2;
		return $this;
	}

	public function getSmaller1000Precision():  ?int
	{
		return $this->smaller1000_precision;
	}

	public function setSmaller1000Precision(int $smaller1000_precision) : self
	{
		$this->smaller1000_precision = $smaller1000_precision;
		return $this;
	}

	public function getBigger1000Half1():  ?float
	{
		return $this->bigger1000_half1;
	}

	public function setBigger1000Half1(float $bigger1000_half1) : self
	{
		$this->bigger1000_half1 = $bigger1000_half1;
		return $this;
	}

	public function getBigger1000Half2():  ?float
	{
		return $this->bigger1000_half2;
	}

	public function setBigger1000Half2(float $bigger1000_half2) : self
	{
		$this->bigger1000_half2 = $bigger1000_half2;
		return $this;
	}

	public function getBigger1000Precision():  ?int
	{
		return $this->bigger1000_precision;
	}

	public function setBigger1000Precision(int $bigger1000_precision) : self
	{
		$this->bigger1000_precision = $bigger1000_precision;
		return $this;
	}

	public function getRoundFullValues():  ?int
	{
		return $this->round_full_values;
	}

	public function setRoundFullValues(int $round_full_values) : self
	{
		$this->round_full_values = $round_full_values;
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