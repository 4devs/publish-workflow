<?php

namespace FDevs\PublishWorkflow;

interface PublishableReadInterface
{
    /**
     * content is publishable at all.
     *
     * @return bool
     */
    public function isPublishable();
}
