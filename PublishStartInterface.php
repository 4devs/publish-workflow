<?php

namespace FDevs\PublishWorkflow;

interface PublishStartInterface extends PublishStartReadInterface
{
    /**
     * set publish start date.
     *
     * @param \DateTimeInterface|null $publishDate
     *
     * @return self
     */
    public function setPublishStartDate(\DateTimeInterface $publishDate = null);
}
