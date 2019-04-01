<?php

/**
 * Saga pattern implementation.
 *
 * @author  Maksim Masiukevich <dev@async-php.com>
 * @license MIT
 * @license https://opensource.org/licenses/MIT
 */

declare(strict_types = 1);

namespace ServiceBus\Sagas\Tests\stubs;

/**
 *
 */
final class IncorrectSagaIdType
{
    /**
     * @param string $id
     * @param string $sagaClass
     */
    public function __construct(string $id, string $sagaClass)
    {
    }
}