<?php

namespace App\Entity\Products;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Products\ProductsAttributesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ProductsAttributesRepository::class)]
#[ORM\Table(name: "products_attributes")]
class ProductsAttributes
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $products_attributes_id = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $products_attributes_code = null;

	#[ORM\Column(length: 50, nullable: true)]
	private ?string $extern_products_attributes_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $units_id = null;

	#[ORM\Column]
	private ?string $type = null;

	#[ORM\Column]
	private ?string $visibility = null;

	#[ORM\Column]
	private ?string $assignment = null;

	#[ORM\Column]
	private ?string $usage = null;

	#[ORM\Column]
	private ?int $multi_assign = null;

	#[ORM\Column]
	private ?int $mandatory = null;

	#[ORM\Column]
	private ?int $create_on_assign = null;

	#[ORM\Column]
	private ?int $keep_on_import = null;

	#[ORM\Column]
	private ?int $sort_order = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getProductsAttributesId():  ?int
	{
		return $this->products_attributes_id;
	}

	public function setProductsAttributesId(int $products_attributes_id) : self
	{
		$this->products_attributes_id = $products_attributes_id;
		return $this;
	}

	public function getProductsAttributesCode():  ?string
	{
		return $this->products_attributes_code;
	}

	public function setProductsAttributesCode(string $products_attributes_code) : self
	{
		$this->products_attributes_code = $products_attributes_code;
		return $this;
	}

	public function getExternProductsAttributesId():  ?string
	{
		return $this->extern_products_attributes_id;
	}

	public function setExternProductsAttributesId(string $extern_products_attributes_id) : self
	{
		$this->extern_products_attributes_id = $extern_products_attributes_id;
		return $this;
	}

	public function getUnitsId():  ?int
	{
		return $this->units_id;
	}

	public function setUnitsId(int $units_id) : self
	{
		$this->units_id = $units_id;
		return $this;
	}

	public function getType():  ?string
	{
		return $this->type;
	}

	public function setType(string $type) : self
	{
		$this->type = $type;
		return $this;
	}

	public function getVisibility():  ?string
	{
		return $this->visibility;
	}

	public function setVisibility(string $visibility) : self
	{
		$this->visibility = $visibility;
		return $this;
	}

	public function getAssignment():  ?string
	{
		return $this->assignment;
	}

	public function setAssignment(string $assignment) : self
	{
		$this->assignment = $assignment;
		return $this;
	}

	public function getUsage():  ?string
	{
		return $this->usage;
	}

	public function setUsage(string $usage) : self
	{
		$this->usage = $usage;
		return $this;
	}

	public function getMultiAssign():  ?int
	{
		return $this->multi_assign;
	}

	public function setMultiAssign(int $multi_assign) : self
	{
		$this->multi_assign = $multi_assign;
		return $this;
	}

	public function getMandatory():  ?int
	{
		return $this->mandatory;
	}

	public function setMandatory(int $mandatory) : self
	{
		$this->mandatory = $mandatory;
		return $this;
	}

	public function getCreateOnAssign():  ?int
	{
		return $this->create_on_assign;
	}

	public function setCreateOnAssign(int $create_on_assign) : self
	{
		$this->create_on_assign = $create_on_assign;
		return $this;
	}

	public function getKeepOnImport():  ?int
	{
		return $this->keep_on_import;
	}

	public function setKeepOnImport(int $keep_on_import) : self
	{
		$this->keep_on_import = $keep_on_import;
		return $this;
	}

	public function getSortOrder():  ?int
	{
		return $this->sort_order;
	}

	public function setSortOrder(int $sort_order) : self
	{
		$this->sort_order = $sort_order;
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