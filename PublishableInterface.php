<?php

namespace FDevs\PublishWorkflow;

interface PublishableInterface extends PublishableReadInterface
{
    /**
     * set content is publishable.
     *
     * @param bool $publishable
     *
     * @return self
     */
    public function setPublishable($publishable);
}
