<?php

namespace App\Entity\Tracking;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Tracking\TrackingClientsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TrackingClientsRepository::class)]
#[ORM\Table(name: "tracking_clients")]
class TrackingClients
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $tracking_clients_id = null;

	#[ORM\Column(nullable: true)]
	private ?string $active = null;

	#[ORM\Column(length: 32, nullable: true)]
	private ?string $name = null;

	#[ORM\Column(length: 256, nullable: true)]
	private ?string $description = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $last_update = null;

	public function getTrackingClientsId():  ?int
	{
		return $this->tracking_clients_id;
	}

	public function setTrackingClientsId(int $tracking_clients_id) : self
	{
		$this->tracking_clients_id = $tracking_clients_id;
		return $this;
	}

	public function getActive():  ?string
	{
		return $this->active;
	}

	public function setActive(string $active) : self
	{
		$this->active = $active;
		return $this;
	}

	public function getName():  ?string
	{
		return $this->name;
	}

	public function setName(string $name) : self
	{
		$this->name = $name;
		return $this;
	}

	public function getDescription():  ?string
	{
		return $this->description;
	}

	public function setDescription(string $description) : self
	{
		$this->description = $description;
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


}