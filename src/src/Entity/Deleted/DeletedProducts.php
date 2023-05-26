<?php

namespace App\Entity\Deleted;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Deleted\DeletedProductsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: DeletedProductsRepository::class)]
#[ORM\Table(name: "deleted_products")]
class DeletedProducts
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $deleted_products_id = null;

	#[ORM\Column]
	private ?int $products_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $extern_products_id = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $item_number = null;

	#[ORM\Column]
	private ?int $user_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $data = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getDeletedProductsId():  ?int
	{
		return $this->deleted_products_id;
	}

	public function setDeletedProductsId(int $deleted_products_id) : self
	{
		$this->deleted_products_id = $deleted_products_id;
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

	public function getExternProductsId():  ?string
	{
		return $this->extern_products_id;
	}

	public function setExternProductsId(string $extern_products_id) : self
	{
		$this->extern_products_id = $extern_products_id;
		return $this;
	}

	public function getItemNumber():  ?string
	{
		return $this->item_number;
	}

	public function setItemNumber(string $item_number) : self
	{
		$this->item_number = $item_number;
		return $this;
	}

	public function getUserId():  ?int
	{
		return $this->user_id;
	}

	public function setUserId(int $user_id) : self
	{
		$this->user_id = $user_id;
		return $this;
	}

	public function getData():  ?string
	{
		return $this->data;
	}

	public function setData(string $data) : self
	{
		$this->data = $data;
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