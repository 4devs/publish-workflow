<?php

namespace FDevs\PublishWorkflow\Tests;

use FDevs\PublishWorkflow\PublishWorkflow;

class PublishWorkflowTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider publishData
     */
    public function testIsPublish($model, $expected)
    {
        $pw = new PublishWorkflow();
        $this->assertEquals($expected, $pw->isPublish($model));
    }

    /**
     * @dataProvider publishData
     */
    public function testIsPublishable($model, $expected)
    {
        $pw = new PublishWorkflow();
        $this->assertEquals($expected, $pw->isPublish($model));
    }

    /**
     * @dataProvider publishData
     */
    public function testIsPublishStart($model, $expected)
    {
        $pw = new PublishWorkflow();
        $this->assertEquals($expected, $pw->isPublish($model));
    }

    /**
     * @dataProvider publishData
     */
    public function testIsPublishEnd($model, $expected)
    {
        $pw = new PublishWorkflow();
        $this->assertEquals($expected, $pw->isPublish($model));
    }

    /**
     * @return array
     */
    public function publishData()
    {
        return [
            'publish true' => [
                $this->createModel(true),
                true,
            ],
            'publish false' => [
                $this->createModel(false),
                false,
            ],
            'publish true, start -1 year' => [
                $this->createModel(true, new \DateTime('-1 year')),
                true,
            ],
            'publish false, start -1 year' => [
                $this->createModel(false, new \DateTime('-1 year')),
                false,
            ],
            'publish true, start tomorrow' => [
                $this->createModel(true, new \DateTime('tomorrow')),
                false,
            ],
            'publish false, start tomorrow' => [
                $this->createModel(false, new \DateTime('tomorrow')),
                false,
            ],
            'publish true, start tomorrow, end +1 year' => [
                $this->createModel(true, new \DateTime('tomorrow'), new \DateTime('+1 year')),
                false,
            ],
            'publish true, start null, end +1 year' => [
                $this->createModel(true, null, new \DateTime('+1 year')),
                true,
            ],
            'publish true, start null, null' => [
                $this->createModel(true, null, null),
                true,
            ],
            'publish true, start null, end yesterday' => [
                $this->createModel(true, null, new \DateTime('yesterday')),
                false,
            ],
            'publish true, start yesterday, end tomorrow' => [
                $this->createModel(true, new \DateTime('yesterday'), new \DateTime('tomorrow')),
                true,
            ],
            'publish true, start tomorrow, end null' => [
                $this->createModel(true, new \DateTime('tomorrow'), null),
                false,
            ],
            'publish false, start yesterday, end tomorrow' => [
                $this->createModel(false, new \DateTime('yesterday'), new \DateTime('tomorrow')),
                false,
            ],
        ];
    }

    /**
     * @param bool           $publish
     * @param \DateTime|null $start
     * @param \DateTime|null $end
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    private function createModel($publish, \DateTime $start = null, \DateTime $end = null)
    {
        $model = $this->getMock('FDevs\PublishWorkflow\PublishReadInterface');
        $model
            ->expects($this->any())
            ->method('isPublishable')
            ->willReturn($publish)
        ;
        $model
            ->expects($this->any())
            ->method('getPublishStartDate')
            ->willReturn($start)
        ;
        $model
            ->expects($this->any())
            ->method('getPublishEndDate')
            ->willReturn($end)
        ;

        return $model;
    }
}
