<?php

/**
 * UpdateConfig action message.
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
 *  UpdateConfig action message.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Action
 * @author     Denis Rybakov <shinomontaz@gmail.com>
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
 * @link       http://marcelog.github.com/PAMI/
 */
class UpdateConfigAction extends ActionMessage
{
    protected static int $counter;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct('UpdateConfig');
        self::$counter = -1;
    }

    /**
     * Sets Src filename key.
     *
     * @param string $filename.
     */
    public function setSrcFilename(string|int|bool $filename): void
    {
        $this->setKey('SrcFilename', $filename);
    }

    /**
     * Sets Dst Filename key.
     *
     * @param string $filename.
     */
    public function setDstFilename(string|int|bool $filename): void
    {
        $this->setKey('DstFilename', $filename);
    }

    /**
     * Sets Reload key.
     *
     * @param bool $reload
     */
    public function setReload($reload): void
    {
        $this->setKey('Reload', $reload ? 'yes' : 'no');
    }

    /**
     * Sets Action-XXXXXX key.
     *
     * @param string $input.
     */
    public function setAction(string|int|bool $input): void
    {
        UpdateConfigAction::$counter++;
        $this->setKey('Action-'.$this->getPaddedCounter(), $input);
    }

    /**
     * Sets Cat-XXXXXX key.
     *
     * @param string|int $input
     */
    public function setCat(string|int|bool $input): void
    {
        $this->setKey('Cat-'.$this->getPaddedCounter(), $input);
    }

    /**
     * Sets Var-XXXXXX key.
     *
     * @param string $input.
     */
    public function setVar(string|int|bool $input): void
    {
        $this->setKey('Var-'.$this->getPaddedCounter(), $input);
    }

    /**
     * Sets Value-XXXXXX key.
     *
     * @param string $input.
     */
    public function setValue(string|int|bool $input): void
    {
        $this->setKey('Value-'.$this->getPaddedCounter(), $input);
    }

    /**
     * Sets Match-XXXXXX key.
     *
     * @param string $input.
     */
    public function setMatch(string|int|bool $input): void
    {
        $this->setKey('Match-'.$this->getPaddedCounter(), $input);
    }

    /**
     * Sets Line-XXXXXX key.
     *
     * @param string $input.
     */
    public function setLine(string|int|bool $input): void
    {
        $this->setKey('Line-'.$this->getPaddedCounter(), $input);
    }

    /**
     * Returns the string representation for counter with leading zeroes in UpdateConfig action format.
     */
    protected function getPaddedCounter(): string
    {
        return str_pad((string)UpdateConfigAction::$counter, 6, '0', STR_PAD_LEFT);
    }
}
