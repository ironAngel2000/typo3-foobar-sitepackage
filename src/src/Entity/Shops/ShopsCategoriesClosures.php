<?php

namespace App\Entity\Shops;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shops\ShopsCategoriesClosuresRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopsCategoriesClosuresRepository::class)]
#[ORM\Table(name: "shops_categories_closures")]
class ShopsCategoriesClosures
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shops_categories_closures_id = null;

	#[ORM\Column]
	private ?int $ancestor_id = null;

	#[ORM\Column]
	private ?int $descendant_id = null;

	#[ORM\Column]
	private ?int $depth = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopsCategoriesClosuresId():  ?int
	{
		return $this->shops_categories_closures_id;
	}

	public function setShopsCategoriesClosuresId(int $shops_categories_closures_id) : self
	{
		$this->shops_categories_closures_id = $shops_categories_closures_id;
		return $this;
	}

	public function getAncestorId():  ?int
	{
		return $this->ancestor_id;
	}

	public function setAncestorId(int $ancestor_id) : self
	{
		$this->ancestor_id = $ancestor_id;
		return $this;
	}

	public function getDescendantId():  ?int
	{
		return $this->descendant_id;
	}

	public function setDescendantId(int $descendant_id) : self
	{
		$this->descendant_id = $descendant_id;
		return $this;
	}

	public function getDepth():  ?int
	{
		return $this->depth;
	}

	public function setDepth(int $depth) : self
	{
		$this->depth = $depth;
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