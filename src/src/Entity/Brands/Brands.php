<?php

namespace App\Entity\Brands;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Brands\BrandsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BrandsRepository::class)]
#[ORM\Table(name: "brands")]
class Brands
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $brands_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $extern_brands_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $brands_name = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $brands_image = null;

	#[ORM\Column(nullable: true)]
	private ?int $countries_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBrandsId():  ?int
	{
		return $this->brands_id;
	}

	public function setBrandsId(int $brands_id) : self
	{
		$this->brands_id = $brands_id;
		return $this;
	}

	public function getExternBrandsId():  ?string
	{
		return $this->extern_brands_id;
	}

	public function setExternBrandsId(string $extern_brands_id) : self
	{
		$this->extern_brands_id = $extern_brands_id;
		return $this;
	}

	public function getBrandsName():  ?string
	{
		return $this->brands_name;
	}

	public function setBrandsName(string $brands_name) : self
	{
		$this->brands_name = $brands_name;
		return $this;
	}

	public function getBrandsImage():  ?string
	{
		return $this->brands_image;
	}

	public function setBrandsImage(string $brands_image) : self
	{
		$this->brands_image = $brands_image;
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