<?php

/**
 * Event triggered when a dial is executed.
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

use PAMI\Message\Event\EventMessage;

/**
 * Event triggered when a dial is executed.
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
class DialEvent extends EventMessage
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
     * Returns key: 'SubEvent'.
     *
     * @return string
     */
    public function getSubEvent(): string|int|bool|null
    {
        return $this->getKey('SubEvent');
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
     * Returns key: 'Destination'.
     *
     * @return string
     */
    public function getDestination(): string|int|bool|null
    {
        return $this->getKey('Destination');
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
     * Returns key: 'UniqueID'.
     *
     * @return string
     */
    public function getUniqueID(): string|int|bool|null
    {
        return $this->getKey('UniqueID');
    }

    /**
     * Returns key: 'DestUniqueID'.
     *
     * @return string
     */
    public function getDestUniqueID(): string|int|bool|null
    {
        return $this->getKey('DestUniqueID');
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

    /**
     * Returns key: 'DialStatus'.
     *
     * @return string
     */
    public function getDialStatus(): string|int|bool|null
    {
        return $this->getKey('DialStatus');
    }
}
