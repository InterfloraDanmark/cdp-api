<?php

namespace Interflora\CdpApi\Model;

class Tag extends AbstractJsonSerializable {

    /**
     * @var string|null
     */
    protected $id;

    /**
     * @var string
     */
    protected $entity_id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @return string|null
     */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntityId(): string {
        return $this->entity_id;
    }

    /**
     * @param string $entity_id
     *
     * @return self
     */
    public function setEntityId(string $entity_id): self {
        $this->entity_id = $entity_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self {
        $this->name = $name;

        return $this;
    }

}
