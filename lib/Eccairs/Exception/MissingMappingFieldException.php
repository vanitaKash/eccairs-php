<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Exception;

use LogicException;
class MissingMappingFieldException extends LogicException
{
    protected $message = 'The field dosen\'t exists';
}
