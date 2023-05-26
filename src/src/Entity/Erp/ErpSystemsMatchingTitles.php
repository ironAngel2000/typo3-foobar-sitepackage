<?php

namespace App\Entity\Erp;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Erp\ErpSystemsMatchingTitlesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ErpSystemsMatchingTitlesRepository::class)]
#[ORM\Table(name: "erp_systems_matching_titles")]
class ErpSystemsMatchingTitles
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $erp_systems_matching_titles_id = null;

	#[ORM\Column]
	private ?int $erp_systems_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $titles_name = null;

	 #[ORM\Column(length: 64)]
	private ?string $erp_titles_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getErpSystemsMatchingTitlesId():  ?int
	{
		return $this->erp_systems_matching_titles_id;
	}

	public function setErpSystemsMatchingTitlesId(int $erp_systems_matching_titles_id) : self
	{
		$this->erp_systems_matching_titles_id = $erp_systems_matching_titles_id;
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

	public function getTitlesName():  ?string
	{
		return $this->titles_name;
	}

	public function setTitlesName(string $titles_name) : self
	{
		$this->titles_name = $titles_name;
		return $this;
	}

	public function getErpTitlesName():  ?string
	{
		return $this->erp_titles_name;
	}

	public function setErpTitlesName(string $erp_titles_name) : self
	{
		$this->erp_titles_name = $erp_titles_name;
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