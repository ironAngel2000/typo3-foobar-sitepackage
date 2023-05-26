<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsMatchingSalutationsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsMatchingSalutationsRepository::class)]
#[ORM\Table(name: "erp_systems_matching_salutations")]
class ErpSystemsMatchingSalutations
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_matching_salutations_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $salutations_name = null;

	 #[ORM\Column(length: 64)]
	private ?string $erp_salutations_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsMatchingSalutationsId():  ?int
	{
		return $this->erp_systems_matching_salutations_id;
	}

	public function setErpSystemsMatchingSalutationsId(int $erp_systems_matching_salutations_id) : self
	{
		$this->erp_systems_matching_salutations_id = $erp_systems_matching_salutations_id;
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

	public function getSalutationsName():  ?string
	{
		return $this->salutations_name;
	}

	public function setSalutationsName(string $salutations_name) : self
	{
		$this->salutations_name = $salutations_name;
		return $this;
	}

	public function getErpSalutationsName():  ?string
	{
		return $this->erp_salutations_name;
	}

	public function setErpSalutationsName(string $erp_salutations_name) : self
	{
		$this->erp_salutations_name = $erp_salutations_name;
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