<?php
/* icingaweb2-module-ntpstatsng | (c) 2018 WOLfgang Schricker | GPLv2 */

namespace Icinga\Module\Ntpstatsng\Controllers;

use Icinga\Module\Ntpstatsng\Controller;
use Icinga\Web\Url;
use Icinga\Web\Widget\Tabs;

class ListController extends Controller
{
    /**
     * @see ActionController::init
     */
    public function init()
    {
        parent::init();
        $this->createTabs();
    }

    /**
     * List peers
     */
    public function peersAction()
    {
        $this->addTitleTab(
            'peers',
            $this->translate('Peers'),
            $this->translate('List NTP peers')
        );
    }

    /**
     * List probes
     */
    public function probesAction()
    {
        $this->addTitleTab(
            'probes',
            $this->translate('Probes'),
            $this->translate('List monitor probes')
        );
    }

    /**
     * List controllers
     */
    public function controllersAction()
    {
        $this->addTitleTab(
            'controllers',
            $this->translate('Controllers'),
            $this->translate('List probe controllers')
        );
    }

    /**
     * The tab and the title
     */
    protected function addTitleTab($action, $title, $tip)
    {
        $this->getTabs()->add($action, array(
            'title' => $tip,
            'label' => $title,
            'url'   => Url::fromRequest()
        ))->activate($action);

        $this->view->title = $title;
    }

    /**
     * Return all tabs for this controller
     *
     * @return Tabs
     */
    private function createTabs()
    {
        $this->getTabs();
    }
}
