<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsMatchingCarriersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsMatchingCarriersRepository::class)]
#[ORM\Table(name: "erp_systems_matching_carriers")]
class ErpSystemsMatchingCarriers
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_matching_carriers_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	#[ORM\Column]
	private ?int $carriers_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $erp_carriers_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsMatchingCarriersId():  ?int
	{
		return $this->erp_systems_matching_carriers_id;
	}

	public function setErpSystemsMatchingCarriersId(int $erp_systems_matching_carriers_id) : self
	{
		$this->erp_systems_matching_carriers_id = $erp_systems_matching_carriers_id;
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

	public function getCarriersId():  ?int
	{
		return $this->carriers_id;
	}

	public function setCarriersId(int $carriers_id) : self
	{
		$this->carriers_id = $carriers_id;
		return $this;
	}

	public function getErpCarriersCode():  ?string
	{
		return $this->erp_carriers_code;
	}

	public function setErpCarriersCode(string $erp_carriers_code) : self
	{
		$this->erp_carriers_code = $erp_carriers_code;
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