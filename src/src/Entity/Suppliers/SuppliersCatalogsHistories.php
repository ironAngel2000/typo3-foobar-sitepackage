<?php

namespace App\Entity\Suppliers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Suppliers\SuppliersCatalogsHistoriesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SuppliersCatalogsHistoriesRepository::class)]
#[ORM\Table(name: "suppliers_catalogs_histories")]
class SuppliersCatalogsHistories
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $suppliers_catalogs_histories_id = null;

	#[ORM\Column]
	private ?int $suppliers_catalogs_id = null;

	 #[ORM\Column(length: 100)]
	private ?string $history_name = null;

	 #[ORM\Column(length: 100)]
	private ?string $history_value_old = null;

	 #[ORM\Column(length: 100)]
	private ?string $history_value_new = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column]
	private ?int $last_updater = null;

	public function getSuppliersCatalogsHistoriesId():  ?int
	{
		return $this->suppliers_catalogs_histories_id;
	}

	public function setSuppliersCatalogsHistoriesId(int $suppliers_catalogs_histories_id) : self
	{
		$this->suppliers_catalogs_histories_id = $suppliers_catalogs_histories_id;
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

	public function getHistoryName():  ?string
	{
		return $this->history_name;
	}

	public function setHistoryName(string $history_name) : self
	{
		$this->history_name = $history_name;
		return $this;
	}

	public function getHistoryValueOld():  ?string
	{
		return $this->history_value_old;
	}

	public function setHistoryValueOld(string $history_value_old) : self
	{
		$this->history_value_old = $history_value_old;
		return $this;
	}

	public function getHistoryValueNew():  ?string
	{
		return $this->history_value_new;
	}

	public function setHistoryValueNew(string $history_value_new) : self
	{
		$this->history_value_new = $history_value_new;
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