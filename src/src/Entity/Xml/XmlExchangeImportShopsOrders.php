<?php

namespace App\Entity\Xml;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Xml\XmlExchangeImportShopsOrdersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: XmlExchangeImportShopsOrdersRepository::class)]
#[ORM\Table(name: "xml_exchange_import_shops_orders")]
class XmlExchangeImportShopsOrders
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $xml_exchange_import_shops_orders_id = null;

	#[ORM\Column]
	private ?int $shops_id = null;

	#[ORM\Column(length: 64, nullable: true)]
	private ?string $shops_orders_id = null;

	#[ORM\Column]
	private ?string $orders_xml_data = null;

	#[ORM\Column]
	private ?string $processed = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $error = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $date_insert = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	#[ORM\Column(nullable: true)]
	private ?int $last_updater = null;

	public function getXmlExchangeImportShopsOrdersId():  ?int
	{
		return $this->xml_exchange_import_shops_orders_id;
	}

	public function setXmlExchangeImportShopsOrdersId(int $xml_exchange_import_shops_orders_id) : self
	{
		$this->xml_exchange_import_shops_orders_id = $xml_exchange_import_shops_orders_id;
		return $this;
	}

	public function getShopsId():  ?int
	{
		return $this->shops_id;
	}

	public function setShopsId(int $shops_id) : self
	{
		$this->shops_id = $shops_id;
		return $this;
	}

	public function getShopsOrdersId():  ?string
	{
		return $this->shops_orders_id;
	}

	public function setShopsOrdersId(string $shops_orders_id) : self
	{
		$this->shops_orders_id = $shops_orders_id;
		return $this;
	}

	public function getOrdersXmlData():  ?string
	{
		return $this->orders_xml_data;
	}

	public function setOrdersXmlData(string $orders_xml_data) : self
	{
		$this->orders_xml_data = $orders_xml_data;
		return $this;
	}

	public function getProcessed():  ?string
	{
		return $this->processed;
	}

	public function setProcessed(string $processed) : self
	{
		$this->processed = $processed;
		return $this;
	}

	public function getError():  ?string
	{
		return $this->error;
	}

	public function setError(string $error) : self
	{
		$this->error = $error;
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