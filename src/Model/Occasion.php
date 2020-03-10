<?php

namespace Interflora\CdpApi\Model;

/**
 * Class Occasion
 *
 * @package Interflora\CdpApi\Model
 */
class Occasion extends AbstractJsonSerializable
{

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $accountId;

    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string
     */
    protected $targetName;

    /**
     * @var string
     */
    protected $occasionType;

    /**
     * @var string
     */
    protected $date;

    /**
     * @var string
     */
    protected $dateNext;

    /**
     * @var boolean
     */
    protected $single;

    /**
     * @var boolean
     */
    protected $commemoration;

    /**
     * @var boolean
     */
    protected $deleted;

    /**
     * @var \Interflora\CdpApi\Model\OccasionPreference[]
     */
    protected $occasionPreference = [];

    /**
     * @return string|null
     */
    public function getId():? string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountId(): string {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     *
     * @return self
     */
    public function setAccountId(string $accountId): self {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getTargetName(): string {
        return $this->targetName;
    }

    /**
     * @param string $targetName
     *
     * @return self
     */
    public function setTargetName(string $targetName): self {
        $this->targetName = $targetName;

        return $this;
    }

    /**
     * @return string
     */
    public function getOccasionType(): string {
        return $this->occasionType;
    }

    /**
     * @param string $occasionType
     *
     * @return self
     */
    public function setOccasionType(string $occasionType): self {
        $this->occasionType = $occasionType;

        return $this;
    }

    /**
     * @return string
     */
    public function getDate(): string {
        return $this->date;
    }

    /**
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date): self {
        $this->date = $date;

        return $this;
    }

    /**
     * @return string
     */
    public function getDateNext(): string {
        return $this->dateNext;
    }

    /**
     * @param string $dateNext
     *
     * @return self
     */
    public function setDateNext(string $dateNext): self {
        $this->dateNext = $dateNext;

        return $this;
    }

    /**
     * @return bool
     */
    public function isSingle(): bool {
        return $this->single;
    }

    /**
     * @param bool $single
     *
     * @return self
     */
    public function setSingle(bool $single): self {
        $this->single = $single;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCommemoration(): bool {
        return $this->commemoration;
    }

    /**
     * @param bool $commemoration
     *
     * @return self
     */
    public function setCommemoration(bool $commemoration): self {
        $this->commemoration = $commemoration;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDeleted(): bool {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     *
     * @return self
     */
    public function setDeleted(bool $deleted): self {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * @return \Interflora\CdpApi\Model\OccasionPreference[]
     */
    public function getOccasionPreferences(): array {
        return $this->occasionPreference;
    }

    /**
     * @param \Interflora\CdpApi\Model\OccasionPreference[] $occasionPreferences
     *
     * @return self
     */
    public function setOccasionPreferences(array $occasionPreferences): self {
        $this->occasionPreference = $occasionPreferences;

      return $this;
    }

}
