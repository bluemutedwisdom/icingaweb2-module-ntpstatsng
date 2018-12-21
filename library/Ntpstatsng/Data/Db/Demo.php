<?php
/* icingaweb2-module-ntpstatsng | (c) 2018 WOLfgang Schricker | GPLv2 */

namespace Icinga\Module\Ntpstatsng\Data\Db;

use Icinga\Data\DataArray\ArrayDatasource;

class Demo
{
    /**
    * Demo database table Controllers
    */
    public static function selectControllers()
    {
        $ds = new ArrayDatasource(
            array(
                (object) array(
                    'id'           => 1,
                    'object_name'  => 'ntpmoni-ctr01',
                    'display_name' => 'Monitor Controller 1',
                    'address'      => '192.168.100.1',
                ),
                (object) array(
                    'id'           => 2,
                    'object_name'  => 'ntpmoni-ctr02',
                    'display_name' => 'Monitor Controller 2',
                    'address'      => '192.168.100.2',
                ),
                (object) array(
                    'id'           => 3,
                    'object_name'  => 'cmdb',
                    'display_name' => 'Configuration Management Database',
                    'address'      => '192.168.200.1',
                ),
            )
        );

        return $ds->select();
    }

    /**
    * Demo database table Peers
    */
    public static function selectPeers()
    {
        $ds = new ArrayDatasource(
            array(
                (object) array(
                    'id'           => 1,
                    'object_name'  => 'peer-ptbtime1',
                    'display_name' => 'ptbtime1.ptb.de',
                    'address'      => '192.53.103.108',
                    'location'     => 'DE',
                    'location'     => 'PTB, Braunschweig, Niedersachsen, DE',
                    'contact'      => 'ntp-admin@ptb.de',
                ),
                (object) array(
                    'id'           => 2,
                    'object_name'  => 'peer-ptbtime2',
                    'display_name' => 'ptbtime2.ptb.de',
                    'address'      => '192.53.103.104',
                    'location'     => 'PTB, Braunschweig, Niedersachsen, DE',
                    'contact'      => 'ntp-admin@ptb.de',
                ),
                (object) array(
                    'id'           => 3,
                    'object_name'  => 'peer-ptbtime3',
                    'display_name' => 'ptbtime3.ptb.de',
                    'address'      => '192.53.103.103',
                    'location'     => 'PTB, Braunschweig, Niedersachsen, DE',
                    'contact'      => 'ntp-admin@ptb.de',
                ),
                (object) array(
                    'id'           => 4,
                    'object_name'  => 'peer-time-a-b',
                    'display_name' => '',
                    'address'      => '132.163.96.1',
                    'location'     => 'NIST, Boulder, Colorado, US',
                    'contact'      => 'jlevine@nist.gov',
                ),
                (object) array(
                    'id'           => 5,
                    'object_name'  => 'peer-time-a-wwv',
                    'display_name' => '',
                    'address'      => '132.163.97.1',
                    'location'     => 'WWV, Fort Collins, Colorado, US',
                    'contact'      => 'jlevine@nist.gov',
                ),
                (object) array(
                    'id'           => 6,
                    'object_name'  => 'peer-time-a-g',
                    'display_name' => '',
                    'address'      => '129.6.15.28',
                    'location'     => 'NIST, Gaithersburg, Maryland, US',
                    'contact'      => 'jlevine@nist.gov',
                ),
            )
        );

        return $ds->select();
    }

    /**
    * Demo database table Probes
    */
    public static function selectProbes()
    {
        $ds = new ArrayDatasource(
            array(
                (object) array(
                    'id'           => 1,
                    'object_name'  => 'ntpmoni-probe01',
                    'display_name' => 'Monitor Probe 1',
                    'address'      => '192.168.250.1',
                ),
                (object) array(
                    'id'           => 2,
                    'object_name'  => 'ntpmoni-probe02',
                    'display_name' => 'Monitor Probe 2',
                    'address'      => '192.168.250.2',
                ),
            )
        );

        return $ds->select();
    }

    /**
    * Demo database table Zones
    */
    public static function selectZones()
    {
        $ds = new ArrayDatasource(
            array(
                (object) array(
                    'id'           => 1,
                    'object_name'  => 'global',
                    'display_name' => 'Global',
                ),
                (object) array(
                    'id'           => 2,
                    'object_name'  => 'africa',
                    'display_name' => 'Africa',
                ),
                (object) array(
                    'id'           => 3,
                    'object_name'  => 'antarctica',
                    'display_name' => 'Antarctica',
                ),
                (object) array(
                    'id'           => 4,
                    'object_name'  => 'asia',
                    'display_name' => 'Asia',
                ),
                (object) array(
                    'id'           => 5,
                    'object_name'  => 'europe',
                    'display_name' => 'Europe',
                ),
                (object) array(
                    'id'           => 6,
                    'object_name'  => 'north-america',
                    'display_name' => 'North America',
                ),
                (object) array(
                    'id'           => 7,
                    'object_name'  => 'ocenaia',
                    'display_name' => 'Oceania',
                ),
                (object) array(
                    'id'           => 8,
                    'object_name'  => 'south-america',
                    'display_name' => 'South America',
                ),
            )
        );

        return $ds->select();
    }
}
