<?php
/**
 * Copyright 2019 Manabu Igarashi
 * Code released under the MIT license
 * https://opensource.org/licenses/mit-license.php
 */

class JapaneseEra {
    public $unix_timestamp;
    public $era;
    private static $era_list = [
        ['name' => '令和', 'name_short' => 'R', 'timestamp' =>  1556636400], // 2019-05-01
        ['name' => '平成', 'name_short' => 'H', 'timestamp' =>   600188400], // 1989-01-08
        ['name' => '昭和', 'name_short' => 'S', 'timestamp' => -1357635600], // 1926-12-25
        ['name' => '大正', 'name_short' => 'T', 'timestamp' => -1812186000], // 1912-07-30
        ['name' => '明治', 'name_short' => 'M', 'timestamp' => -3216790800]  // 1868-01-25
    ];

    public function __construct($unix_timestamp) {
        $this->unix_timestamp = $unix_timestamp;
    }

    public function getDate() {
        foreach (self::$era_list as $el) {
            if ($el['timestamp'] <= $this->unix_timestamp) {
                $this->era = $el;
                break;
            }
        }
        if (empty($this->era)) {
            return date('Y年n月j日', $this->unix_timestamp);
        } else {
            $year = date('Y', $this->unix_timestamp) - date('Y', $el['timestamp']) + 1;
            $year = $year == 1 ? '元' : $year;
            return $el['name'] .$year .date('年n月j日', $this->unix_timestamp);
        }
    }
}
?>
