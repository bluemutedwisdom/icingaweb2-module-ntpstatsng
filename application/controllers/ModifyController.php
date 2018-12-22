<?php
/* icingaweb2-module-ntpstatsng | (c) 2018 WOLfgang Schricker | GPLv2 */

namespace Icinga\Module\Ntpstatsng\Controllers;

use Icinga\Web\Url;
use Icinga\Web\Widget\Tabs;
use Icinga\Module\Ntpstatsng\Data\Db\Demo;
use Icinga\Module\Ntpstatsng\Controller;

class ModifyController extends Controller
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
     * Modify controller
     */
    public function controllerAction()
    {
        $this->addTitleTab(
            'peer',
            $this->translate('Controller'),
            $this->translate('Edit controller')
        );

        $name  = $this->params->get('name');

        $query = Demo::selectControllers()->where('object_name', $name);

        $this->view->ntpstatsng_controllers = $query->fetchAll();

        $this->view->title = $this->view->ntpstatsng_controllers[0]->object_name;
    }

    /**
     * Modify peer
     */
    public function peerAction()
    {
        $this->addTitleTab(
            'peer',
            $this->translate('Peer'),
            $this->translate('Edit NTP peer')
        );

        $name  = $this->params->get('name');

        $query = Demo::selectPeers()->where('object_name', $name);

        $this->view->ntpstatsng_peers = $query->fetchAll();

        $this->view->title = $this->view->ntpstatsng_peers[0]->object_name;
    }

    /**
     * Modify probe
     */
    public function probeAction()
    {
        $this->addTitleTab(
            'probe',
            $this->translate('Probe'),
            $this->translate('Edit probe')
        );

        $name  = $this->params->get('name');

        $query = Demo::selectProbes()->where('object_name', $name);

        $this->view->ntpstatsng_probes = $query->fetchAll();

        $this->view->title = $this->view->ntpstatsng_probes[0]->object_name;
    }

    /**
     * Modify zone
     */
    public function zoneAction()
    {
        $this->addTitleTab(
            'zone',
            $this->translate('Zone'),
            $this->translate('Edit peer zone')
        );

        $name  = $this->params->get('name');

        $query = Demo::selectZones()->where('object_name', $name);

        $this->view->ntpstatsng_zones = $query->fetchAll();

        $this->view->title = $this->view->ntpstatsng_zones[0]->object_name;
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
