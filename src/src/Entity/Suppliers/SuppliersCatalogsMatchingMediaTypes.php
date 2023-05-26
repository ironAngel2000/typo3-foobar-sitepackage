<?php

namespace App\Entity\Suppliers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Suppliers\SuppliersCatalogsMatchingMediaTypesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SuppliersCatalogsMatchingMediaTypesRepository::class)]
#[ORM\Table(name: "suppliers_catalogs_matching_media_types")]
class SuppliersCatalogsMatchingMediaTypes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $suppliers_catalogs_matching_media_types_id = null;

	#[ORM\Column]
	private ?int $suppliers_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $media_types_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $suppliers_media_types_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getSuppliersCatalogsMatchingMediaTypesId():  ?int
	{
		return $this->suppliers_catalogs_matching_media_types_id;
	}

	public function setSuppliersCatalogsMatchingMediaTypesId(int $suppliers_catalogs_matching_media_types_id) : self
	{
		$this->suppliers_catalogs_matching_media_types_id = $suppliers_catalogs_matching_media_types_id;
		return $this;
	}

	public function getSuppliersId():  ?int
	{
		return $this->suppliers_id;
	}

	public function setSuppliersId(int $suppliers_id) : self
	{
		$this->suppliers_id = $suppliers_id;
		return $this;
	}

	public function getMediaTypesId():  ?int
	{
		return $this->media_types_id;
	}

	public function setMediaTypesId(int $media_types_id) : self
	{
		$this->media_types_id = $media_types_id;
		return $this;
	}

	public function getSuppliersMediaTypesCode():  ?string
	{
		return $this->suppliers_media_types_code;
	}

	public function setSuppliersMediaTypesCode(string $suppliers_media_types_code) : self
	{
		$this->suppliers_media_types_code = $suppliers_media_types_code;
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