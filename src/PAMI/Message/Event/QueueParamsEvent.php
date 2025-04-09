<?php

/**
 * Event triggered for a QueueStatus action.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Event
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       http://marcelog.github.com/PAMI/
 *
 * Copyright 2011 Marcelo Gornstein <marcelog@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace PAMI\Message\Event;

/**
 * Event triggered for a QueueStatus action.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Event
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
 * @link       http://marcelog.github.com/PAMI/
 */
class QueueParamsEvent extends EventMessage
{
    /**
     * Returns key: 'Queue'.
     *
     * @return string
     */
    public function getQueue(): string|int|bool|null
    {
        return $this->getKey('Queue');
    }

    /**
     * Returns key: 'Max'.
     */
    public function getMax(): int
    {
        return intval($this->getKey('Max'));
    }

    /**
     * Returns key: 'Strategy'.
     *
     * @return string
     */
    public function getStrategy(): string|int|bool|null
    {
        return $this->getKey('Strategy');
    }

    /**
     * Returns key: 'Calls'.
     */
    public function getCalls(): int
    {
        return intval($this->getKey('Calls'));
    }

    /**
     * Returns key: 'HoldTime'.
     */
    public function getHoldTime(): int
    {
        return intval($this->getKey('HoldTime'));
    }

    /**
     * Returns key: 'Completed'.
     */
    public function getCompleted(): int
    {
        return intval($this->getKey('Completed'));
    }

    /**
     * Returns key: 'Abandoned'.
     */
    public function getAbandoned(): int
    {
        return intval($this->getKey('Abandoned'));
    }

    /**
     * Returns key: 'ServiceLevel'.
     */
    public function getServiceLevel(): int
    {
        return intval($this->getKey('ServiceLevel'));
    }

    /**
     * Returns key: 'ServiceLevelPerf'.
     *
     * @return string
     */
    public function getServiceLevelPerf(): string|int|bool|null
    {
        return $this->getKey('ServiceLevelPerf');
    }

    /**
     * Returns key: 'Weight'.
     */
    public function getWeight(): int
    {
        return intval($this->getKey('Weight'));
    }
}
