<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsProductsHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsProductsHistoryRepository::class)]
#[ORM\Table(name: "shops_products_history")]
class ShopsProductsHistory
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_products_history_id = null;

	#[ORM\Column]
	private ?int $shops_products_id = null;

	#[ORM\Column]
	private ?string $products_status = null;

	#[ORM\Column]
	private ?string $filter_passed = null;

	#[ORM\Column]
	private ?string $manual_assignment = null;

	#[ORM\Column]
	private ?string $to_delete = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsProductsHistoryId():  ?int
	{
		return $this->shops_products_history_id;
	}

	public function setShopsProductsHistoryId(int $shops_products_history_id) : self
	{
		$this->shops_products_history_id = $shops_products_history_id;
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

	public function getProductsStatus():  ?string
	{
		return $this->products_status;
	}

	public function setProductsStatus(string $products_status) : self
	{
		$this->products_status = $products_status;
		return $this;
	}

	public function getFilterPassed():  ?string
	{
		return $this->filter_passed;
	}

	public function setFilterPassed(string $filter_passed) : self
	{
		$this->filter_passed = $filter_passed;
		return $this;
	}

	public function getManualAssignment():  ?string
	{
		return $this->manual_assignment;
	}

	public function setManualAssignment(string $manual_assignment) : self
	{
		$this->manual_assignment = $manual_assignment;
		return $this;
	}

	public function getToDelete():  ?string
	{
		return $this->to_delete;
	}

	public function setToDelete(string $to_delete) : self
	{
		$this->to_delete = $to_delete;
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