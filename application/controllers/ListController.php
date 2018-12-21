<?php
/* icingaweb2-module-ntpstatsng | (c) 2018 WOLfgang Schricker | GPLv2 */

namespace Icinga\Module\Ntpstatsng\Controllers;

use Icinga\Web\Url;
use Icinga\Web\Widget\Tabs;
use Icinga\Module\Ntpstatsng\Data\Db\Demo;
use Icinga\Module\Ntpstatsng\Controller;

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
     * List controllers
     */
    public function controllersAction()
    {
        $this->addTitleTab(
            'controllers',
            $this->translate('Controllers'),
            $this->translate('List probe controllers')
        );

        $query = Demo::selectControllers();

        $this->view->ntpstatsng_controllers = $query->fetchAll();
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

        $query = Demo::selectPeers();

        $this->view->ntpstatsng_peers = $query->fetchAll();
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

        $query = Demo::selectProbes();

        $this->view->ntpstatsng_probes = $query->fetchAll();
    }

    /**
     * List zones
     */
    public function zonesAction()
    {
        $this->addTitleTab(
            'zones',
            $this->translate('Zones'),
            $this->translate('List peer zones')
        );

        $query = Demo::selectZones();

        $this->view->ntpstatsng_zones = $query->fetchAll();
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
