<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersRepository::class)]
#[ORM\Table(name: "orders")]
class Orders
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $shops_orders_id = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $extern_orders_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $currencies_id = null;

	#[ORM\Column(nullable: true)]
	private ?float $exchange_rate = null;

	#[ORM\Column(nullable: true)]
	private ?int $languages_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $shops_customers_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $extern_customers_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $orders_date = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $delivery_date = null;

	#[ORM\Column]
	private ?int $orders_status_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $orders_payments_status_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $orders_hold_status_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $orders_status_changed = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $orders_payments_status_changed = null;

	#[ORM\Column]
	private ?int $billing_parties_id = null;

	#[ORM\Column]
	private ?int $delivery_parties_id = null;

	#[ORM\Column(length: 15, nullable: true)]
	private ?string $ip_address = null;

	#[ORM\Column(length: 128, nullable: true)]
	private ?string $host_name = null;

	#[ORM\Column(nullable: true)]
	private ?string $customers_remarks = null;

	#[ORM\Column(nullable: true)]
	private ?string $internal_remarks = null;

	#[ORM\Column]
	private ?int $payment_methods_id = null;

	#[ORM\Column]
	private ?float $payment_costs_shop = null;

	#[ORM\Column]
	private ?float $payment_costs_backend = null;

	#[ORM\Column]
	private ?int $shipping_methods_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $shipping_modes_id = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $shipping_vendor = null;

	#[ORM\Column]
	private ?float $shipping_costs_shop = null;

	#[ORM\Column]
	private ?float $shipping_costs_backend = null;

	#[ORM\Column]
	private ?float $shipping_costs_net = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $transport_remarks = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $invoice_nr = null;

	#[ORM\Column(nullable: true)]
	private ?int $total_items = null;

	#[ORM\Column(nullable: true)]
	private ?float $total_amount_shop = null;

	#[ORM\Column(nullable: true)]
	private ?float $total_amount_backend = null;

	#[ORM\Column(nullable: true)]
	private ?float $products_price_gross = null;

	#[ORM\Column(nullable: true)]
	private ?float $products_price_net = null;

	#[ORM\Column(nullable: true)]
	private ?float $total_price_gross = null;

	#[ORM\Column(nullable: true)]
	private ?float $total_price_net = null;

	#[ORM\Column(nullable: true)]
	private ?float $actual_price_gross = null;

	#[ORM\Column(nullable: true)]
	private ?int $merged_orders_id = null;

	#[ORM\Column]
	private ?int $insert_finished = null;

	#[ORM\Column]
	private ?int $anonymized = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersId():  ?int
	{
		return $this->orders_id;
	}

	public function setOrdersId(int $orders_id) : self
	{
		$this->orders_id = $orders_id;
		return $this;
	}

	public function getShopsOrdersId():  ?string
	{
		return $this->shops_orders_id;
	}

	public function setShopsOrdersId(string $shops_orders_id) : self
	{
		$this->shops_orders_id = $shops_orders_id;
		return $this;
	}

	public function getExternOrdersId():  ?string
	{
		return $this->extern_orders_id;
	}

	public function setExternOrdersId(string $extern_orders_id) : self
	{
		$this->extern_orders_id = $extern_orders_id;
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

	public function getCurrenciesId():  ?int
	{
		return $this->currencies_id;
	}

	public function setCurrenciesId(int $currencies_id) : self
	{
		$this->currencies_id = $currencies_id;
		return $this;
	}

	public function getExchangeRate():  ?float
	{
		return $this->exchange_rate;
	}

	public function setExchangeRate(float $exchange_rate) : self
	{
		$this->exchange_rate = $exchange_rate;
		return $this;
	}

	public function getLanguagesId():  ?int
	{
		return $this->languages_id;
	}

	public function setLanguagesId(int $languages_id) : self
	{
		$this->languages_id = $languages_id;
		return $this;
	}

	public function getShopsCustomersId():  ?string
	{
		return $this->shops_customers_id;
	}

	public function setShopsCustomersId(string $shops_customers_id) : self
	{
		$this->shops_customers_id = $shops_customers_id;
		return $this;
	}

	public function getExternCustomersId():  ?string
	{
		return $this->extern_customers_id;
	}

	public function setExternCustomersId(string $extern_customers_id) : self
	{
		$this->extern_customers_id = $extern_customers_id;
		return $this;
	}

	public function getOrdersDate():  ?\DateTimeInterface
	{
		return $this->orders_date;
	}

	public function setOrdersDate(\DateTimeInterface $orders_date) : self
	{
		$this->orders_date = $orders_date;
		return $this;
	}

	public function getDeliveryDate():  ?\DateTimeInterface
	{
		return $this->delivery_date;
	}

	public function setDeliveryDate(\DateTimeInterface $delivery_date) : self
	{
		$this->delivery_date = $delivery_date;
		return $this;
	}

	public function getOrdersStatusId():  ?int
	{
		return $this->orders_status_id;
	}

	public function setOrdersStatusId(int $orders_status_id) : self
	{
		$this->orders_status_id = $orders_status_id;
		return $this;
	}

	public function getOrdersPaymentsStatusId():  ?int
	{
		return $this->orders_payments_status_id;
	}

	public function setOrdersPaymentsStatusId(int $orders_payments_status_id) : self
	{
		$this->orders_payments_status_id = $orders_payments_status_id;
		return $this;
	}

	public function getOrdersHoldStatusId():  ?int
	{
		return $this->orders_hold_status_id;
	}

	public function setOrdersHoldStatusId(int $orders_hold_status_id) : self
	{
		$this->orders_hold_status_id = $orders_hold_status_id;
		return $this;
	}

	public function getOrdersStatusChanged():  ?\DateTimeInterface
	{
		return $this->orders_status_changed;
	}

	public function setOrdersStatusChanged(\DateTimeInterface $orders_status_changed) : self
	{
		$this->orders_status_changed = $orders_status_changed;
		return $this;
	}

	public function getOrdersPaymentsStatusChanged():  ?\DateTimeInterface
	{
		return $this->orders_payments_status_changed;
	}

	public function setOrdersPaymentsStatusChanged(\DateTimeInterface $orders_payments_status_changed) : self
	{
		$this->orders_payments_status_changed = $orders_payments_status_changed;
		return $this;
	}

	public function getBillingPartiesId():  ?int
	{
		return $this->billing_parties_id;
	}

	public function setBillingPartiesId(int $billing_parties_id) : self
	{
		$this->billing_parties_id = $billing_parties_id;
		return $this;
	}

	public function getDeliveryPartiesId():  ?int
	{
		return $this->delivery_parties_id;
	}

	public function setDeliveryPartiesId(int $delivery_parties_id) : self
	{
		$this->delivery_parties_id = $delivery_parties_id;
		return $this;
	}

	public function getIpAddress():  ?string
	{
		return $this->ip_address;
	}

	public function setIpAddress(string $ip_address) : self
	{
		$this->ip_address = $ip_address;
		return $this;
	}

	public function getHostName():  ?string
	{
		return $this->host_name;
	}

	public function setHostName(string $host_name) : self
	{
		$this->host_name = $host_name;
		return $this;
	}

	public function getCustomersRemarks():  ?string
	{
		return $this->customers_remarks;
	}

	public function setCustomersRemarks(string $customers_remarks) : self
	{
		$this->customers_remarks = $customers_remarks;
		return $this;
	}

	public function getInternalRemarks():  ?string
	{
		return $this->internal_remarks;
	}

	public function setInternalRemarks(string $internal_remarks) : self
	{
		$this->internal_remarks = $internal_remarks;
		return $this;
	}

	public function getPaymentMethodsId():  ?int
	{
		return $this->payment_methods_id;
	}

	public function setPaymentMethodsId(int $payment_methods_id) : self
	{
		$this->payment_methods_id = $payment_methods_id;
		return $this;
	}

	public function getPaymentCostsShop():  ?float
	{
		return $this->payment_costs_shop;
	}

	public function setPaymentCostsShop(float $payment_costs_shop) : self
	{
		$this->payment_costs_shop = $payment_costs_shop;
		return $this;
	}

	public function getPaymentCostsBackend():  ?float
	{
		return $this->payment_costs_backend;
	}

	public function setPaymentCostsBackend(float $payment_costs_backend) : self
	{
		$this->payment_costs_backend = $payment_costs_backend;
		return $this;
	}

	public function getShippingMethodsId():  ?int
	{
		return $this->shipping_methods_id;
	}

	public function setShippingMethodsId(int $shipping_methods_id) : self
	{
		$this->shipping_methods_id = $shipping_methods_id;
		return $this;
	}

	public function getShippingModesId():  ?int
	{
		return $this->shipping_modes_id;
	}

	public function setShippingModesId(int $shipping_modes_id) : self
	{
		$this->shipping_modes_id = $shipping_modes_id;
		return $this;
	}

	public function getShippingVendor():  ?string
	{
		return $this->shipping_vendor;
	}

	public function setShippingVendor(string $shipping_vendor) : self
	{
		$this->shipping_vendor = $shipping_vendor;
		return $this;
	}

	public function getShippingCostsShop():  ?float
	{
		return $this->shipping_costs_shop;
	}

	public function setShippingCostsShop(float $shipping_costs_shop) : self
	{
		$this->shipping_costs_shop = $shipping_costs_shop;
		return $this;
	}

	public function getShippingCostsBackend():  ?float
	{
		return $this->shipping_costs_backend;
	}

	public function setShippingCostsBackend(float $shipping_costs_backend) : self
	{
		$this->shipping_costs_backend = $shipping_costs_backend;
		return $this;
	}

	public function getShippingCostsNet():  ?float
	{
		return $this->shipping_costs_net;
	}

	public function setShippingCostsNet(float $shipping_costs_net) : self
	{
		$this->shipping_costs_net = $shipping_costs_net;
		return $this;
	}

	public function getTransportRemarks():  ?string
	{
		return $this->transport_remarks;
	}

	public function setTransportRemarks(string $transport_remarks) : self
	{
		$this->transport_remarks = $transport_remarks;
		return $this;
	}

	public function getInvoiceNr():  ?string
	{
		return $this->invoice_nr;
	}

	public function setInvoiceNr(string $invoice_nr) : self
	{
		$this->invoice_nr = $invoice_nr;
		return $this;
	}

	public function getTotalItems():  ?int
	{
		return $this->total_items;
	}

	public function setTotalItems(int $total_items) : self
	{
		$this->total_items = $total_items;
		return $this;
	}

	public function getTotalAmountShop():  ?float
	{
		return $this->total_amount_shop;
	}

	public function setTotalAmountShop(float $total_amount_shop) : self
	{
		$this->total_amount_shop = $total_amount_shop;
		return $this;
	}

	public function getTotalAmountBackend():  ?float
	{
		return $this->total_amount_backend;
	}

	public function setTotalAmountBackend(float $total_amount_backend) : self
	{
		$this->total_amount_backend = $total_amount_backend;
		return $this;
	}

	public function getProductsPriceGross():  ?float
	{
		return $this->products_price_gross;
	}

	public function setProductsPriceGross(float $products_price_gross) : self
	{
		$this->products_price_gross = $products_price_gross;
		return $this;
	}

	public function getProductsPriceNet():  ?float
	{
		return $this->products_price_net;
	}

	public function setProductsPriceNet(float $products_price_net) : self
	{
		$this->products_price_net = $products_price_net;
		return $this;
	}

	public function getTotalPriceGross():  ?float
	{
		return $this->total_price_gross;
	}

	public function setTotalPriceGross(float $total_price_gross) : self
	{
		$this->total_price_gross = $total_price_gross;
		return $this;
	}

	public function getTotalPriceNet():  ?float
	{
		return $this->total_price_net;
	}

	public function setTotalPriceNet(float $total_price_net) : self
	{
		$this->total_price_net = $total_price_net;
		return $this;
	}

	public function getActualPriceGross():  ?float
	{
		return $this->actual_price_gross;
	}

	public function setActualPriceGross(float $actual_price_gross) : self
	{
		$this->actual_price_gross = $actual_price_gross;
		return $this;
	}

	public function getMergedOrdersId():  ?int
	{
		return $this->merged_orders_id;
	}

	public function setMergedOrdersId(int $merged_orders_id) : self
	{
		$this->merged_orders_id = $merged_orders_id;
		return $this;
	}

	public function getInsertFinished():  ?int
	{
		return $this->insert_finished;
	}

	public function setInsertFinished(int $insert_finished) : self
	{
		$this->insert_finished = $insert_finished;
		return $this;
	}

	public function getAnonymized():  ?int
	{
		return $this->anonymized;
	}

	public function setAnonymized(int $anonymized) : self
	{
		$this->anonymized = $anonymized;
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