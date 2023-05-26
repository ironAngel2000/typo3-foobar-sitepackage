<?php

namespace App\Entity\Shopbots;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Shopbots\ShopbotsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShopbotsRepository::class)]
#[ORM\Table(name: "shopbots")]
class Shopbots
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $shopbots_id = null;

	 #[ORM\Column(length: 50)]
	private ?string $shopbots_name = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getShopbotsId():  ?int
	{
		return $this->shopbots_id;
	}

	public function setShopbotsId(int $shopbots_id) : self
	{
		$this->shopbots_id = $shopbots_id;
		return $this;
	}

	public function getShopbotsName():  ?string
	{
		return $this->shopbots_name;
	}

	public function setShopbotsName(string $shopbots_name) : self
	{
		$this->shopbots_name = $shopbots_name;
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