<?php

namespace App\Entity\Refresh;

use App\GraphQl\Helper\EntityFieldsHelper;
use App\Repository\Refresh\RefreshTokensRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: RefreshTokensRepository::class)]
#[ORM\Table(name: "refresh_tokens")]
class RefreshTokens
{
    use EntityFieldsHelper;

   	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $refresh_tokens_id = null;

	#[ORM\Column]
	private ?int $bf_users_id = null;

	 #[ORM\Column(length: 255)]
	private ?string $token_id = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $issued_at = null;

	#[ORM\Column(type: Types::DATETIME_MUTABLE)]
	private ?\DateTimeInterface $expires_at = null;

	public function getRefreshTokensId():  ?int
	{
		return $this->refresh_tokens_id;
	}

	public function setRefreshTokensId(int $refresh_tokens_id) : self
	{
		$this->refresh_tokens_id = $refresh_tokens_id;
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

	public function getTokenId():  ?string
	{
		return $this->token_id;
	}

	public function setTokenId(string $token_id) : self
	{
		$this->token_id = $token_id;
		return $this;
	}

	public function getIssuedAt():  ?\DateTimeInterface
	{
		return $this->issued_at;
	}

	public function setIssuedAt(\DateTimeInterface $issued_at) : self
	{
		$this->issued_at = $issued_at;
		return $this;
	}

	public function getExpiresAt():  ?\DateTimeInterface
	{
		return $this->expires_at;
	}

	public function setExpiresAt(\DateTimeInterface $expires_at) : self
	{
		$this->expires_at = $expires_at;
		return $this;
	}


}