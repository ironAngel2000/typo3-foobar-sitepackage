<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfMenusLanguagesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfMenusLanguagesRepository::class)]
#[ORM\Table(name: "bf_menus_languages")]
class BfMenusLanguages
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_menus_languages_id = null;

	#[ORM\Column]
	private ?int $bf_menus_id = null;

	#[ORM\Column]
	private ?string $languages_code = null;

	 #[ORM\Column(length: 64)]
	private ?string $menu_title = null;

	 #[ORM\Column(length: 64)]
	private ?string $window_title = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfMenusLanguagesId():  ?int
	{
		return $this->bf_menus_languages_id;
	}

	public function setBfMenusLanguagesId(int $bf_menus_languages_id) : self
	{
		$this->bf_menus_languages_id = $bf_menus_languages_id;
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

	public function getLanguagesCode():  ?string
	{
		return $this->languages_code;
	}

	public function setLanguagesCode(string $languages_code) : self
	{
		$this->languages_code = $languages_code;
		return $this;
	}

	public function getMenuTitle():  ?string
	{
		return $this->menu_title;
	}

	public function setMenuTitle(string $menu_title) : self
	{
		$this->menu_title = $menu_title;
		return $this;
	}

	public function getWindowTitle():  ?string
	{
		return $this->window_title;
	}

	public function setWindowTitle(string $window_title) : self
	{
		$this->window_title = $window_title;
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