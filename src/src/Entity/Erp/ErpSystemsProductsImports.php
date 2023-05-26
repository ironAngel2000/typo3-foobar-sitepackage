<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsProductsImportsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsProductsImportsRepository::class)]
#[ORM\Table(name: "erp_systems_products_imports")]
class ErpSystemsProductsImports
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_products_imports_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	#[ORM\Column]
	private ?int $products_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $products_hash = null;

	#[ORM\Column(nullable: true)]
	private ?string $products_update_hash = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsProductsImportsId():  ?int
	{
		return $this->erp_systems_products_imports_id;
	}

	public function setErpSystemsProductsImportsId(int $erp_systems_products_imports_id) : self
	{
		$this->erp_systems_products_imports_id = $erp_systems_products_imports_id;
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

	public function getProductsHash():  ?string
	{
		return $this->products_hash;
	}

	public function setProductsHash(string $products_hash) : self
	{
		$this->products_hash = $products_hash;
		return $this;
	}

	public function getProductsUpdateHash():  ?string
	{
		return $this->products_update_hash;
	}

	public function setProductsUpdateHash(string $products_update_hash) : self
	{
		$this->products_update_hash = $products_update_hash;
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