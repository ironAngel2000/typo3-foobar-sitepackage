<?php

namespace App\Entity\Suppliers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Suppliers\SuppliersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SuppliersRepository::class)]
#[ORM\Table(name: "suppliers")]
class Suppliers
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $suppliers_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $extern_suppliers_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $suppliers_number = null;

	 #[ORM\Column(length: 128)]
	private ?string $suppliers_name = null;

	 #[ORM\Column(length: 64)]
	private ?string $suppliers_customer_number = null;

	 #[ORM\Column(length: 128)]
	private ?string $suppliers_street = null;

	 #[ORM\Column(length: 32)]
	private ?string $suppliers_zip = null;

	 #[ORM\Column(length: 64)]
	private ?string $suppliers_city = null;

	#[ORM\Column(nullable: true)]
	private ?int $countries_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $suppliers_phone = null;

	 #[ORM\Column(length: 64)]
	private ?string $suppliers_fax = null;

	 #[ORM\Column(length: 128)]
	private ?string $suppliers_email = null;

	 #[ORM\Column(length: 128)]
	private ?string $suppliers_email_orders = null;

	 #[ORM\Column(length: 128)]
	private ?string $suppliers_url = null;

	 #[ORM\Column(length: 128)]
	private ?string $suppliers_image = null;

	#[ORM\Column]
	private ?int $suppliers_tasks_active = null;

	#[ORM\Column]
	private ?int $com_type = null;

	#[ORM\Column]
	private ?int $tax_categories_id = null;

	#[ORM\Column]
	private ?int $connection = null;

	 #[ORM\Column(length: 32)]
	private ?string $connection_code = null;

	#[ORM\Column]
	private ?int $connection_active = null;

	#[ORM\Column]
	private ?int $connection_call_advice = null;

	#[ORM\Column]
	private ?int $connection_expand_search_selection_spaces = null;

	#[ORM\Column]
	private ?string $connection_default_model_year = null;

	#[ORM\Column]
	private ?int $connection_available_calculation_active = null;

	#[ORM\Column]
	private ?int $connection_available_stock_level = null;

	#[ORM\Column]
	private ?float $bill_discount = null;

	#[ORM\Column]
	private ?int $currencies_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $stock_locations_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $if_no_suppliers_stock_delivery_times_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $if_suppliers_stock_delivery_times_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getSuppliersId():  ?int
	{
		return $this->suppliers_id;
	}

	public function setSuppliersId(int $suppliers_id) : self
	{
		$this->suppliers_id = $suppliers_id;
		return $this;
	}

	public function getExternSuppliersId():  ?string
	{
		return $this->extern_suppliers_id;
	}

	public function setExternSuppliersId(string $extern_suppliers_id) : self
	{
		$this->extern_suppliers_id = $extern_suppliers_id;
		return $this;
	}

	public function getSuppliersNumber():  ?int
	{
		return $this->suppliers_number;
	}

	public function setSuppliersNumber(int $suppliers_number) : self
	{
		$this->suppliers_number = $suppliers_number;
		return $this;
	}

	public function getSuppliersName():  ?string
	{
		return $this->suppliers_name;
	}

	public function setSuppliersName(string $suppliers_name) : self
	{
		$this->suppliers_name = $suppliers_name;
		return $this;
	}

	public function getSuppliersCustomerNumber():  ?string
	{
		return $this->suppliers_customer_number;
	}

	public function setSuppliersCustomerNumber(string $suppliers_customer_number) : self
	{
		$this->suppliers_customer_number = $suppliers_customer_number;
		return $this;
	}

	public function getSuppliersStreet():  ?string
	{
		return $this->suppliers_street;
	}

	public function setSuppliersStreet(string $suppliers_street) : self
	{
		$this->suppliers_street = $suppliers_street;
		return $this;
	}

	public function getSuppliersZip():  ?string
	{
		return $this->suppliers_zip;
	}

	public function setSuppliersZip(string $suppliers_zip) : self
	{
		$this->suppliers_zip = $suppliers_zip;
		return $this;
	}

	public function getSuppliersCity():  ?string
	{
		return $this->suppliers_city;
	}

	public function setSuppliersCity(string $suppliers_city) : self
	{
		$this->suppliers_city = $suppliers_city;
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

	public function getSuppliersPhone():  ?string
	{
		return $this->suppliers_phone;
	}

	public function setSuppliersPhone(string $suppliers_phone) : self
	{
		$this->suppliers_phone = $suppliers_phone;
		return $this;
	}

	public function getSuppliersFax():  ?string
	{
		return $this->suppliers_fax;
	}

	public function setSuppliersFax(string $suppliers_fax) : self
	{
		$this->suppliers_fax = $suppliers_fax;
		return $this;
	}

	public function getSuppliersEmail():  ?string
	{
		return $this->suppliers_email;
	}

	public function setSuppliersEmail(string $suppliers_email) : self
	{
		$this->suppliers_email = $suppliers_email;
		return $this;
	}

	public function getSuppliersEmailOrders():  ?string
	{
		return $this->suppliers_email_orders;
	}

	public function setSuppliersEmailOrders(string $suppliers_email_orders) : self
	{
		$this->suppliers_email_orders = $suppliers_email_orders;
		return $this;
	}

	public function getSuppliersUrl():  ?string
	{
		return $this->suppliers_url;
	}

	public function setSuppliersUrl(string $suppliers_url) : self
	{
		$this->suppliers_url = $suppliers_url;
		return $this;
	}

	public function getSuppliersImage():  ?string
	{
		return $this->suppliers_image;
	}

	public function setSuppliersImage(string $suppliers_image) : self
	{
		$this->suppliers_image = $suppliers_image;
		return $this;
	}

	public function getSuppliersTasksActive():  ?int
	{
		return $this->suppliers_tasks_active;
	}

	public function setSuppliersTasksActive(int $suppliers_tasks_active) : self
	{
		$this->suppliers_tasks_active = $suppliers_tasks_active;
		return $this;
	}

	public function getComType():  ?int
	{
		return $this->com_type;
	}

	public function setComType(int $com_type) : self
	{
		$this->com_type = $com_type;
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

	public function getConnection():  ?int
	{
		return $this->connection;
	}

	public function setConnection(int $connection) : self
	{
		$this->connection = $connection;
		return $this;
	}

	public function getConnectionCode():  ?string
	{
		return $this->connection_code;
	}

	public function setConnectionCode(string $connection_code) : self
	{
		$this->connection_code = $connection_code;
		return $this;
	}

	public function getConnectionActive():  ?int
	{
		return $this->connection_active;
	}

	public function setConnectionActive(int $connection_active) : self
	{
		$this->connection_active = $connection_active;
		return $this;
	}

	public function getConnectionCallAdvice():  ?int
	{
		return $this->connection_call_advice;
	}

	public function setConnectionCallAdvice(int $connection_call_advice) : self
	{
		$this->connection_call_advice = $connection_call_advice;
		return $this;
	}

	public function getConnectionExpandSearchSelectionSpaces():  ?int
	{
		return $this->connection_expand_search_selection_spaces;
	}

	public function setConnectionExpandSearchSelectionSpaces(int $connection_expand_search_selection_spaces) : self
	{
		$this->connection_expand_search_selection_spaces = $connection_expand_search_selection_spaces;
		return $this;
	}

	public function getConnectionDefaultModelYear():  ?string
	{
		return $this->connection_default_model_year;
	}

	public function setConnectionDefaultModelYear(string $connection_default_model_year) : self
	{
		$this->connection_default_model_year = $connection_default_model_year;
		return $this;
	}

	public function getConnectionAvailableCalculationActive():  ?int
	{
		return $this->connection_available_calculation_active;
	}

	public function setConnectionAvailableCalculationActive(int $connection_available_calculation_active) : self
	{
		$this->connection_available_calculation_active = $connection_available_calculation_active;
		return $this;
	}

	public function getConnectionAvailableStockLevel():  ?int
	{
		return $this->connection_available_stock_level;
	}

	public function setConnectionAvailableStockLevel(int $connection_available_stock_level) : self
	{
		$this->connection_available_stock_level = $connection_available_stock_level;
		return $this;
	}

	public function getBillDiscount():  ?float
	{
		return $this->bill_discount;
	}

	public function setBillDiscount(float $bill_discount) : self
	{
		$this->bill_discount = $bill_discount;
		return $this;
	}

	public function getCurrenciesId():  ?int
	{
		return $this->currencies_id;
	}

	public function setCurrenciesId(int $currencies_id) : self
	{
		$this->currencies_id = $currencies_id;
		return $this;
	}

	public function getStockLocationsId():  ?int
	{
		return $this->stock_locations_id;
	}

	public function setStockLocationsId(int $stock_locations_id) : self
	{
		$this->stock_locations_id = $stock_locations_id;
		return $this;
	}

	public function getIfNoSuppliersStockDeliveryTimesId():  ?int
	{
		return $this->if_no_suppliers_stock_delivery_times_id;
	}

	public function setIfNoSuppliersStockDeliveryTimesId(int $if_no_suppliers_stock_delivery_times_id) : self
	{
		$this->if_no_suppliers_stock_delivery_times_id = $if_no_suppliers_stock_delivery_times_id;
		return $this;
	}

	public function getIfSuppliersStockDeliveryTimesId():  ?int
	{
		return $this->if_suppliers_stock_delivery_times_id;
	}

	public function setIfSuppliersStockDeliveryTimesId(int $if_suppliers_stock_delivery_times_id) : self
	{
		$this->if_suppliers_stock_delivery_times_id = $if_suppliers_stock_delivery_times_id;
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