<?php

declare(strict_types=1);

/*
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */

namespace ParkManager\Module\WebhostingModule\Domain\Package\Exception;

use InvalidArgumentException;
use function sprintf;

final class CapabilityNotInSet extends InvalidArgumentException
{
    public static function withName(string $name): self
    {
        return new self(sprintf('Webhosting Package Capability %s cannot be found in Capabilities set.', $name));
    }
}
