<?php

namespace App\Entity\Bf;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Bf\BfUsersViewsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: BfUsersViewsRepository::class)]
#[ORM\Table(name: "bf_users_views")]
class BfUsersViews
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $bf_users_views_id = null;

	#[ORM\Column]
	private ?int $bf_users_id = null;

	#[ORM\Column]
	private ?string $bf_view_identifier = null;

	#[ORM\Column]
	private ?string $bf_view = null;

	#[ORM\Column]
	private ?int $bf_view_page_size = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getBfUsersViewsId():  ?int
	{
		return $this->bf_users_views_id;
	}

	public function setBfUsersViewsId(int $bf_users_views_id) : self
	{
		$this->bf_users_views_id = $bf_users_views_id;
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

	public function getBfViewIdentifier():  ?string
	{
		return $this->bf_view_identifier;
	}

	public function setBfViewIdentifier(string $bf_view_identifier) : self
	{
		$this->bf_view_identifier = $bf_view_identifier;
		return $this;
	}

	public function getBfView():  ?string
	{
		return $this->bf_view;
	}

	public function setBfView(string $bf_view) : self
	{
		$this->bf_view = $bf_view;
		return $this;
	}

	public function getBfViewPageSize():  ?int
	{
		return $this->bf_view_page_size;
	}

	public function setBfViewPageSize(int $bf_view_page_size) : self
	{
		$this->bf_view_page_size = $bf_view_page_size;
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