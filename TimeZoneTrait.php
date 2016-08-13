<?php

use \DateTime;
use \DateTimeZone;


trait TimeZoneTrait {

    protected $zones;
    protected $regions = array(
        'Africa' => DateTimeZone::AFRICA,
        'America' => DateTimeZone::AMERICA,
        'Antarctica' => DateTimeZone::ANTARCTICA,
        'Asia' => DateTimeZone::ASIA,
        'Atlantic' => DateTimeZone::ATLANTIC,
        'Europe' => DateTimeZone::EUROPE,
        'Indian' => DateTimeZone::INDIAN,
        'Pacific' => DateTimeZone::PACIFIC
    );

    public function getZoneOptionsFull() {
        $tz = $this->zones();
        $zones = [];
        foreach($tz as $timezone) {
            $time = new DateTime(NULL, new DateTimeZone($tz));
            $meridian = $time->format('H') > 12 ? ' (' . $time->format('g:i a'). ')' : '';
            $zones[$timezone] = $timezone . ' - ' . $time->format('H:i') . $meridian;
        }

        return $zones;
    }

    public function getZoneOptions() {
        $zones = [];
        foreach ($this->regions as $region => $mask) {
            $z = $this->zones($mask);
            foreach ($z as $tz) {
                $time = new DateTime(NULL, new DateTimeZone($tz));
                $meridian = ' (' . $time->format('g:i a'). ')';
                $zones[$region][$tz] = substr($tz, strlen($region) + 1) . ' - ' . $time->format('H:i') . $meridian;
            }
        }

        return $zones;
    }


    public function zones($mask = DateTimeZone::ALL) {
        return DateTimeZone::listIdentifiers($mask);
    }





}
