<?php

namespace FDevs\PublishWorkflow;

interface PublishEndInterface extends PublishEndReadInterface
{
    /**
     * set publish and date.
     *
     * @param \DateTimeInterface|null $publishDate
     *
     * @return self
     */
    public function setPublishEndDate(\DateTimeInterface $publishDate = null);
}
