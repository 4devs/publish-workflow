<?php

namespace FDevs\PublishWorkflow;

interface PublishEndReadInterface
{
    /**
     * get publish end date.
     *
     * @return \DateTimeInterface|null
     */
    public function getPublishEndDate();
}
