<?php

namespace FDevs\PublishWorkflow\Model;

trait PublishStartTrait
{
    /** @var \DateTimeInterface|null */
    protected $publishStartDate = null;

    /**
     * @return \DateTimeInterface|null
     */
    public function getPublishStartDate()
    {
        return $this->publishStartDate;
    }

    /**
     * @param \DateTimeInterface|null $publishStartDate
     *
     * @return $this
     */
    public function setPublishStartDate(\DateTimeInterface $publishStartDate = null)
    {
        $this->publishStartDate = $publishStartDate;

        return $this;
    }
}
