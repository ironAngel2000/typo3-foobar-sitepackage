<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsMatchingAdditionalRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsMatchingAdditionalRepository::class)]
#[ORM\Table(name: "erp_systems_matching_additional")]
class ErpSystemsMatchingAdditional
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_matching_additional_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $erp_systems_matching_additional_type = null;

	 #[ORM\Column(length: 255)]
	private ?string $erp_systems_matching_additional_from = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $erp_systems_matching_additional_to = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsMatchingAdditionalId():  ?int
	{
		return $this->erp_systems_matching_additional_id;
	}

	public function setErpSystemsMatchingAdditionalId(int $erp_systems_matching_additional_id) : self
	{
		$this->erp_systems_matching_additional_id = $erp_systems_matching_additional_id;
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

	public function getErpSystemsMatchingAdditionalType():  ?string
	{
		return $this->erp_systems_matching_additional_type;
	}

	public function setErpSystemsMatchingAdditionalType(string $erp_systems_matching_additional_type) : self
	{
		$this->erp_systems_matching_additional_type = $erp_systems_matching_additional_type;
		return $this;
	}

	public function getErpSystemsMatchingAdditionalFrom():  ?string
	{
		return $this->erp_systems_matching_additional_from;
	}

	public function setErpSystemsMatchingAdditionalFrom(string $erp_systems_matching_additional_from) : self
	{
		$this->erp_systems_matching_additional_from = $erp_systems_matching_additional_from;
		return $this;
	}

	public function getErpSystemsMatchingAdditionalTo():  ?string
	{
		return $this->erp_systems_matching_additional_to;
	}

	public function setErpSystemsMatchingAdditionalTo(string $erp_systems_matching_additional_to) : self
	{
		$this->erp_systems_matching_additional_to = $erp_systems_matching_additional_to;
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