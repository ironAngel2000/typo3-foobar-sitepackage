<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsAddInfosFiltersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsAddInfosFiltersRepository::class)]
#[ORM\Table(name: "shops_add_infos_filters")]
class ShopsAddInfosFilters
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_add_infos_filters_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $shops_add_infos_filters_table = null;

	 #[ORM\Column(length: 64)]
	private ?string $shops_add_infos_filters_key = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsAddInfosFiltersId():  ?int
	{
		return $this->shops_add_infos_filters_id;
	}

	public function setShopsAddInfosFiltersId(int $shops_add_infos_filters_id) : self
	{
		$this->shops_add_infos_filters_id = $shops_add_infos_filters_id;
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

	public function getShopsAddInfosFiltersTable():  ?string
	{
		return $this->shops_add_infos_filters_table;
	}

	public function setShopsAddInfosFiltersTable(string $shops_add_infos_filters_table) : self
	{
		$this->shops_add_infos_filters_table = $shops_add_infos_filters_table;
		return $this;
	}

	public function getShopsAddInfosFiltersKey():  ?string
	{
		return $this->shops_add_infos_filters_key;
	}

	public function setShopsAddInfosFiltersKey(string $shops_add_infos_filters_key) : self
	{
		$this->shops_add_infos_filters_key = $shops_add_infos_filters_key;
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