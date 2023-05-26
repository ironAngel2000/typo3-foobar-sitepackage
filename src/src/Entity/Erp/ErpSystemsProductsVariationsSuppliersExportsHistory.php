<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsProductsVariationsSuppliersExportsHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsProductsVariationsSuppliersExportsHistoryRepository::class)]
#[ORM\Table(name: "erp_systems_products_variations_suppliers_exports_history")]
class ErpSystemsProductsVariationsSuppliersExportsHistory
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_products_variations_suppliers_exports_history_id = null;

	#[ORM\Column]
	private ?int $erp_systems_products_variations_suppliers_exports_id = null;

	 #[ORM\Column(length: 128)]
	private ?string $export_identification_num = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $export_date = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $export_confirmed_date = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsProductsVariationsSuppliersExportsHistoryId():  ?int
	{
		return $this->erp_systems_products_variations_suppliers_exports_history_id;
	}

	public function setErpSystemsProductsVariationsSuppliersExportsHistoryId(int $erp_systems_products_variations_suppliers_exports_history_id) : self
	{
		$this->erp_systems_products_variations_suppliers_exports_history_id = $erp_systems_products_variations_suppliers_exports_history_id;
		return $this;
	}

	public function getErpSystemsProductsVariationsSuppliersExportsId():  ?int
	{
		return $this->erp_systems_products_variations_suppliers_exports_id;
	}

	public function setErpSystemsProductsVariationsSuppliersExportsId(int $erp_systems_products_variations_suppliers_exports_id) : self
	{
		$this->erp_systems_products_variations_suppliers_exports_id = $erp_systems_products_variations_suppliers_exports_id;
		return $this;
	}

	public function getExportIdentificationNum():  ?string
	{
		return $this->export_identification_num;
	}

	public function setExportIdentificationNum(string $export_identification_num) : self
	{
		$this->export_identification_num = $export_identification_num;
		return $this;
	}

	public function getExportDate():  ?\DateTimeInterface
	{
		return $this->export_date;
	}

	public function setExportDate(\DateTimeInterface $export_date) : self
	{
		$this->export_date = $export_date;
		return $this;
	}

	public function getExportConfirmedDate():  ?\DateTimeInterface
	{
		return $this->export_confirmed_date;
	}

	public function setExportConfirmedDate(\DateTimeInterface $export_confirmed_date) : self
	{
		$this->export_confirmed_date = $export_confirmed_date;
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