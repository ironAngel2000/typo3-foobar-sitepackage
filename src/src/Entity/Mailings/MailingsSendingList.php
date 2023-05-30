<?php

namespace App\Entity\Mailings;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Mailings\MailingsSendingListRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: MailingsSendingListRepository::class)]
#[ORM\Table(name: "mailings_sending_list")]
class MailingsSendingList
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $mailings_sending_list_id = null;

	#[ORM\Column]
	private ?int $mailings_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $mail_send_to = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $mail_send_to_name = null;

	 #[ORM\Column(length: 255)]
	private ?string $mail_send_from = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $mail_send_from_name = null;

	 #[ORM\Column(length: 255)]
	private ?string $mail_subject = null;

	#[ORM\Column(nullable: true)]
	private ?string $mail_body = null;

	#[ORM\Column]
	private ?int $mail_html = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $mail_send_date_first = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $mail_send_date_last = null;

	#[ORM\Column]
	private ?int $mailings_send_status_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $mailings_send_errors_types_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $orders_id = null;

	#[ORM\Column(nullable: true)]
	private ?int $products_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getMailingsSendingListId():  ?int
	{
		return $this->mailings_sending_list_id;
	}

	public function setMailingsSendingListId(int $mailings_sending_list_id) : self
	{
		$this->mailings_sending_list_id = $mailings_sending_list_id;
		return $this;
	}

	public function getMailingsId():  ?int
	{
		return $this->mailings_id;
	}

	public function setMailingsId(int $mailings_id) : self
	{
		$this->mailings_id = $mailings_id;
		return $this;
	}

	public function getMailSendTo():  ?string
	{
		return $this->mail_send_to;
	}

	public function setMailSendTo(string $mail_send_to) : self
	{
		$this->mail_send_to = $mail_send_to;
		return $this;
	}

	public function getMailSendToName():  ?string
	{
		return $this->mail_send_to_name;
	}

	public function setMailSendToName(string $mail_send_to_name) : self
	{
		$this->mail_send_to_name = $mail_send_to_name;
		return $this;
	}

	public function getMailSendFrom():  ?string
	{
		return $this->mail_send_from;
	}

	public function setMailSendFrom(string $mail_send_from) : self
	{
		$this->mail_send_from = $mail_send_from;
		return $this;
	}

	public function getMailSendFromName():  ?string
	{
		return $this->mail_send_from_name;
	}

	public function setMailSendFromName(string $mail_send_from_name) : self
	{
		$this->mail_send_from_name = $mail_send_from_name;
		return $this;
	}

	public function getMailSubject():  ?string
	{
		return $this->mail_subject;
	}

	public function setMailSubject(string $mail_subject) : self
	{
		$this->mail_subject = $mail_subject;
		return $this;
	}

	public function getMailBody():  ?string
	{
		return $this->mail_body;
	}

	public function setMailBody(string $mail_body) : self
	{
		$this->mail_body = $mail_body;
		return $this;
	}

	public function getMailHtml():  ?int
	{
		return $this->mail_html;
	}

	public function setMailHtml(int $mail_html) : self
	{
		$this->mail_html = $mail_html;
		return $this;
	}

	public function getMailSendDateFirst():  ?\DateTimeInterface
	{
		return $this->mail_send_date_first;
	}

	public function setMailSendDateFirst(\DateTimeInterface $mail_send_date_first) : self
	{
		$this->mail_send_date_first = $mail_send_date_first;
		return $this;
	}

	public function getMailSendDateLast():  ?\DateTimeInterface
	{
		return $this->mail_send_date_last;
	}

	public function setMailSendDateLast(\DateTimeInterface $mail_send_date_last) : self
	{
		$this->mail_send_date_last = $mail_send_date_last;
		return $this;
	}

	public function getMailingsSendStatusId():  ?int
	{
		return $this->mailings_send_status_id;
	}

	public function setMailingsSendStatusId(int $mailings_send_status_id) : self
	{
		$this->mailings_send_status_id = $mailings_send_status_id;
		return $this;
	}

	public function getMailingsSendErrorsTypesId():  ?int
	{
		return $this->mailings_send_errors_types_id;
	}

	public function setMailingsSendErrorsTypesId(int $mailings_send_errors_types_id) : self
	{
		$this->mailings_send_errors_types_id = $mailings_send_errors_types_id;
		return $this;
	}

	public function getOrdersId():  ?int
	{
		return $this->orders_id;
	}

	public function setOrdersId(int $orders_id) : self
	{
		$this->orders_id = $orders_id;
		return $this;
	}

	public function getProductsId():  ?int
	{
		return $this->products_id;
	}

	public function setProductsId(int $products_id) : self
	{
		$this->products_id = $products_id;
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