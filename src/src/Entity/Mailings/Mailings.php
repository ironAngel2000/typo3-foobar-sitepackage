<?php

namespace App\Entity\Mailings;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Mailings\MailingsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: MailingsRepository::class)]
#[ORM\Table(name: "mailings")]
class Mailings
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $mailings_id = null;

	 #[ORM\Column(length: 64)]
	private ?string $mailings_code = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $shops_ids = null;

	#[ORM\Column]
	private ?int $emails_from_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $emails_to_cc_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $emails_to_bcc_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $mailings_type = null;

	#[ORM\Column]
	private ?int $mailings_active = null;

	#[ORM\Column]
	private ?int $direct_sending = null;

	#[ORM\Column(nullable: true)]
	private ?int $first_mailings_send_status_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_filter_results_date = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getMailingsId():  ?int
	{
		return $this->mailings_id;
	}

	public function setMailingsId(int $mailings_id) : self
	{
		$this->mailings_id = $mailings_id;
		return $this;
	}

	public function getMailingsCode():  ?string
	{
		return $this->mailings_code;
	}

	public function setMailingsCode(string $mailings_code) : self
	{
		$this->mailings_code = $mailings_code;
		return $this;
	}

	public function getShopsIds():  ?string
	{
		return $this->shops_ids;
	}

	public function setShopsIds(string $shops_ids) : self
	{
		$this->shops_ids = $shops_ids;
		return $this;
	}

	public function getEmailsFromId():  ?int
	{
		return $this->emails_from_id;
	}

	public function setEmailsFromId(int $emails_from_id) : self
	{
		$this->emails_from_id = $emails_from_id;
		return $this;
	}

	public function getEmailsToCcId():  ?int
	{
		return $this->emails_to_cc_id;
	}

	public function setEmailsToCcId(int $emails_to_cc_id) : self
	{
		$this->emails_to_cc_id = $emails_to_cc_id;
		return $this;
	}

	public function getEmailsToBccId():  ?int
	{
		return $this->emails_to_bcc_id;
	}

	public function setEmailsToBccId(int $emails_to_bcc_id) : self
	{
		$this->emails_to_bcc_id = $emails_to_bcc_id;
		return $this;
	}

	public function getMailingsType():  ?string
	{
		return $this->mailings_type;
	}

	public function setMailingsType(string $mailings_type) : self
	{
		$this->mailings_type = $mailings_type;
		return $this;
	}

	public function getMailingsActive():  ?int
	{
		return $this->mailings_active;
	}

	public function setMailingsActive(int $mailings_active) : self
	{
		$this->mailings_active = $mailings_active;
		return $this;
	}

	public function getDirectSending():  ?int
	{
		return $this->direct_sending;
	}

	public function setDirectSending(int $direct_sending) : self
	{
		$this->direct_sending = $direct_sending;
		return $this;
	}

	public function getFirstMailingsSendStatusId():  ?int
	{
		return $this->first_mailings_send_status_id;
	}

	public function setFirstMailingsSendStatusId(int $first_mailings_send_status_id) : self
	{
		$this->first_mailings_send_status_id = $first_mailings_send_status_id;
		return $this;
	}

	public function getLastFilterResultsDate():  ?\DateTimeInterface
	{
		return $this->last_filter_results_date;
	}

	public function setLastFilterResultsDate(\DateTimeInterface $last_filter_results_date) : self
	{
		$this->last_filter_results_date = $last_filter_results_date;
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