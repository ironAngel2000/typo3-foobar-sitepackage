<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsTypesErrorsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsTypesErrorsRepository::class)]
#[ORM\Table(name: "shops_types_errors")]
class ShopsTypesErrors
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_types_errors_id = null;

	#[ORM\Column]
	private ?int $shops_types_id = null;

	#[ORM\Column]
	private ?int $shops_types_errors_severities_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $shops_types_errors_code = null;

	#[ORM\Column(nullable: true)]
	private ?string $shops_types_errors_message = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_occurence = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsTypesErrorsId():  ?int
	{
		return $this->shops_types_errors_id;
	}

	public function setShopsTypesErrorsId(int $shops_types_errors_id) : self
	{
		$this->shops_types_errors_id = $shops_types_errors_id;
		return $this;
	}

	public function getShopsTypesId():  ?int
	{
		return $this->shops_types_id;
	}

	public function setShopsTypesId(int $shops_types_id) : self
	{
		$this->shops_types_id = $shops_types_id;
		return $this;
	}

	public function getShopsTypesErrorsSeveritiesId():  ?int
	{
		return $this->shops_types_errors_severities_id;
	}

	public function setShopsTypesErrorsSeveritiesId(int $shops_types_errors_severities_id) : self
	{
		$this->shops_types_errors_severities_id = $shops_types_errors_severities_id;
		return $this;
	}

	public function getShopsTypesErrorsCode():  ?string
	{
		return $this->shops_types_errors_code;
	}

	public function setShopsTypesErrorsCode(string $shops_types_errors_code) : self
	{
		$this->shops_types_errors_code = $shops_types_errors_code;
		return $this;
	}

	public function getShopsTypesErrorsMessage():  ?string
	{
		return $this->shops_types_errors_message;
	}

	public function setShopsTypesErrorsMessage(string $shops_types_errors_message) : self
	{
		$this->shops_types_errors_message = $shops_types_errors_message;
		return $this;
	}

	public function getLastOccurence():  ?\DateTimeInterface
	{
		return $this->last_occurence;
	}

	public function setLastOccurence(\DateTimeInterface $last_occurence) : self
	{
		$this->last_occurence = $last_occurence;
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