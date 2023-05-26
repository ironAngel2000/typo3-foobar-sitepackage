<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsMatchingShopsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsMatchingShopsRepository::class)]
#[ORM\Table(name: "erp_systems_matching_shops")]
class ErpSystemsMatchingShops
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_matching_shops_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $shops_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $countries_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $shipping_methods_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $payment_methods_id = null;

	 #[ORM\Column(length: 32)]
	private ?string $erp_shops = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $erp_shops_name = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $extern_order_id_prefix = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $email_address_prefix = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsMatchingShopsId():  ?int
	{
		return $this->erp_systems_matching_shops_id;
	}

	public function setErpSystemsMatchingShopsId(int $erp_systems_matching_shops_id) : self
	{
		$this->erp_systems_matching_shops_id = $erp_systems_matching_shops_id;
		return $this;
	}

	public function getErpSystemsId():  ?int
	{
		return $this->erp_systems_id;
	}

	public function setErpSystemsId(int $erp_systems_id) : self
	{
		$this->erp_systems_id = $erp_systems_id;
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

	public function getCountriesId():  ?int
	{
		return $this->countries_id;
	}

	public function setCountriesId(int $countries_id) : self
	{
		$this->countries_id = $countries_id;
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

	public function getPaymentMethodsId():  ?int
	{
		return $this->payment_methods_id;
	}

	public function setPaymentMethodsId(int $payment_methods_id) : self
	{
		$this->payment_methods_id = $payment_methods_id;
		return $this;
	}

	public function getErpShops():  ?string
	{
		return $this->erp_shops;
	}

	public function setErpShops(string $erp_shops) : self
	{
		$this->erp_shops = $erp_shops;
		return $this;
	}

	public function getErpShopsName():  ?string
	{
		return $this->erp_shops_name;
	}

	public function setErpShopsName(string $erp_shops_name) : self
	{
		$this->erp_shops_name = $erp_shops_name;
		return $this;
	}

	public function getExternOrderIdPrefix():  ?string
	{
		return $this->extern_order_id_prefix;
	}

	public function setExternOrderIdPrefix(string $extern_order_id_prefix) : self
	{
		$this->extern_order_id_prefix = $extern_order_id_prefix;
		return $this;
	}

	public function getEmailAddressPrefix():  ?string
	{
		return $this->email_address_prefix;
	}

	public function setEmailAddressPrefix(string $email_address_prefix) : self
	{
		$this->email_address_prefix = $email_address_prefix;
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