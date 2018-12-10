<?php
/* icingaweb2-module-ntpstatsng | (c) 2018 WOLfgang Schricker | GPLv2 */

$section = $this->menuSection(N_('NTPstats-NG'), array(
    'icon'     => 'clock',
    'priority' => 90,
));

$section->add('Peers', array(
    'description' => $this->translate('List NTP peers'),
    'icon'        => 'clock',
    'url'         => 'ntpstatsng/list/peers',
    'priority'    => 91,
));

$section->add('Probes', array(
    'description' => $this->translate('List monitor probes'),
    'icon'        => 'eye',
    'url'         => 'ntpstatsng/list/probes',
    'priority'    => 92,
));

$section->add('Controllers', array(
    'description' => $this->translate('List probe controllers'),
    'icon'        => 'sitemap',
    'url'         => 'ntpstatsng/list/controllers',
    'priority'    => 93,
));

$section->add('Documentation', array(
    'description' => $this->translate('Module documentation'),
    'icon'        => 'doc-text',
    'url'         => 'doc/module/toc?moduleName=ntpstatsng',
    'priority'    => 94,
));
