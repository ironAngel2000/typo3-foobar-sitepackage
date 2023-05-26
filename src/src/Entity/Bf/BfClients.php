<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfClientsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfClientsRepository::class)]
#[ORM\Table(name: "bf_clients")]
class BfClients
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_clients_id = null;

	#[ORM\Column(length: 100, nullable: true)]
	private ?string $customer_number = null;

	 #[ORM\Column(length: 255)]
	private ?string $bf_clients_name = null;

	#[ORM\Column(length: 100, nullable: true)]
	private ?string $level = null;

	#[ORM\Column(length: 100, nullable: true)]
	private ?string $customer = null;

	 #[ORM\Column(length: 255)]
	private ?string $url = null;

	#[ORM\Column]
	private ?string $api_key = null;

	#[ORM\Column(nullable: true)]
	private ?int $max_sku = null;

	#[ORM\Column(nullable: true)]
	private ?int $max_orders = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfClientsId():  ?int
	{
		return $this->bf_clients_id;
	}

	public function setBfClientsId(int $bf_clients_id) : self
	{
		$this->bf_clients_id = $bf_clients_id;
		return $this;
	}

	public function getCustomerNumber():  ?string
	{
		return $this->customer_number;
	}

	public function setCustomerNumber(string $customer_number) : self
	{
		$this->customer_number = $customer_number;
		return $this;
	}

	public function getBfClientsName():  ?string
	{
		return $this->bf_clients_name;
	}

	public function setBfClientsName(string $bf_clients_name) : self
	{
		$this->bf_clients_name = $bf_clients_name;
		return $this;
	}

	public function getLevel():  ?string
	{
		return $this->level;
	}

	public function setLevel(string $level) : self
	{
		$this->level = $level;
		return $this;
	}

	public function getCustomer():  ?string
	{
		return $this->customer;
	}

	public function setCustomer(string $customer) : self
	{
		$this->customer = $customer;
		return $this;
	}

	public function getUrl():  ?string
	{
		return $this->url;
	}

	public function setUrl(string $url) : self
	{
		$this->url = $url;
		return $this;
	}

	public function getApiKey():  ?string
	{
		return $this->api_key;
	}

	public function setApiKey(string $api_key) : self
	{
		$this->api_key = $api_key;
		return $this;
	}

	public function getMaxSku():  ?int
	{
		return $this->max_sku;
	}

	public function setMaxSku(int $max_sku) : self
	{
		$this->max_sku = $max_sku;
		return $this;
	}

	public function getMaxOrders():  ?int
	{
		return $this->max_orders;
	}

	public function setMaxOrders(int $max_orders) : self
	{
		$this->max_orders = $max_orders;
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