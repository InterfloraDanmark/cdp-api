<?php

namespace Interflora\CdpApi\Model;

/**
 * Class OccasionPreference
 *
 * @package Interflora\CdpApi\Model
 */
class OccasionPreference extends AbstractJsonSerializable
{

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var boolean
     */
    protected $selected;

    /**
     * @var boolean
     */
    protected $main;

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
     * @return bool
     */
    public function getSelected(): bool {
        return $this->selected;
    }

    /**
     * @param bool $selected
     *
     * @return self
     */
    public function setSelected(bool $selected): self {
        $this->selected = $selected;

        return $this;
    }

    /**
     * @return bool
     */
    public function isMain(): bool {
        return $this->main;
    }

    /**
     * @param bool $main
     *
     * @return self
     */
    public function setMain(bool $main): self {
        $this->main = $main;

        return $this;
    }

}
