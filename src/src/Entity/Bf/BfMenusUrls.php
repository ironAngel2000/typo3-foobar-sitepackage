<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfMenusUrlsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfMenusUrlsRepository::class)]
#[ORM\Table(name: "bf_menus_urls")]
class BfMenusUrls
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_menus_urls_id = null;

	#[ORM\Column]
	private ?int $bf_menus_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $url = null;

	#[ORM\Column]
	private ?string $sort_order = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfMenusUrlsId():  ?int
	{
		return $this->bf_menus_urls_id;
	}

	public function setBfMenusUrlsId(int $bf_menus_urls_id) : self
	{
		$this->bf_menus_urls_id = $bf_menus_urls_id;
		return $this;
	}

	public function getBfMenusId():  ?int
	{
		return $this->bf_menus_id;
	}

	public function setBfMenusId(int $bf_menus_id) : self
	{
		$this->bf_menus_id = $bf_menus_id;
		return $this;
	}

	public function getUrl():  ?string
	{
		return $this->url;
	}

	public function setUrl(string $url) : self
	{
		$this->url = $url;
		return $this;
	}

	public function getSortOrder():  ?string
	{
		return $this->sort_order;
	}

	public function setSortOrder(string $sort_order) : self
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