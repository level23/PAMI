<?php

/**
 * Event triggered when a channel leaves a parking lot because it hung up without being answered.
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
 * Event triggered when a channel leaves a parking lot because it hung up without being answered.
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
class ParkedCallGiveUpEvent extends EventMessage
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
     * Returns key: 'ParkeeChannel'.
     *
     * @return string
     */
    public function getParkeeChannel(): string|int|bool|null
    {
        return $this->getKey('ParkeeChannel');
    }

    /**
     * Returns key: 'ParkeeChannelState'.
     *
     * @return string
     */
    public function getParkeeChannelState(): string|int|bool|null
    {
        return $this->getKey('ParkeeChannelState');
    }

    /**
     * Returns key: 'ParkeeChannelStateDesc'.
     *
     * @return string
     */
    public function getParkeeChannelStateDesc(): string|int|bool|null
    {
        return $this->getKey('ParkeeChannelStateDesc');
    }

    /**
     * Returns key: 'ParkeeCallerIDNum'.
     *
     * @return string
     */
    public function getParkeeCallerIDNum(): string|int|bool|null
    {
        return $this->getKey('ParkeeCallerIDNum');
    }

    /**
     * Returns key: 'ParkeeCallerIDName'.
     *
     * @return string
     */
    public function getParkeeCallerIDName(): string|int|bool|null
    {
        return $this->getKey('ParkeeCallerIDName');
    }

    /**
     * Returns key: 'ParkeeConnectedLineNum'.
     *
     * @return string
     */
    public function getParkeeConnectedLineNum(): string|int|bool|null
    {
        return $this->getKey('ParkeeConnectedLineNum');
    }

    /**
     * Returns key: 'ParkeeConnectedLineName'.
     *
     * @return string
     */
    public function getParkeeConnectedLineName(): string|int|bool|null
    {
        return $this->getKey('ParkeeConnectedLineName');
    }

    /**
     * Returns key: 'ParkeeAccountCode'.
     *
     * @return string
     */
    public function getParkeeAccountCode(): string|int|bool|null
    {
        return $this->getKey('ParkeeAccountCode');
    }

    /**
     * Returns key: 'ParkeeContext'.
     *
     * @return string
     */
    public function getParkeeContext(): string|int|bool|null
    {
        return $this->getKey('ParkeeContext');
    }

    /**
     * Returns key: 'ParkeeExten'.
     *
     * @return string
     */
    public function getParkeeExten(): int|bool|string|null
    {
        return $this->getKey('ParkeeExten') ?: $this->getKey('Exten');
    }

    /**
     * Returns key: 'ParkeePriority'.
     *
     * @return string
     */
    public function getParkeePriority(): string|int|bool|null
    {
        return $this->getKey('ParkeePriority');
    }

    /**
     * Returns key: 'ParkeeUniqueid'.
     *
     * @return string
     */
    public function getParkeeUniqueid(): string|int|bool|null
    {
        return $this->getKey('ParkeeUniqueid');
    }

    /**
     * Returns key: 'ParkerChannel'.
     *
     * @return string
     */
    public function getParkerChannel(): string|int|bool|null
    {
        return $this->getKey('ParkerChannel');
    }

    /**
     * Returns key: 'ParkerChannelState'.
     *
     * @return string
     */
    public function getParkerChannelState(): string|int|bool|null
    {
        return $this->getKey('ParkerChannelState');
    }

    /**
     * Returns key: 'ParkerChannelStateDesc'.
     *
     * @return string
     */
    public function getParkerChannelStateDesc(): string|int|bool|null
    {
        return $this->getKey('ParkerChannelStateDesc');
    }

    /**
     * Returns key: 'ParkerCallerIDNum'.
     *
     * @return string
     */
    public function getParkerCallerIDNum(): string|int|bool|null
    {
        return $this->getKey('ParkerCallerIDNum');
    }

    /**
     * Returns key: 'ParkerCallerIDName'.
     *
     * @return string
     */
    public function getParkerCallerIDName(): string|int|bool|null
    {
        return $this->getKey('ParkerCallerIDName');
    }

    /**
     * Returns key: 'ParkerConnectedLineNum'.
     *
     * @return string
     */
    public function getParkerConnectedLineNum(): string|int|bool|null
    {
        return $this->getKey('ParkerConnectedLineNum');
    }

    /**
     * Returns key: 'ParkerConnectedLineName'.
     *
     * @return string
     */
    public function getParkerConnectedLineName(): string|int|bool|null
    {
        return $this->getKey('ParkerConnectedLineName');
    }

    /**
     * Returns key: 'ParkerAccountCode'.
     *
     * @return string
     */
    public function getParkerAccountCode(): string|int|bool|null
    {
        return $this->getKey('ParkerAccountCode');
    }

    /**
     * Returns key: 'ParkerContext'.
     *
     * @return string
     */
    public function getParkerContext(): string|int|bool|null
    {
        return $this->getKey('ParkerContext');
    }

    /**
     * Returns key: 'ParkerExten'.
     *
     * @return string
     */
    public function getParkerExten(): string|int|bool|null
    {
        return $this->getKey('ParkerExten');
    }

    /**
     * Returns key: 'ParkerPriority'.
     *
     * @return string
     */
    public function getParkerPriority(): string|int|bool|null
    {
        return $this->getKey('ParkerPriority');
    }

    /**
     * Returns key: 'ParkerUniqueid'.
     *
     * @return string
     */
    public function getParkerUniqueid(): string|int|bool|null
    {
        return $this->getKey('ParkerUniqueid');
    }

    /**
     * Returns key: 'ParkerDialString'.
     *
     * @return string
     */
    public function getParkerDialString(): string|int|bool|null
    {
        return $this->getKey('ParkerDialString');
    }

    /**
     * Returns key: 'Parkinglot'.
     *
     * @return string
     */
    public function getParkinglot(): string|int|bool|null
    {
        return $this->getKey('Parkinglot');
    }

    /**
     * Returns key: 'ParkingSpace'.
     *
     * @return string
     */
    public function getParkingSpace(): string|int|bool|null
    {
        return $this->getKey('ParkingSpace');
    }

    /**
     * Returns key: 'ParkingTimeout'.
     *
     * @return string
     */
    public function getParkingTimeout(): string|int|bool|null
    {
        return $this->getKey('ParkingTimeout');
    }

    /**
     * Returns key: 'ParkingDuration'.
     *
     * @return string
     */
    public function getParkingDuration(): string|int|bool|null
    {
        return $this->getKey('ParkingDuration');
    }
}
