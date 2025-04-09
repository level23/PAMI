<?php

/**
 * Event triggered when a call is transfered.
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
 * Event triggered when an attended transfer is complete.
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
class AttendedTransferEvent extends EventMessage
{
    public const RESULT_FAIL = 'Fail';
    public const RESULT_INVALID = 'Invalid';
    public const RESULT_NOT_PERMITTED = 'Not Permitted';
    public const RESULT_SUCCESS = 'Success';

    /**
     * Returns key: 'Result'.
     * Result - Indicates if the transfer was successful or if it failed.
     *
     * - Fail - An internal error occurred.
     * - Invalid - Invalid configuration for transfer (e.g. Not bridged)
     * - Not Permitted - Bridge does not permit transfers
     * - Success - Transfer completed successfully
     *
     * @return string
     */
    public function getResult(): string|int|bool|null
    {
        return $this->getKey('Result');
    }

    /**
     * Returns key: 'OrigTransfererChannel'.
     *
     * @return string
     */
    public function getOrigTransfererChannel(): string|int|bool|null
    {
        return $this->getKey('OrigTransfererChannel');
    }

    /**
     * Returns key: 'OrigTransfererChannelState'.
     *
     * @return string
     */
    public function getOrigTransfererChannelState(): string|int|bool|null
    {
        return $this->getKey('OrigTransfererChannelState');
    }

    /**
     * Returns key: 'OrigTransfererChannelStateDesc'.
     *
     * Down
     * Rsrvd
     * OffHook
     * Dialing
     * Ring
     * Ringing
     * Up
     * Busy
     * Dialing Offhook
     * Pre-ring
     * Unknown
     *
     * @return string
     */
    public function getOrigTransfererChannelStateDesc(): string|int|bool|null
    {
        return $this->getKey('OrigTransfererChannelStateDesc');
    }

    /**
     * Returns key: 'OrigTransfererCallerIDNum'.
     *
     * @return string
     */
    public function getOrigTransfererCallerIDNum(): string|int|bool|null
    {
        return $this->getKey('OrigTransfererCallerIDNum');
    }

    /**
     * Returns key: 'OrigTransfererCallerIDName'.
     *
     * @return string
     */
    public function getOrigTransfererCallerIDName(): string|int|bool|null
    {
        return $this->getKey('OrigTransfererCallerIDName');
    }

    /**
     * Returns key: 'OrigTransfererConnectedLineNum'.
     *
     * @return string
     */
    public function getOrigTransfererConnectedLineNum(): string|int|bool|null
    {
        return $this->getKey('OrigTransfererConnectedLineNum');
    }

    /**
     * Returns key: 'OrigTransfererConnectedLineName'.
     *
     * @return string
     */
    public function getOrigTransfererConnectedLineName(): string|int|bool|null
    {
        return $this->getKey('OrigTransfererConnectedLineName');
    }

    /**
     * Returns key: 'OrigTransfererAccountCode'.
     *
     * @return string
     */
    public function getOrigTransfererAccountCode(): string|int|bool|null
    {
        return $this->getKey('OrigTransfererAccountCode');
    }

    /**
     * Returns key: 'OrigTransfererContext'.
     *
     * @return string
     */
    public function getOrigTransfererContext(): string|int|bool|null
    {
        return $this->getKey('OrigTransfererContext');
    }

    /**
     * Returns key: 'OrigTransfererExten'.
     *
     * @return string
     */
    public function getOrigTransfererExten(): string|int|bool|null
    {
        return $this->getKey('OrigTransfererExten');
    }

    /**
     * Returns key: 'OrigTransfererPriority'.
     *
     * @return string
     */
    public function getOrigTransfererPriority(): string|int|bool|null
    {
        return $this->getKey('OrigTransfererPriority');
    }

    /**
     * Returns key: 'OrigTransfererUniqueid'.
     *
     * @return string
     */
    public function getOrigTransfererUniqueid(): string|int|bool|null
    {
        return $this->getKey('OrigTransfererUniqueid');
    }

    /**
     * Returns key: 'OrigBridgeUniqueid'.
     *
     * @return string
     */
    public function getOrigBridgeUniqueid(): string|int|bool|null
    {
        return $this->getKey('OrigBridgeUniqueid');
    }

    /**
     * Returns key: 'OrigBridgeType'.
     *
     * @return string
     */
    public function getOrigBridgeType(): string|int|bool|null
    {
        return $this->getKey('OrigBridgeType');
    }

    /**
     * Returns key: 'OrigBridgeTechnology'.
     *
     * @return string
     */
    public function getOrigBridgeTechnology(): string|int|bool|null
    {
        return $this->getKey('OrigBridgeTechnology');
    }

    /**
     * Returns key: 'OrigBridgeCreator'.
     *
     * @return string
     */
    public function getOrigBridgeCreator(): string|int|bool|null
    {
        return $this->getKey('OrigBridgeCreator');
    }

    /**
     * Returns key: 'OrigBridgeName'.
     *
     * @return string
     */
    public function getOrigBridgeName(): string|int|bool|null
    {
        return $this->getKey('OrigBridgeName');
    }

    /**
     * Returns key: 'OrigBridgeNumChannels'.
     *
     * @return string
     */
    public function getOrigBridgeNumChannels(): string|int|bool|null
    {
        return $this->getKey('OrigBridgeNumChannels');
    }

    /**
     * Returns key: 'SecondTransfererChannel'.
     *
     * @return string
     */
    public function getSecondTransfererChannel(): string|int|bool|null
    {
        return $this->getKey('SecondTransfererChannel');
    }

    /**
     * Returns key: 'SecondTransfererChannelState'.
     *
     * @return string
     */
    public function getSecondTransfererChannelState(): string|int|bool|null
    {
        return $this->getKey('SecondTransfererChannelState');
    }

    /**
     * Returns key: 'SecondTransfererChannelStateDesc'.
     *
     * Down
     * Rsrvd
     * OffHook
     * Dialing
     * Ring
     * Ringing
     * Up
     * Busy
     * Dialing Offhook
     * Pre-ring
     * Unknown
     *
     * @return string
     */
    public function getSecondTransfererChannelStateDesc(): string|int|bool|null
    {
        return $this->getKey('SecondTransfererChannelStateDesc');
    }

    /**
     * Returns key: 'SecondTransfererCallerIDNum'.
     *
     * @return string
     */
    public function getSecondTransfererCallerIDNum(): string|int|bool|null
    {
        return $this->getKey('SecondTransfererCallerIDNum');
    }

    /**
     * Returns key: 'SecondTransfererCallerIDName'.
     *
     * @return string
     */
    public function getSecondTransfererCallerIDName(): string|int|bool|null
    {
        return $this->getKey('SecondTransfererCallerIDName');
    }

    /**
     * Returns key: 'SecondTransfererConnectedLineNum'.
     *
     * @return string
     */
    public function getSecondTransfererConnectedLineNum(): string|int|bool|null
    {
        return $this->getKey('SecondTransfererConnectedLineNum');
    }

    /**
     * Returns key: 'SecondTransfererConnectedLineName'.
     *
     * @return string
     */
    public function getSecondTransfererConnectedLineName(): string|int|bool|null
    {
        return $this->getKey('SecondTransfererConnectedLineName');
    }

    /**
     * Returns key: 'SecondTransfererAccountCode'.
     *
     * @return string
     */
    public function getSecondTransfererAccountCode(): string|int|bool|null
    {
        return $this->getKey('SecondTransfererAccountCode');
    }

    /**
     * Returns key: 'SecondTransfererContext'.
     *
     * @return string
     */
    public function getSecondTransfererContext(): string|int|bool|null
    {
        return $this->getKey('SecondTransfererContext');
    }

    /**
     * Returns key: 'SecondTransfererExten'.
     *
     * @return string
     */
    public function getSecondTransfererExten(): string|int|bool|null
    {
        return $this->getKey('SecondTransfererExten');
    }

    /**
     * Returns key: 'SecondTransfererPriority'.
     *
     * @return string
     */
    public function getSecondTransfererPriority(): string|int|bool|null
    {
        return $this->getKey('SecondTransfererPriority');
    }

    /**
     * Returns key: 'SecondTransfererUniqueid'.
     *
     * @return string
     */
    public function getSecondTransfererUniqueid(): string|int|bool|null
    {
        return $this->getKey('SecondTransfererUniqueid');
    }

    /**
     * Returns key: 'SecondBridgeUniqueid'.
     *
     * @return string
     */
    public function getSecondBridgeUniqueid(): string|int|bool|null
    {
        return $this->getKey('SecondBridgeUniqueid');
    }

    /**
     * Returns key: 'SecondBridgeType'.
     *
     * @return string
     */
    public function getSecondBridgeType(): string|int|bool|null
    {
        return $this->getKey('SecondBridgeType');
    }

    /**
     * Returns key: 'SecondBridgeTechnology'.
     *
     * @return string
     */
    public function getSecondBridgeTechnology(): string|int|bool|null
    {
        return $this->getKey('SecondBridgeTechnology');
    }

    /**
     * Returns key: 'SecondBridgeCreator'.
     *
     * @return string
     */
    public function getSecondBridgeCreator(): string|int|bool|null
    {
        return $this->getKey('SecondBridgeCreator');
    }

    /**
     * Returns key: 'SecondBridgeName'.
     *
     * @return string
     */
    public function getSecondBridgeName(): string|int|bool|null
    {
        return $this->getKey('SecondBridgeName');
    }

    /**
     * Returns key: 'SecondBridgeNumChannels'.
     *
     * @return string
     */
    public function getSecondBridgeNumChannels(): string|int|bool|null
    {
        return $this->getKey('SecondBridgeNumChannels');
    }

    /**
     * Returns key: 'DestType'.
     * DestType - Indicates the method by which the attended transfer completed.
     *
     * Bridge - The transfer was accomplished by merging two bridges into one.
     * App - The transfer was accomplished by having a channel or bridge run a dialplan application.
     * Link - The transfer was accomplished by linking two bridges together using a local channel pair.
     * Threeway - The transfer was accomplished by placing all parties into a threeway call.
     * Fail - The transfer failed.
     *
     * @return string
     */
    public function getDestType(): string|int|bool|null
    {
        return $this->getKey('DestType');
    }

    /**
     * Returns key: 'DestBridgeUniqueid'.
     *
     * @return string
     */
    public function getDestBridgeUniqueid(): string|int|bool|null
    {
        return $this->getKey('DestBridgeUniqueid');
    }

    /**
     * Returns key: 'DestApp'.
     *
     * @return string
     */
    public function getDestApp(): string|int|bool|null
    {
        return $this->getKey('DestApp');
    }

    /**
     * Returns key: 'LocalOneChannel'.
     *
     * @return string
     */
    public function getLocalOneChannel(): string|int|bool|null
    {
        return $this->getKey('LocalOneChannel');
    }

    /**
     * Returns key: 'LocalOneChannelState'.
     *
     * @return string
     */
    public function getLocalOneChannelState(): string|int|bool|null
    {
        return $this->getKey('LocalOneChannelState');
    }

    /**
     * Returns key: 'LocalOneChannelStateDesc'.
     *
     * @return string
     */
    public function getLocalOneChannelStateDesc(): string|int|bool|null
    {
        return $this->getKey('LocalOneChannelStateDesc');
    }

    /**
     * Returns key: 'LocalOneCallerIDNum'.
     *
     * @return string
     */
    public function getLocalOneCallerIDNum(): string|int|bool|null
    {
        return $this->getKey('LocalOneCallerIDNum');
    }

    /**
     * Returns key: 'LocalOneCallerIDName'.
     *
     * @return string
     */
    public function getLocalOneCallerIDName(): string|int|bool|null
    {
        return $this->getKey('LocalOneCallerIDName');
    }

    /**
     * Returns key: 'LocalOneConnectedLineNum'.
     *
     * @return string
     */
    public function getLocalOneConnectedLineNum(): string|int|bool|null
    {
        return $this->getKey('LocalOneConnectedLineNum');
    }

    /**
     * Returns key: 'LocalOneConnectedLineName'.
     *
     * @return string
     */
    public function getLocalOneConnectedLineName(): string|int|bool|null
    {
        return $this->getKey('LocalOneConnectedLineName');
    }

    /**
     * Returns key: 'LocalOneAccountCode'.
     *
     * @return string
     */
    public function getLocalOneAccountCode(): string|int|bool|null
    {
        return $this->getKey('LocalOneAccountCode');
    }

    /**
     * Returns key: 'LocalOneContext'.
     *
     * @return string
     */
    public function getLocalOneContext(): string|int|bool|null
    {
        return $this->getKey('LocalOneContext');
    }

    /**
     * Returns key: 'LocalOneExten'.
     *
     * @return string
     */
    public function getLocalOneExten(): string|int|bool|null
    {
        return $this->getKey('LocalOneExten');
    }

    /**
     * Returns key: 'LocalOnePriority'.
     *
     * @return string
     */
    public function getLocalOnePriority(): string|int|bool|null
    {
        return $this->getKey('LocalOnePriority');
    }

    /**
     * Returns key: 'LocalOneUniqueid'.
     *
     * @return string
     */
    public function getLocalOneUniqueid(): string|int|bool|null
    {
        return $this->getKey('LocalOneUniqueid');
    }

    /**
     * Returns key: 'LocalTwoChannel'.
     *
     * @return string
     */
    public function getLocalTwoChannel(): string|int|bool|null
    {
        return $this->getKey('LocalTwoChannel');
    }

    /**
     * Returns key: 'LocalTwoChannelState'.
     *
     * @return string
     */
    public function getLocalTwoChannelState(): string|int|bool|null
    {
        return $this->getKey('LocalTwoChannelState');
    }

    /**
     * Returns key: 'LocalTwoChannelStateDesc'.
     *
     * @return string
     */
    public function getLocalTwoChannelStateDesc(): string|int|bool|null
    {
        return $this->getKey('LocalTwoChannelStateDesc');
    }

    /**
     * Returns key: 'LocalTwoCallerIDNum'.
     *
     * @return string
     */
    public function getLocalTwoCallerIDNum(): string|int|bool|null
    {
        return $this->getKey('LocalTwoCallerIDNum');
    }

    /**
     * Returns key: 'LocalTwoCallerIDName'.
     *
     * @return string
     */
    public function getLocalTwoCallerIDName(): string|int|bool|null
    {
        return $this->getKey('LocalTwoCallerIDName');
    }

    /**
     * Returns key: 'LocalTwoConnectedLineNum'.
     *
     * @return string
     */
    public function getLocalTwoConnectedLineNum(): string|int|bool|null
    {
        return $this->getKey('LocalTwoConnectedLineNum');
    }

    /**
     * Returns key: 'LocalTwoConnectedLineName'.
     *
     * @return string
     */
    public function getLocalTwoConnectedLineName(): string|int|bool|null
    {
        return $this->getKey('LocalTwoConnectedLineName');
    }

    /**
     * Returns key: 'LocalTwoAccountCode'.
     *
     * @return string
     */
    public function getLocalTwoAccountCode(): string|int|bool|null
    {
        return $this->getKey('LocalTwoAccountCode');
    }

    /**
     * Returns key: 'LocalTwoContext'.
     *
     * @return string
     */
    public function getLocalTwoContext(): string|int|bool|null
    {
        return $this->getKey('LocalTwoContext');
    }

    /**
     * Returns key: 'LocalTwoExten'.
     *
     * @return string
     */
    public function getLocalTwoExten(): string|int|bool|null
    {
        return $this->getKey('LocalTwoExten');
    }

    /**
     * Returns key: 'LocalTwoPriority'.
     *
     * @return string
     */
    public function getLocalTwoPriority(): string|int|bool|null
    {
        return $this->getKey('LocalTwoPriority');
    }

    /**
     * Returns key: 'LocalTwoUniqueid'.
     *
     * @return string
     */
    public function getLocalTwoUniqueid(): string|int|bool|null
    {
        return $this->getKey('LocalTwoUniqueid');
    }

    /**
     * Returns key: 'DestTransfererChannel'.
     *
     * @return string
     */
    public function getDestTransfererChannel(): string|int|bool|null
    {
        return $this->getKey('DestTransfererChannel');
    }

    /**
     * Returns key: 'TransfereeChannel'.
     *
     * @return string
     */
    public function getTransfereeChannel(): string|int|bool|null
    {
        return $this->getKey('TransfereeChannel');
    }

    /**
     * Returns key: 'TransfereeChannelState'.
     *
     * @return string
     */
    public function getTransfereeChannelState(): string|int|bool|null
    {
        return $this->getKey('TransfereeChannelState');
    }

    /**
     * Returns key: 'TransfereeChannelStateDesc'.
     *
     * @return string
     */
    public function getTransfereeChannelStateDesc(): string|int|bool|null
    {
        return $this->getKey('TransfereeChannelStateDesc');
    }

    /**
     * Returns key: 'TransfereeCallerIDNum'.
     *
     * @return string
     */
    public function getTransfereeCallerIDNum(): string|int|bool|null
    {
        return $this->getKey('TransfereeCallerIDNum');
    }

    /**
     * Returns key: 'TransfereeCallerIDName'.
     *
     * @return string
     */
    public function getTransfereeCallerIDName(): string|int|bool|null
    {
        return $this->getKey('TransfereeCallerIDName');
    }

    /**
     * Returns key: 'TransfereeConnectedLineNum'.
     *
     * @return string
     */
    public function getTransfereeConnectedLineNum(): string|int|bool|null
    {
        return $this->getKey('TransfereeConnectedLineNum');
    }

    /**
     * Returns key: 'TransfereeConnectedLineName'.
     *
     * @return string
     */
    public function getTransfereeConnectedLineName(): string|int|bool|null
    {
        return $this->getKey('TransfereeConnectedLineName');
    }

    /**
     * Returns key: 'TransfereeAccountCode'.
     *
     * @return string
     */
    public function getTransfereeAccountCode(): string|int|bool|null
    {
        return $this->getKey('TransfereeAccountCode');
    }

    /**
     * Returns key: 'TransfereeContext'.
     *
     * @return string
     */
    public function getTransfereeContext(): string|int|bool|null
    {
        return $this->getKey('TransfereeContext');
    }

    /**
     * Returns key: 'TransfereeExten'.
     *
     * @return string
     */
    public function getTransfereeExten(): string|int|bool|null
    {
        return $this->getKey('TransfereeExten');
    }

    /**
     * Returns key: 'TransfereePriority'.
     *
     * @return string
     */
    public function getTransfereePriority(): string|int|bool|null
    {
        return $this->getKey('TransfereePriority');
    }

    /**
     * Returns key: 'TransfereeUniqueid'.
     *
     * @return string
     */
    public function getTransfereeUniqueid(): string|int|bool|null
    {
        return $this->getKey('TransfereeUniqueid');
    }
}
