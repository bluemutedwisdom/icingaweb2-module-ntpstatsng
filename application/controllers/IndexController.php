<?php

use Icinga\Web\Controller\ModuleActionController;

class Ntpstatsng_IndexController extends ModuleActionController
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
