<?php

/**
 * Event triggered when a caller joins a Queue.
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
 * Event triggered when a caller joins a Queue.
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
class QueueCallerJoinEvent extends EventMessage
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
     * Returns key: 'Channel'.
     *
     * @return string
     */
    public function getChannel(): string|int|bool|null
    {
        return $this->getKey('Channel');
    }

    /**
     * Returns key: 'ChannelState'.
     *
     * @return string
     */
    public function getChannelState(): string|int|bool|null
    {
        return $this->getKey('ChannelState');
    }

    /**
     * Returns key: 'ChannelStateDesc'.
     *
     * @return string
     */
    public function getChannelStateDesc(): string|int|bool|null
    {
        return $this->getKey('ChannelStateDesc');
    }

    /**
     * Returns key: 'Count'.
     *
     * @return string
     */
    public function getCount(): string|int|bool|null
    {
        return $this->getKey('Count');
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
     * Returns key: 'Position'.
     *
     * @return string
     */
    public function getPosition(): string|int|bool|null
    {
        return $this->getKey('Position');
    }

    /**
     * Returns key: 'UniqueID'.
     *
     * @return string
     */
    public function getUniqueID(): string|int|bool|null
    {
        return $this->getKey('UniqueID');
    }

    /**
     * Returns key: 'CallerIdNum'.
     *
     * @return string
     */
    public function getCallerIdNum(): string|int|bool|null
    {
        return $this->getKey('CallerIdNum');
    }

    /**
     * Returns key: 'CallerIdName'.
     *
     * @return string
     */
    public function getCallerIdName(): string|int|bool|null
    {
        return $this->getKey('CallerIdName');
    }

    /**
     * Returns key: 'ConnectedLineNum'.
     *
     * @return string
     */
    public function getConnectedLineNum(): string|int|bool|null
    {
        return $this->getKey('ConnectedLineNum');
    }

    /**
     * Returns key: 'ConnectedLineName'.
     *
     * @return string
     */
    public function getConnectedLineName(): string|int|bool|null
    {
        return $this->getKey('ConnectedLineName');
    }

    /**
     * Returns key: 'Exten'.
     *
     * @return string
     */
    public function getExten(): string|int|bool|null
    {
        return $this->getKey('Exten');
    }

    /**
     * Returns key: 'Context'.
     *
     * @return string
     */
    public function getContext(): string|int|bool|null
    {
        return $this->getKey('Context');
    }

    /**
     * Returns key: 'AccountCode'.
     *
     * @return string
     */
    public function getAccountCode(): string|int|bool|null
    {
        return $this->getKey('AccountCode');
    }

    /**
     * Returns key: 'Priority'.
     *
     * @return string
     */
    public function getPriority(): string|int|bool|null
    {
        return $this->getKey('Priority');
    }
}
