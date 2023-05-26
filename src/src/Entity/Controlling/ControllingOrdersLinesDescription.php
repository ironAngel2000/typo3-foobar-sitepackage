<?php

namespace App\Entity\Controlling;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Controlling\ControllingOrdersLinesDescriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ControllingOrdersLinesDescriptionRepository::class)]
#[ORM\Table(name: "controlling_orders_lines_description")]
class ControllingOrdersLinesDescription
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $controlling_orders_lines_description_id = null;

	#[ORM\Column]
	private ?int $controlling_orders_lines_id = null;

	#[ORM\Column]
	private ?int $languages_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $products_name = null;

	 #[ORM\Column(length: 255)]
	private ?string $products_variations_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getControllingOrdersLinesDescriptionId():  ?int
	{
		return $this->controlling_orders_lines_description_id;
	}

	public function setControllingOrdersLinesDescriptionId(int $controlling_orders_lines_description_id) : self
	{
		$this->controlling_orders_lines_description_id = $controlling_orders_lines_description_id;
		return $this;
	}

	public function getControllingOrdersLinesId():  ?int
	{
		return $this->controlling_orders_lines_id;
	}

	public function setControllingOrdersLinesId(int $controlling_orders_lines_id) : self
	{
		$this->controlling_orders_lines_id = $controlling_orders_lines_id;
		return $this;
	}

	public function getLanguagesId():  ?int
	{
		return $this->languages_id;
	}

	public function setLanguagesId(int $languages_id) : self
	{
		$this->languages_id = $languages_id;
		return $this;
	}

	public function getProductsName():  ?string
	{
		return $this->products_name;
	}

	public function setProductsName(string $products_name) : self
	{
		$this->products_name = $products_name;
		return $this;
	}

	public function getProductsVariationsName():  ?string
	{
		return $this->products_variations_name;
	}

	public function setProductsVariationsName(string $products_variations_name) : self
	{
		$this->products_variations_name = $products_variations_name;
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