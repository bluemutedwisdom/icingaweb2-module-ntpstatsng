<?php

namespace Icinga\Module\Ntpstatsng\Controllers;

use Icinga\Web\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        $this->getTabs()->activate('ntpstatsng');
    }

    public function getTabs()
    {
        $tabs = parent::getTabs();
        $tabs->add(
            'ntpstatsng',
            array(
                'title' => 'NTPstats-NG',
                'url'   => 'ntpstatsng'
            )
        );

        return $tabs;
    }
}
