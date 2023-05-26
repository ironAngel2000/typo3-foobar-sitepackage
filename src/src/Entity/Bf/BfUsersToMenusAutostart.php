<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfUsersToMenusAutostartRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfUsersToMenusAutostartRepository::class)]
#[ORM\Table(name: "bf_users_to_menus_autostart")]
class BfUsersToMenusAutostart
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_users_to_menus_autostart_id = null;

	#[ORM\Column]
	private ?int $bf_users_id = null;

	#[ORM\Column]
	private ?int $bf_menus_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $win_width = null;

	#[ORM\Column(nullable: true)]
	private ?int $win_height = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfUsersToMenusAutostartId():  ?int
	{
		return $this->bf_users_to_menus_autostart_id;
	}

	public function setBfUsersToMenusAutostartId(int $bf_users_to_menus_autostart_id) : self
	{
		$this->bf_users_to_menus_autostart_id = $bf_users_to_menus_autostart_id;
		return $this;
	}

	public function getBfUsersId():  ?int
	{
		return $this->bf_users_id;
	}

	public function setBfUsersId(int $bf_users_id) : self
	{
		$this->bf_users_id = $bf_users_id;
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