<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsProductsVariationsErrorsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsProductsVariationsErrorsRepository::class)]
#[ORM\Table(name: "shops_products_variations_errors")]
class ShopsProductsVariationsErrors
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_products_variations_errors_id = null;

	#[ORM\Column]
	private ?int $shops_products_errors_id = null;

	#[ORM\Column]
	private ?int $shops_products_variations_id = null;

	#[ORM\Column]
	private ?string $shops_products_variations_errors_message = null;

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

	public function getShopsProductsVariationsErrorsId():  ?int
	{
		return $this->shops_products_variations_errors_id;
	}

	public function setShopsProductsVariationsErrorsId(int $shops_products_variations_errors_id) : self
	{
		$this->shops_products_variations_errors_id = $shops_products_variations_errors_id;
		return $this;
	}

	public function getShopsProductsErrorsId():  ?int
	{
		return $this->shops_products_errors_id;
	}

	public function setShopsProductsErrorsId(int $shops_products_errors_id) : self
	{
		$this->shops_products_errors_id = $shops_products_errors_id;
		return $this;
	}

	public function getShopsProductsVariationsId():  ?int
	{
		return $this->shops_products_variations_id;
	}

	public function setShopsProductsVariationsId(int $shops_products_variations_id) : self
	{
		$this->shops_products_variations_id = $shops_products_variations_id;
		return $this;
	}

	public function getShopsProductsVariationsErrorsMessage():  ?string
	{
		return $this->shops_products_variations_errors_message;
	}

	public function setShopsProductsVariationsErrorsMessage(string $shops_products_variations_errors_message) : self
	{
		$this->shops_products_variations_errors_message = $shops_products_variations_errors_message;
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