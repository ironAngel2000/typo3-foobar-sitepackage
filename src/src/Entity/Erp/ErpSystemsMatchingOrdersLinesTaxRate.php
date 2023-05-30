<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsMatchingOrdersLinesTaxRateRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsMatchingOrdersLinesTaxRateRepository::class)]
#[ORM\Table(name: "erp_systems_matching_orders_lines_tax_rate")]
class ErpSystemsMatchingOrdersLinesTaxRate
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_matching_orders_lines_tax_rate_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	#[ORM\Column]
	private ?float $tax_rate = null;

	 #[ORM\Column(length: 32)]
	private ?string $erp_tax_rate_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsMatchingOrdersLinesTaxRateId():  ?int
	{
		return $this->erp_systems_matching_orders_lines_tax_rate_id;
	}

	public function setErpSystemsMatchingOrdersLinesTaxRateId(int $erp_systems_matching_orders_lines_tax_rate_id) : self
	{
		$this->erp_systems_matching_orders_lines_tax_rate_id = $erp_systems_matching_orders_lines_tax_rate_id;
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

	public function getTaxRate():  ?float
	{
		return $this->tax_rate;
	}

	public function setTaxRate(float $tax_rate) : self
	{
		$this->tax_rate = $tax_rate;
		return $this;
	}

	public function getErpTaxRateCode():  ?string
	{
		return $this->erp_tax_rate_code;
	}

	public function setErpTaxRateCode(string $erp_tax_rate_code) : self
	{
		$this->erp_tax_rate_code = $erp_tax_rate_code;
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