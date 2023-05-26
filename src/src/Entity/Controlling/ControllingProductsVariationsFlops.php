<?php

namespace App\Entity\Controlling;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Controlling\ControllingProductsVariationsFlopsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ControllingProductsVariationsFlopsRepository::class)]
#[ORM\Table(name: "controlling_products_variations_flops")]
class ControllingProductsVariationsFlops
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $controlling_products_variations_flops_id = null;

	#[ORM\Column]
	private ?int $products_id = null;

	#[ORM\Column]
	private ?int $products_variations_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $products_variations_creation_date = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getControllingProductsVariationsFlopsId():  ?int
	{
		return $this->controlling_products_variations_flops_id;
	}

	public function setControllingProductsVariationsFlopsId(int $controlling_products_variations_flops_id) : self
	{
		$this->controlling_products_variations_flops_id = $controlling_products_variations_flops_id;
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

	public function getProductsVariationsId():  ?int
	{
		return $this->products_variations_id;
	}

	public function setProductsVariationsId(int $products_variations_id) : self
	{
		$this->products_variations_id = $products_variations_id;
		return $this;
	}

	public function getProductsVariationsCreationDate():  ?\DateTimeInterface
	{
		return $this->products_variations_creation_date;
	}

	public function setProductsVariationsCreationDate(\DateTimeInterface $products_variations_creation_date) : self
	{
		$this->products_variations_creation_date = $products_variations_creation_date;
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