<?php

namespace App\Entity;

use App\Repository\InscritosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InscritosRepository::class)]
class Inscritos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $cursoId = null;

    #[ORM\Column]
    private ?int $userId = null;

    #[ORM\Column(length: 255)]
    private ?string $datetime = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCursoId(): ?int
    {
        return $this->cursoId;
    }

    public function setCursoId(int $cursoId): self
    {
        $this->cursoId = $cursoId;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getDatetime(): ?string
    {
        return $this->datetime;
    }

    public function setDatetime(string $datetime): self
    {
        $this->datetime = $datetime;

        return $this;
    }
}
