<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Service\OpenTelemetryExtension\Dependency\Plugin;

use Spryker\Zed\OpenTelemetry\Business\Generator\Instrumentation\CachedInstrumentation;
use Symfony\Component\HttpFoundation\Request;

interface InstrumentationPluginInterface
{
    /**
     * Specification:
     * - Adds an entry point hook for application instrumentation using OpenTelemetry.
     *
     * @api
     *
     * @param \Spryker\Zed\OpenTelemetry\Business\Generator\Instrumentation\CachedInstrumentation $instrumentation
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return void
     */
    public function addHook(CachedInstrumentation $instrumentation, Request $request): void;
}
