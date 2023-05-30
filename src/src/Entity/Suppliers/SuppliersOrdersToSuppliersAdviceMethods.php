<?php

namespace App\Entity\Suppliers;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Suppliers\SuppliersOrdersToSuppliersAdviceMethodsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SuppliersOrdersToSuppliersAdviceMethodsRepository::class)]
#[ORM\Table(name: "suppliers_orders_to_suppliers_advice_methods")]
class SuppliersOrdersToSuppliersAdviceMethods
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $suppliers_orders_to_suppliers_advice_methods_id = null;

	#[ORM\Column]
	private ?int $suppliers_orders_id = null;

	#[ORM\Column]
	private ?int $suppliers_advice_methods_id = null;

	#[ORM\Column]
	private ?int $send_status = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $send_status_message = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getSuppliersOrdersToSuppliersAdviceMethodsId():  ?int
	{
		return $this->suppliers_orders_to_suppliers_advice_methods_id;
	}

	public function setSuppliersOrdersToSuppliersAdviceMethodsId(int $suppliers_orders_to_suppliers_advice_methods_id) : self
	{
		$this->suppliers_orders_to_suppliers_advice_methods_id = $suppliers_orders_to_suppliers_advice_methods_id;
		return $this;
	}

	public function getSuppliersOrdersId():  ?int
	{
		return $this->suppliers_orders_id;
	}

	public function setSuppliersOrdersId(int $suppliers_orders_id) : self
	{
		$this->suppliers_orders_id = $suppliers_orders_id;
		return $this;
	}

	public function getSuppliersAdviceMethodsId():  ?int
	{
		return $this->suppliers_advice_methods_id;
	}

	public function setSuppliersAdviceMethodsId(int $suppliers_advice_methods_id) : self
	{
		$this->suppliers_advice_methods_id = $suppliers_advice_methods_id;
		return $this;
	}

	public function getSendStatus():  ?int
	{
		return $this->send_status;
	}

	public function setSendStatus(int $send_status) : self
	{
		$this->send_status = $send_status;
		return $this;
	}

	public function getSendStatusMessage():  ?string
	{
		return $this->send_status_message;
	}

	public function setSendStatusMessage(string $send_status_message) : self
	{
		$this->send_status_message = $send_status_message;
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