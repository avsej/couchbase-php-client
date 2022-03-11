<?php

/**
 * Copyright 2014-Present Couchbase, Inc.
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
 */

declare(strict_types=1);

namespace Couchbase;

class MutateInOptions
{
    /**
     * Sets the operation timeout in milliseconds.
     *
     * @param int $arg the operation timeout to apply
     * @return MutateInOptions
     */
    public function timeout(int $arg): MutateInOptions
    {
    }

    /**
     * Sets the cas value to use when performing this operation.
     *
     * @param string $arg the cas value to use
     * @return MutateInOptions
     */
    public function cas(string $arg): MutateInOptions
    {
    }

    /**
     * Sets the expiry time for the document.
     *
     * @param int|DateTimeInterface $arg the relative expiry time in seconds or DateTimeInterface object for absolute point in time
     * @return MutateInOptions
     */
    public function expiry(mixed $arg): MutateInOptions
    {
    }

    /**
     * Sets whether the original expiration should be preserved (by default Replace operation updates expiration).
     *
     * @param bool $shouldPreserve if true, the expiration time will not be updated
     * @return MutateInOptions
     */
    public function preserveExpiry(bool $shouldPreserve): MutateInOptions
    {
    }

    /**
     * Sets the durability level to enforce when writing the document.
     *
     * @param int $arg the durability level to enforce
     * @return MutateInOptions
     */
    public function durabilityLevel(int $arg): MutateInOptions
    {
    }

    /**
     * Sets the document level action to use when performing the operation.
     *
     * @param int $arg the store semantic to use
     * @return MutateInOptions
     */
    public function storeSemantics(int $arg): MutateInOptions
    {
    }
}