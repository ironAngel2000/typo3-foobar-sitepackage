<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsProductsImportsLogRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsProductsImportsLogRepository::class)]
#[ORM\Table(name: "erp_systems_products_imports_log")]
class ErpSystemsProductsImportsLog
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_products_imports_log_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	#[ORM\Column]
	private ?int $products_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $file = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $import_date = null;

	#[ORM\Column]
	private ?int $processed = null;

	#[ORM\Column]
	private ?int $success = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsProductsImportsLogId():  ?int
	{
		return $this->erp_systems_products_imports_log_id;
	}

	public function setErpSystemsProductsImportsLogId(int $erp_systems_products_imports_log_id) : self
	{
		$this->erp_systems_products_imports_log_id = $erp_systems_products_imports_log_id;
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

	public function getProductsId():  ?int
	{
		return $this->products_id;
	}

	public function setProductsId(int $products_id) : self
	{
		$this->products_id = $products_id;
		return $this;
	}

	public function getFile():  ?string
	{
		return $this->file;
	}

	public function setFile(string $file) : self
	{
		$this->file = $file;
		return $this;
	}

	public function getImportDate():  ?\DateTimeInterface
	{
		return $this->import_date;
	}

	public function setImportDate(\DateTimeInterface $import_date) : self
	{
		$this->import_date = $import_date;
		return $this;
	}

	public function getProcessed():  ?int
	{
		return $this->processed;
	}

	public function setProcessed(int $processed) : self
	{
		$this->processed = $processed;
		return $this;
	}

	public function getSuccess():  ?int
	{
		return $this->success;
	}

	public function setSuccess(int $success) : self
	{
		$this->success = $success;
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