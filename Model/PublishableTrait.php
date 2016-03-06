<?php

namespace FDevs\PublishWorkflow\Model;

trait PublishableTrait
{
    /** @var bool */
    protected $publishable = false;

    /**
     * @return bool
     */
    public function isPublishable()
    {
        return $this->publishable;
    }

    /**
     * @param bool $publishable
     *
     * @return $this
     */
    public function setPublishable($publishable)
    {
        $this->publishable = (bool) $publishable;

        return $this;
    }
}
