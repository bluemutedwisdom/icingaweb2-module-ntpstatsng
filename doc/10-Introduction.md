# Introduction <a id="module_ntpstatsng_introduction"></a>

## Why should you monitor NTP peers?

> Monitoring without **exact timestamp** is worthless.
>
> [me, WOLS](https://github.com/wols)

Let's take an example from [Icinga2 - Distributed Monitoring with Master, Satellites, and Clients](https://icinga.com/docs/icinga2/latest/doc/06-distributed-monitoring/).

![icinga2_distributed_roles](images/icinga2_distributed_roles.png)

*TO BE CONTINUED...*

**Sources**

* [Arnold, Doug: The virtues of clock watching: Why it's important to monitor your timing network](https://blog.meinbergglobal.com/2018/05/10/the-virtues-of-clock-watching-why-its-important-to-monitor-your-timing-network/), 2018-12-10T21:15:00

## How should you monitor NTP peers?

> Doug Arnold again:
>
> 1. Self-reported performance
> 2. Network measurement
> 3. Measurement with a GNSS enabled clock

### Self-reported performance

Do you trust a self-report?

### Network measurement

> The measurement mechanism could be [NetSync Monitor](https://www.meinbergglobal.com/english/news/optimize-network-synchronization-with-the-netsync-monitor.htm), created by MEINBERG Funkuhren GmbH &amp; Co. KG.

### Measurement with a GNSS enabled clock

> Monitoring an NTP network, using a second GNSS enabled server with peer stats enabled.

#### A poor man solution and a rich man solution

*TO BE CONTINUED...*

## NTPstats-NG

### Peers

[Read more...](11-Peers.md#module_ntpstatsng_peers)

### Probes

[Read more...](12-Probes.md#module_ntpstatsng_probes)

### Controllers

[Read more...](13-Controllers.md#module_ntpstatsng_controllers)

----

[NTPstats-NG](/icingaweb2/doc/module/toc?moduleName=ntpstatsng) &#169; 2016-2018 [WOLS](https://github.com/wols/icingaweb2-module-ntpstatsng)
