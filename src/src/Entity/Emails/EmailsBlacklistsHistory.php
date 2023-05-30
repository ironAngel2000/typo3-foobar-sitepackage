<?php

namespace App\Entity\Emails;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Emails\EmailsBlacklistsHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: EmailsBlacklistsHistoryRepository::class)]
#[ORM\Table(name: "emails_blacklists_history")]
class EmailsBlacklistsHistory
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $emails_blacklists_history_id = null;

	#[ORM\Column]
	private ?int $emails_blacklists_id = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $blocked_email = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $blocked_domain = null;

	#[ORM\Column]
	private ?int $blockes_active = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getEmailsBlacklistsHistoryId():  ?int
	{
		return $this->emails_blacklists_history_id;
	}

	public function setEmailsBlacklistsHistoryId(int $emails_blacklists_history_id) : self
	{
		$this->emails_blacklists_history_id = $emails_blacklists_history_id;
		return $this;
	}

	public function getEmailsBlacklistsId():  ?int
	{
		return $this->emails_blacklists_id;
	}

	public function setEmailsBlacklistsId(int $emails_blacklists_id) : self
	{
		$this->emails_blacklists_id = $emails_blacklists_id;
		return $this;
	}

	public function getBlockedEmail():  ?string
	{
		return $this->blocked_email;
	}

	public function setBlockedEmail(string $blocked_email) : self
	{
		$this->blocked_email = $blocked_email;
		return $this;
	}

	public function getBlockedDomain():  ?string
	{
		return $this->blocked_domain;
	}

	public function setBlockedDomain(string $blocked_domain) : self
	{
		$this->blocked_domain = $blocked_domain;
		return $this;
	}

	public function getBlockesActive():  ?int
	{
		return $this->blockes_active;
	}

	public function setBlockesActive(int $blockes_active) : self
	{
		$this->blockes_active = $blockes_active;
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