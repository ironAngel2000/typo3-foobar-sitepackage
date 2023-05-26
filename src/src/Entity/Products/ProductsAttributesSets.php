<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsAttributesSetsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsAttributesSetsRepository::class)]
#[ORM\Table(name: "products_attributes_sets")]
class ProductsAttributesSets
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_attributes_sets_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $products_attributes_sets_code = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsAttributesSetsId():  ?int
	{
		return $this->products_attributes_sets_id;
	}

	public function setProductsAttributesSetsId(int $products_attributes_sets_id) : self
	{
		$this->products_attributes_sets_id = $products_attributes_sets_id;
		return $this;
	}

	public function getProductsAttributesSetsCode():  ?string
	{
		return $this->products_attributes_sets_code;
	}

	public function setProductsAttributesSetsCode(string $products_attributes_sets_code) : self
	{
		$this->products_attributes_sets_code = $products_attributes_sets_code;
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