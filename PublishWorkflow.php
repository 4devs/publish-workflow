<?php

namespace FDevs\PublishWorkflow;

class PublishWorkflow
{
    /**
     * @param PublishableReadInterface $object
     * @param \DateTimeInterface|null  $currentDate
     *
     * @return bool
     */
    public function isPublish(PublishableReadInterface $object, \DateTimeInterface $currentDate = null)
    {
        $publish = $object->isPublishable();
        if ($publish && $object instanceof PublishStartReadInterface) {
            $publish = $this->isPublishStart($object, $currentDate);
        }
        if ($publish && $object instanceof PublishEndReadInterface) {
            $publish = $this->isPublishEnd($object, $currentDate);
        }

        return $publish;
    }

    /**
     * @param PublishableReadInterface $object
     *
     * @return bool
     */
    public function isPublishable(PublishableReadInterface $object)
    {
        return $object->isPublishable();
    }

    /**
     * @param PublishStartReadInterface $object
     * @param \DateTimeInterface|null   $currentDate
     *
     * @return bool
     */
    public function isPublishStart(PublishStartReadInterface $object, \DateTimeInterface $currentDate = null)
    {
        $startDate = $object->getPublishStartDate();
        $currentDate = $currentDate ?: new \DateTime();

        return null !== $startDate && $currentDate < $startDate;
    }

    /**
     * @param PublishEndReadInterface $object
     * @param \DateTimeInterface|null $currentDate
     *
     * @return bool
     */
    public function isPublishEnd(PublishEndReadInterface $object, \DateTimeInterface $currentDate = null)
    {
        $endDate = $object->getPublishEndDate();
        $currentDate = $currentDate ?: new \DateTime();

        return null !== $endDate && $currentDate > $endDate;
    }
}
