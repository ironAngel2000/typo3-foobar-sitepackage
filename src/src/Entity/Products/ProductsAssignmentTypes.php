<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsAssignmentTypesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsAssignmentTypesRepository::class)]
#[ORM\Table(name: "products_assignment_types")]
class ProductsAssignmentTypes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_assignment_types_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $products_assignment_types_code = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $products_assignment_types_description = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsAssignmentTypesId():  ?int
	{
		return $this->products_assignment_types_id;
	}

	public function setProductsAssignmentTypesId(int $products_assignment_types_id) : self
	{
		$this->products_assignment_types_id = $products_assignment_types_id;
		return $this;
	}

	public function getProductsAssignmentTypesCode():  ?string
	{
		return $this->products_assignment_types_code;
	}

	public function setProductsAssignmentTypesCode(string $products_assignment_types_code) : self
	{
		$this->products_assignment_types_code = $products_assignment_types_code;
		return $this;
	}

	public function getProductsAssignmentTypesDescription():  ?string
	{
		return $this->products_assignment_types_description;
	}

	public function setProductsAssignmentTypesDescription(string $products_assignment_types_description) : self
	{
		$this->products_assignment_types_description = $products_assignment_types_description;
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