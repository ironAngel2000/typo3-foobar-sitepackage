<?php

namespace App\Entity\Feed;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Feed\FeedViewersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: FeedViewersRepository::class)]
#[ORM\Table(name: "feed_viewers")]
class FeedViewers
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $feed_viewers_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $feed_viewers_code = null;

	#[ORM\Column]
	private ?int $bf_users_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $title = null;

	 #[ORM\Column(length: 2048)]
	private ?string $url = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getFeedViewersId():  ?int
	{
		return $this->feed_viewers_id;
	}

	public function setFeedViewersId(int $feed_viewers_id) : self
	{
		$this->feed_viewers_id = $feed_viewers_id;
		return $this;
	}

	public function getFeedViewersCode():  ?string
	{
		return $this->feed_viewers_code;
	}

	public function setFeedViewersCode(string $feed_viewers_code) : self
	{
		$this->feed_viewers_code = $feed_viewers_code;
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

	public function getTitle():  ?string
	{
		return $this->title;
	}

	public function setTitle(string $title) : self
	{
		$this->title = $title;
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