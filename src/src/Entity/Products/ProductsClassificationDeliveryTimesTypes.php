<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsClassificationDeliveryTimesTypesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsClassificationDeliveryTimesTypesRepository::class)]
#[ORM\Table(name: "products_classification_delivery_times_types")]
class ProductsClassificationDeliveryTimesTypes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_classification_delivery_times_types_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $delivery_times_types_code = null;

	#[ORM\Column]
	private ?int $delivery_times_if_no_stock_id = null;

	#[ORM\Column]
	private ?int $delivery_times_if_stock_id = null;

	#[ORM\Column]
	private ?int $delivery_times_if_no_stock_but_third_party_stock_id = null;

	#[ORM\Column]
	private ?int $delivery_times_from_supplier = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsClassificationDeliveryTimesTypesId():  ?int
	{
		return $this->products_classification_delivery_times_types_id;
	}

	public function setProductsClassificationDeliveryTimesTypesId(int $products_classification_delivery_times_types_id) : self
	{
		$this->products_classification_delivery_times_types_id = $products_classification_delivery_times_types_id;
		return $this;
	}

	public function getDeliveryTimesTypesCode():  ?string
	{
		return $this->delivery_times_types_code;
	}

	public function setDeliveryTimesTypesCode(string $delivery_times_types_code) : self
	{
		$this->delivery_times_types_code = $delivery_times_types_code;
		return $this;
	}

	public function getDeliveryTimesIfNoStockId():  ?int
	{
		return $this->delivery_times_if_no_stock_id;
	}

	public function setDeliveryTimesIfNoStockId(int $delivery_times_if_no_stock_id) : self
	{
		$this->delivery_times_if_no_stock_id = $delivery_times_if_no_stock_id;
		return $this;
	}

	public function getDeliveryTimesIfStockId():  ?int
	{
		return $this->delivery_times_if_stock_id;
	}

	public function setDeliveryTimesIfStockId(int $delivery_times_if_stock_id) : self
	{
		$this->delivery_times_if_stock_id = $delivery_times_if_stock_id;
		return $this;
	}

	public function getDeliveryTimesIfNoStockButThirdPartyStockId():  ?int
	{
		return $this->delivery_times_if_no_stock_but_third_party_stock_id;
	}

	public function setDeliveryTimesIfNoStockButThirdPartyStockId(int $delivery_times_if_no_stock_but_third_party_stock_id) : self
	{
		$this->delivery_times_if_no_stock_but_third_party_stock_id = $delivery_times_if_no_stock_but_third_party_stock_id;
		return $this;
	}

	public function getDeliveryTimesFromSupplier():  ?int
	{
		return $this->delivery_times_from_supplier;
	}

	public function setDeliveryTimesFromSupplier(int $delivery_times_from_supplier) : self
	{
		$this->delivery_times_from_supplier = $delivery_times_from_supplier;
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