<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfMenusRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfMenusRepository::class)]
#[ORM\Table(name: "bf_menus")]
class BfMenus
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_menus_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $parent_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $win_width = null;

	#[ORM\Column(nullable: true)]
	private ?int $win_height = null;

	 #[ORM\Column(length: 255)]
	private ?string $url = null;

	#[ORM\Column]
	private ?int $sort = null;

	#[ORM\Column]
	private ?int $level = null;

	#[ORM\Column(length: 30, nullable: true)]
	private ?string $icon_cls = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfMenusId():  ?int
	{
		return $this->bf_menus_id;
	}

	public function setBfMenusId(int $bf_menus_id) : self
	{
		$this->bf_menus_id = $bf_menus_id;
		return $this;
	}

	public function getParentId():  ?int
	{
		return $this->parent_id;
	}

	public function setParentId(int $parent_id) : self
	{
		$this->parent_id = $parent_id;
		return $this;
	}

	public function getWinWidth():  ?int
	{
		return $this->win_width;
	}

	public function setWinWidth(int $win_width) : self
	{
		$this->win_width = $win_width;
		return $this;
	}

	public function getWinHeight():  ?int
	{
		return $this->win_height;
	}

	public function setWinHeight(int $win_height) : self
	{
		$this->win_height = $win_height;
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

	public function getSort():  ?int
	{
		return $this->sort;
	}

	public function setSort(int $sort) : self
	{
		$this->sort = $sort;
		return $this;
	}

	public function getLevel():  ?int
	{
		return $this->level;
	}

	public function setLevel(int $level) : self
	{
		$this->level = $level;
		return $this;
	}

	public function getIconCls():  ?string
	{
		return $this->icon_cls;
	}

	public function setIconCls(string $icon_cls) : self
	{
		$this->icon_cls = $icon_cls;
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