<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * Copyright (c) 2005-2017 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao\InstallationBundle\Event;

final class ContaoInstallationEvents
{
    /**
     * The contao_installation.initialize_application event is triggered in the install tool.
     *
     * @var string
     *
     * @see InitializeApplicationEvent
     */
    public const INITIALIZE_APPLICATION = 'contao_installation.initialize_application';
}
