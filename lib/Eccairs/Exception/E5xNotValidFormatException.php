<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Exception;

use LogicException;
class E5xNotValidFormatException extends LogicException
{
    protected $message = 'Generated XML is not a valid E5X format';
}
