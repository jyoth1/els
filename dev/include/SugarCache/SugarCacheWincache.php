<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

use Sugarcrm\Sugarcrm\Cache\Backend\WinCache;

/**
 * @deprecated Use Sugarcrm\Sugarcrm\Cache\Backend\WinCache instead
 */
class SugarCacheWincache extends SugarCachePsr
{
    public function __construct()
    {
        parent::__construct(WinCache::class, 930, 'external_cache_disabled_wincache');
    }
}
