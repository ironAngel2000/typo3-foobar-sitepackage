<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsTypesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsTypesRepository::class)]
#[ORM\Table(name: "shops_types")]
class ShopsTypes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_types_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $shops_types_name = null;

	#[ORM\Column]
	private ?string $shops_types_code = null;

	#[ORM\Column]
	private ?int $shops_types_marketplace = null;

	 #[ORM\Column(length: 64)]
	private ?string $shops_module_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsTypesId():  ?int
	{
		return $this->shops_types_id;
	}

	public function setShopsTypesId(int $shops_types_id) : self
	{
		$this->shops_types_id = $shops_types_id;
		return $this;
	}

	public function getShopsTypesName():  ?string
	{
		return $this->shops_types_name;
	}

	public function setShopsTypesName(string $shops_types_name) : self
	{
		$this->shops_types_name = $shops_types_name;
		return $this;
	}

	public function getShopsTypesCode():  ?string
	{
		return $this->shops_types_code;
	}

	public function setShopsTypesCode(string $shops_types_code) : self
	{
		$this->shops_types_code = $shops_types_code;
		return $this;
	}

	public function getShopsTypesMarketplace():  ?int
	{
		return $this->shops_types_marketplace;
	}

	public function setShopsTypesMarketplace(int $shops_types_marketplace) : self
	{
		$this->shops_types_marketplace = $shops_types_marketplace;
		return $this;
	}

	public function getShopsModuleName():  ?string
	{
		return $this->shops_module_name;
	}

	public function setShopsModuleName(string $shops_module_name) : self
	{
		$this->shops_module_name = $shops_module_name;
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