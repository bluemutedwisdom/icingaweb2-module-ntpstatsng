<?php
/* icingaweb2-module-ntpstatsng | (c) 2018 WOLfgang Schricker | GPLv2 */

namespace Icinga\Module\Ntpstatsng;

use Icinga\Exception\ConfigurationError;
use Icinga\Exception\QueryException;
use Icinga\Data\Filter\Filter;
use Icinga\Data\Filterable;
use Icinga\File\Csv;
use Icinga\Util\Json;
use Icinga\Web\Controller as IcingaWebController;
use Icinga\Web\Widget\Tabs;
use Icinga\Web\Url;

/**
 * Base class for all ntpstatsng controller
 */
class Controller extends IcingaWebController
{
    /**
     * The backend used for this controller
     *
     * @var Backend
     */
    protected $backend;

    protected function moduleInit()
    {
        // TODO Backend

        $this->view->url = Url::fromRequest();
    }
}
