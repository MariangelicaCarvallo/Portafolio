<?php

namespace App\Entity;

use App\Repository\ProyectosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProyectosRepository::class)]
class Proyectos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 70, nullable: true)]
    private ?string $proyecto_nombre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $proyecto_descripcion = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $proyecto_fecha = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProyectoNombre(): ?string
    {
        return $this->proyecto_nombre;
    }

    public function setProyectoNombre(?string $proyecto_nombre): self
    {
        $this->proyecto_nombre = $proyecto_nombre;

        return $this;
    }

    public function getProyectoDescripcion(): ?string
    {
        return $this->proyecto_descripcion;
    }

    public function setProyectoDescripcion(?string $proyecto_descripcion): self
    {
        $this->proyecto_descripcion = $proyecto_descripcion;

        return $this;
    }

    public function getProyectoFecha(): ?\DateTimeInterface
    {
        return $this->proyecto_fecha;
    }

    public function setProyectoFecha(\DateTimeInterface $proyecto_fecha): self
    {
        $this->proyecto_fecha = $proyecto_fecha;

        return $this;
    }
}
