<?php

namespace FDevs\PublishWorkflow\Model;

trait PublishEndTrait
{
    /** @var \DateTimeInterface|null */
    protected $publishEndDate = null;

    /**
     * @return \DateTimeInterface|null
     */
    public function getPublishEndDate()
    {
        return $this->publishEndDate;
    }

    /**
     * @param \DateTimeInterface|null $publishEndDate
     *
     * @return $this
     */
    public function setPublishEndDate(\DateTimeInterface $publishEndDate = null)
    {
        $this->publishEndDate = $publishEndDate;

        return $this;
    }
}
