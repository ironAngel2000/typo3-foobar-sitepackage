<?php

namespace App\Entity\Invoice;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Invoice\InvoiceNumbersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: InvoiceNumbersRepository::class)]
#[ORM\Table(name: "invoice_numbers")]
class InvoiceNumbers
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $invoice_numbers_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $orders_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getInvoiceNumbersId():  ?int
	{
		return $this->invoice_numbers_id;
	}

	public function setInvoiceNumbersId(int $invoice_numbers_id) : self
	{
		$this->invoice_numbers_id = $invoice_numbers_id;
		return $this;
	}

	public function getOrdersId():  ?int
	{
		return $this->orders_id;
	}

	public function setOrdersId(int $orders_id) : self
	{
		$this->orders_id = $orders_id;
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