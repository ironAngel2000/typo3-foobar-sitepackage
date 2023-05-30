<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsProductsErrorsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsProductsErrorsRepository::class)]
#[ORM\Table(name: "shops_products_errors")]
class ShopsProductsErrors
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_products_errors_id = null;

	#[ORM\Column]
	private ?int $shops_products_id = null;

	#[ORM\Column]
	private ?int $shops_types_errors_id = null;

	#[ORM\Column]
	private ?string $shops_products_errors_message = null;

	#[ORM\Column]
	private ?int $is_deleted = null;

	#[ORM\Column(nullable: true)]
	private ?string $occurences = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsProductsErrorsId():  ?int
	{
		return $this->shops_products_errors_id;
	}

	public function setShopsProductsErrorsId(int $shops_products_errors_id) : self
	{
		$this->shops_products_errors_id = $shops_products_errors_id;
		return $this;
	}

	public function getShopsProductsId():  ?int
	{
		return $this->shops_products_id;
	}

	public function setShopsProductsId(int $shops_products_id) : self
	{
		$this->shops_products_id = $shops_products_id;
		return $this;
	}

	public function getShopsTypesErrorsId():  ?int
	{
		return $this->shops_types_errors_id;
	}

	public function setShopsTypesErrorsId(int $shops_types_errors_id) : self
	{
		$this->shops_types_errors_id = $shops_types_errors_id;
		return $this;
	}

	public function getShopsProductsErrorsMessage():  ?string
	{
		return $this->shops_products_errors_message;
	}

	public function setShopsProductsErrorsMessage(string $shops_products_errors_message) : self
	{
		$this->shops_products_errors_message = $shops_products_errors_message;
		return $this;
	}

	public function getIsDeleted():  ?int
	{
		return $this->is_deleted;
	}

	public function setIsDeleted(int $is_deleted) : self
	{
		$this->is_deleted = $is_deleted;
		return $this;
	}

	public function getOccurences():  ?string
	{
		return $this->occurences;
	}

	public function setOccurences(string $occurences) : self
	{
		$this->occurences = $occurences;
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