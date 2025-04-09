<?php

/**
 * Event triggered when a dial action has started.
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
 * Event triggered when a dial action has started.
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
class DialBeginEvent extends EventMessage
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
     * Returns key: 'CallerIDNum'.
     *
     * @return string
     */
    public function getCallerIDNum(): string|int|bool|null
    {
        return $this->getKey('CallerIDNum');
    }

    /**
     * Returns key: 'CallerIDName'.
     *
     * @return string
     */
    public function getCallerIDName(): string|int|bool|null
    {
        return $this->getKey('CallerIDName');
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
     * Returns key: 'AccountCode'.
     *
     * @return string
     */
    public function getAccountCode(): string|int|bool|null
    {
        return $this->getKey('AccountCode');
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
     * Returns key: 'Exten'.
     *
     * @return string
     */
    public function getExten(): string|int|bool|null
    {
        return $this->getKey('Exten');
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

    /**
     * Returns key: 'Uniqueid'.
     *
     * @return string
     */
    public function getUniqueid(): string|int|bool|null
    {
        return $this->getKey('Uniqueid');
    }

    /**
     * Returns key: 'DestChannel'.
     *
     * @return string
     */
    public function getDestChannel(): string|int|bool|null
    {
        return $this->getKey('DestChannel');
    }

    /**
     * Returns key: 'DestChannelState'.
     *
     * @return string
     */
    public function getDestChannelState(): string|int|bool|null
    {
        return $this->getKey('DestChannelState');
    }

    /**
     * Returns key: 'DestChannelStateDesc'.
     *
     * @return string
     */
    public function getDestChannelStateDesc(): string|int|bool|null
    {
        return $this->getKey('DestChannelStateDesc');
    }

    /**
     * Returns key: 'DestCallerIDNum'.
     *
     * @return string
     */
    public function getDestCallerIDNum(): string|int|bool|null
    {
        return $this->getKey('DestCallerIDNum');
    }

    /**
     * Returns key: 'DestCallerIDName'.
     *
     * @return string
     */
    public function getDestCallerIDName(): string|int|bool|null
    {
        return $this->getKey('DestCallerIDName');
    }

    /**
     * Returns key: 'DestConnectedLineNum'.
     *
     * @return string
     */
    public function getDestConnectedLineNum(): string|int|bool|null
    {
        return $this->getKey('DestConnectedLineNum');
    }

    /**
     * Returns key: 'DestConnectedLineName'.
     *
     * @return string
     */
    public function getDestConnectedLineName(): string|int|bool|null
    {
        return $this->getKey('DestConnectedLineName');
    }

    /**
     * Returns key: 'DestAccountCode'.
     *
     * @return string
     */
    public function getDestAccountCode(): string|int|bool|null
    {
        return $this->getKey('DestAccountCode');
    }

    /**
     * Returns key: 'DestContext'.
     *
     * @return string
     */
    public function getDestContext(): string|int|bool|null
    {
        return $this->getKey('DestContext');
    }

    /**
     * Returns key: 'DestExten'.
     *
     * @return string
     */
    public function getDestExten(): string|int|bool|null
    {
        return $this->getKey('DestExten');
    }

    /**
     * Returns key: 'DestPriority'.
     *
     * @return string
     */
    public function getDestPriority(): string|int|bool|null
    {
        return $this->getKey('DestPriority');
    }

    /**
     * Returns key: 'DestUniqueid'.
     *
     * @return string
     */
    public function getDestUniqueid(): string|int|bool|null
    {
        return $this->getKey('DestUniqueid');
    }

    /**
     * Returns key: 'DialStatus'.
     *
     * @return string
     */
    public function getDialStatus(): string|int|bool|null
    {
        return $this->getKey('DialStatus');
    }

    /**
     * Returns key: 'DialString'.
     *
     * @return string
     */
    public function getDialString(): string|int|bool|null
    {
        return $this->getKey('DialString');
    }
}
