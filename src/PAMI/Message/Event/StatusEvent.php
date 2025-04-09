<?php

/**
 * Event triggered when an action Status is issued.
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
 * Event triggered when an action Status is issued.
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
class StatusEvent extends EventMessage
{
    /**
     * Returns key: 'BridgedUniqueID'.
     *
     * @return string
     */
    public function getBridgedUniqueID(): string|int|bool|null
    {
        return $this->getKey('BridgedUniqueID');
    }

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
     * Returns key: 'Context'.
     *
     * @return string
     */
    public function getContext(): string|int|bool|null
    {
        return $this->getKey('Context');
    }

    /**
     * Returns key: 'Extension'.
     *
     * @return string
     */
    public function getExtension(): string|int|bool|null
    {
        return $this->getKey('Extension');
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
     * Returns key: 'Priority'.
     *
     * @return string
     */
    public function getPriority(): string|int|bool|null
    {
        return $this->getKey('Priority');
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
     * Returns key: 'Application'.
     *
     * @return string
     */
    public function getApplication(): string|int|bool|null
    {
        return $this->getKey('Application');
    }

    /**
     * Returns key: 'ApplicationData'.
     *
     * @return string
     */
    public function getApplicationData(): string|int|bool|null
    {
        return $this->getKey('ApplicationData');
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
     * Returns key: 'Duration'.
     *
     * @return string
     */
    public function getDuration(): string|int|bool|null
    {
        return $this->getKey('Duration');
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
     * Returns key: 'Seconds'.
     *
     * @return string
     */
    public function getSeconds(): string|int|bool|null
    {
        return $this->getKey('Seconds');
    }

    /**
     * Returns key: 'BridgedChannel'.
     *
     * @return string
     */
    public function getBridgedChannel(): string|int|bool|null
    {
        return $this->getKey('BridgedChannel');
    }
}
