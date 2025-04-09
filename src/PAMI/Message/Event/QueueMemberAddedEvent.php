<?php

/**
 * Event triggered for a QueueMemberAdd action.
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
 * Event triggered for a QueueMemberAdd action.
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
class QueueMemberAddedEvent extends EventMessage
{
    /**
     * Returns key: 'Privilege'.
     *
     * @return string
     */
    public function getPrivilege(): string|int|bool|null
    {
        return $this->getKey('Privilege');
    }

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
     * Returns key: 'Location'.
     *
     * @return string
     */
    public function getLocation(): string|int|bool|null
    {
        return $this->getKey('Location');
    }

    /**
     * Returns key: 'MemberName'.
     *
     * @return string
     */
    public function getMemberName(): string|int|bool|null
    {
        return $this->getKey('MemberName');
    }

    /**
     * Returns key: 'Membership'.
     *
     * @return string
     */
    public function getMembership(): string|int|bool|null
    {
        return $this->getKey('Membership');
    }

    /**
     * Returns key: 'Penalty'.
     *
     * @return string
     */
    public function getPenalty(): string|int|bool|null
    {
        return $this->getKey('Penalty');
    }

    /**
     * Returns key: 'CallsTaken'.
     *
     * @return string
     */
    public function getCallsTaken(): string|int|bool|null
    {
        return $this->getKey('CallsTaken');
    }

    /**
     * Returns key: 'LastCall'.
     *
     * @return string
     */
    public function getLastCall(): string|int|bool|null
    {
        return $this->getKey('LastCall');
    }

    /**
     * Returns key: 'Status'.
     *
     * @return string
     */
    public function getStatus(): string|int|bool|null
    {
        return $this->getKey('Status');
    }

    /**
     * Returns key: 'Pause'.
     */
    public function getPaused(): bool
    {
        return intval($this->getKey('Paused')) != 0;
    }
}
