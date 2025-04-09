<?php

/**
 * Event triggered when exchanging rtp stats.
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
 * Event triggered when exchanging rtp stats.
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
class RTCPSentEvent extends EventMessage
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
     * Returns key: 'To'.
     *
     * @return string
     */
    public function getTo(): string|int|bool|null
    {
        return $this->getKey('To');
    }

    /**
     * Returns key: 'OurSSRC'.
     *
     * @return string
     */
    public function getOurSSRC(): string|int|bool|null
    {
        return $this->getKey('OurSSRC');
    }

    /**
     * Returns key: 'SentNTP'.
     *
     * @return string
     */
    public function getSentNTP(): string|int|bool|null
    {
        return $this->getKey('SentNTP');
    }

    /**
     * Returns key: 'SentRTP'.
     *
     * @return string
     */
    public function getSentRTP(): string|int|bool|null
    {
        return $this->getKey('SentRTP');
    }

    /**
     * Returns key: 'SentPackets'.
     *
     * @return string
     */
    public function getSentPackets(): string|int|bool|null
    {
        return $this->getKey('SentPackets');
    }

    /**
     * Returns key: 'SentOctets'.
     *
     * @return string
     */
    public function getSentOctets(): string|int|bool|null
    {
        return $this->getKey('SentOctets');
    }

    /**
     * Returns key: 'ReportBlock'.
     *
     * @return string
     */
    public function getReportBlock(): string|int|bool|null
    {
        return $this->getKey('ReportBlock');
    }

    /**
     * Returns key: 'FractionLost'.
     *
     * @return string
     */
    public function getFractionLost(): string|int|bool|null
    {
        return $this->getKey('FractionLost');
    }

    /**
     * Returns key: 'CumulativeLoss'.
     *
     * @return string
     */
    public function getCumulativeLoss(): string|int|bool|null
    {
        return $this->getKey('CumulativeLoss');
    }

    /**
     * Returns key: 'IAJitter'.
     *
     * @return string
     */
    public function getIAJitter(): string|int|bool|null
    {
        return $this->getKey('IAJitter');
    }

    /**
     * Returns key: 'TheirLastSR'.
     *
     * @return string
     */
    public function getTheirLastSR(): string|int|bool|null
    {
        return $this->getKey('TheirLastSR');
    }

    /**
     * Returns key: 'DLSR'.
     *
     * @return string
     */
    public function getDLSR(): string|int|bool|null
    {
        return $this->getKey('DLSR');
    }
}
