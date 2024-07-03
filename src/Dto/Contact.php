<?php

namespace App\Dto;

use Symfony\Component\Validator\Constraints as Assert;

class Contact
{
    #[Assert\Length(min: 3, max: 255)]
    #[Assert\NotBlank()]
    protected ?string $name = null;

    #[Assert\Email()]
    #[Assert\NotBlank()]
    #[Assert\Regex('/\.fr$/', message: 'This value should end with ".fr"')]
    protected ?string $email = null;

    #[Assert\Length(min: 3, max: 255)]
    #[Assert\NotBlank()]
    protected ?string $subject = null;

    #[Assert\Length(min: 20, max: 1000)]
    #[Assert\NotBlank()]
    protected ?string $message = null;
    protected ?\DateTimeImmutable $createdAt = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): Contact
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): Contact
    {
        $this->email = $email;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): Contact
    {
        $this->subject = $subject;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): Contact
    {
        $this->message = $message;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeImmutable $createdAt): Contact
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
