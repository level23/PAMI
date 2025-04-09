<?php

/**
 * Originate action message.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Action
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

namespace PAMI\Message\Action;

/**
 * Originate action message.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Action
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
 * @link       http://marcelog.github.com/PAMI/
 */
class OriginateAction extends ActionMessage
{
    /**
     * Sets Exten key.
     *
     * @param string $extension Extension to use (requires Context and Priority).
     */
    public function setExtension(string|int|bool $extension): void
    {
        $this->setKey('Exten', $extension);
    }

    /**
     * Sets Context key.
     *
     * @param string $context Context to use (requires Exten and Priority).
     */
    public function setContext(string|int|bool $context): void
    {
        $this->setKey('Context', $context);
    }

    /**
     * Sets Priority key.
     *
     * @param string $priority Priority to use (requires Exten and Context).
     */
    public function setPriority(string|int|bool $priority): void
    {
        $this->setKey('Priority', $priority);
    }

    /**
     * Sets Application key.
     *
     * @param string $application Application to execute.
     */
    public function setApplication(string|int|bool $application): void
    {
        $this->setKey('Application', $application);
    }

    /**
     * Sets Data key.
     *
     * @param string $data Data to use (requires Application).
     */
    public function setData(string|int|bool $data): void
    {
        $this->setKey('Data', $data);
    }

    /**
     * Sets Timeout key.
     *
     * @param integer|string $timeout How long to wait for call to be answered (in ms).
     */
    public function setTimeout(string|int|bool $timeout): void
    {
        $this->setKey('Timeout', $timeout);
    }

    /**
     * Sets CallerID key.
     *
     * @param string $clid Caller ID to be set on the outgoing channel.
     */
    public function setCallerId(string|int|bool $clid): void
    {
        $this->setKey('CallerID', $clid);
    }

    /**
     * Sets Account key.
     *
     * @param string $account Account code.
     */
    public function setAccount(string|int|bool $account): void
    {
        $this->setKey('Account', $account);
    }

    /**
     * Sets Async key.
     *
     * @param bool $async Set to true for fast origination.
     */
    public function setAsync($async): void
    {
        $this->setKey('Async', $async ? 'true' : 'false');
    }

    /**
     * Sets Codecs key.
     *
     * @param string[] $codecs List of codecs to use for this call.
     */
    public function setCodecs(array $codecs): void
    {
        $this->setKey('Codecs', implode(',', $codecs));
    }

    /**
     * Constructor.
     *
     * @param string $channel Channel to call to.
     *
     * @return void
     */
    public function __construct($channel)
    {
        parent::__construct('Originate');
        $this->setKey('Channel', $channel);
    }
}
