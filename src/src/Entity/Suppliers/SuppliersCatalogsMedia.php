<?php

namespace App\Entity\Suppliers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Suppliers\SuppliersCatalogsMediaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SuppliersCatalogsMediaRepository::class)]
#[ORM\Table(name: "suppliers_catalogs_media")]
class SuppliersCatalogsMedia
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $suppliers_catalogs_media_id = null;

	#[ORM\Column]
	private ?int $suppliers_catalogs_id = null;

	#[ORM\Column]
	private ?int $suppliers_catalogs_matching_media_types_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $media_name = null;

	 #[ORM\Column(length: 255)]
	private ?string $source_uri = null;

	#[ORM\Column(nullable: true)]
	private ?string $status = null;

	#[ORM\Column]
	private ?int $sort_order = null;

	#[ORM\Column]
	private ?string $main_media = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column]
	private ?int $last_updater = null;

	public function getSuppliersCatalogsMediaId():  ?int
	{
		return $this->suppliers_catalogs_media_id;
	}

	public function setSuppliersCatalogsMediaId(int $suppliers_catalogs_media_id) : self
	{
		$this->suppliers_catalogs_media_id = $suppliers_catalogs_media_id;
		return $this;
	}

	public function getSuppliersCatalogsId():  ?int
	{
		return $this->suppliers_catalogs_id;
	}

	public function setSuppliersCatalogsId(int $suppliers_catalogs_id) : self
	{
		$this->suppliers_catalogs_id = $suppliers_catalogs_id;
		return $this;
	}

	public function getSuppliersCatalogsMatchingMediaTypesId():  ?int
	{
		return $this->suppliers_catalogs_matching_media_types_id;
	}

	public function setSuppliersCatalogsMatchingMediaTypesId(int $suppliers_catalogs_matching_media_types_id) : self
	{
		$this->suppliers_catalogs_matching_media_types_id = $suppliers_catalogs_matching_media_types_id;
		return $this;
	}

	public function getMediaName():  ?string
	{
		return $this->media_name;
	}

	public function setMediaName(string $media_name) : self
	{
		$this->media_name = $media_name;
		return $this;
	}

	public function getSourceUri():  ?string
	{
		return $this->source_uri;
	}

	public function setSourceUri(string $source_uri) : self
	{
		$this->source_uri = $source_uri;
		return $this;
	}

	public function getStatus():  ?string
	{
		return $this->status;
	}

	public function setStatus(string $status) : self
	{
		$this->status = $status;
		return $this;
	}

	public function getSortOrder():  ?int
	{
		return $this->sort_order;
	}

	public function setSortOrder(int $sort_order) : self
	{
		$this->sort_order = $sort_order;
		return $this;
	}

	public function getMainMedia():  ?string
	{
		return $this->main_media;
	}

	public function setMainMedia(string $main_media) : self
	{
		$this->main_media = $main_media;
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