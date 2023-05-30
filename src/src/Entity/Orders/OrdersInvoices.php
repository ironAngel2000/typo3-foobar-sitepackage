<?php

namespace App\Entity\Orders;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Orders\OrdersInvoicesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: OrdersInvoicesRepository::class)]
#[ORM\Table(name: "orders_invoices")]
class OrdersInvoices
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $orders_invoices_id = null;

	#[ORM\Column]
	private ?int $orders_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $orders_files_id = null;

	 #[ORM\Column(length: 128)]
	private ?string $invoice_number = null;

	 #[ORM\Column(length: 1024)]
	private ?string $provided_path = null;

	 #[ORM\Column(length: 128)]
	private ?string $file_path = null;

	#[ORM\Column]
	private ?int $downloaded = null;

	#[ORM\Column]
	private ?int $sent = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getOrdersInvoicesId():  ?int
	{
		return $this->orders_invoices_id;
	}

	public function setOrdersInvoicesId(int $orders_invoices_id) : self
	{
		$this->orders_invoices_id = $orders_invoices_id;
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

	public function getErpSystemsId():  ?int
	{
		return $this->erp_systems_id;
	}

	public function setErpSystemsId(int $erp_systems_id) : self
	{
		$this->erp_systems_id = $erp_systems_id;
		return $this;
	}

	public function getOrdersFilesId():  ?int
	{
		return $this->orders_files_id;
	}

	public function setOrdersFilesId(int $orders_files_id) : self
	{
		$this->orders_files_id = $orders_files_id;
		return $this;
	}

	public function getInvoiceNumber():  ?string
	{
		return $this->invoice_number;
	}

	public function setInvoiceNumber(string $invoice_number) : self
	{
		$this->invoice_number = $invoice_number;
		return $this;
	}

	public function getProvidedPath():  ?string
	{
		return $this->provided_path;
	}

	public function setProvidedPath(string $provided_path) : self
	{
		$this->provided_path = $provided_path;
		return $this;
	}

	public function getFilePath():  ?string
	{
		return $this->file_path;
	}

	public function setFilePath(string $file_path) : self
	{
		$this->file_path = $file_path;
		return $this;
	}

	public function getDownloaded():  ?int
	{
		return $this->downloaded;
	}

	public function setDownloaded(int $downloaded) : self
	{
		$this->downloaded = $downloaded;
		return $this;
	}

	public function getSent():  ?int
	{
		return $this->sent;
	}

	public function setSent(int $sent) : self
	{
		$this->sent = $sent;
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