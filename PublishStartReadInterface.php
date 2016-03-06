<?php

namespace FDevs\PublishWorkflow;

interface PublishStartReadInterface
{
    /**
     * get publish start date.
     *
     * @return \DateTimeInterface|null
     */
    public function getPublishStartDate();
}
