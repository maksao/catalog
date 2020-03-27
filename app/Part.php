<?php

namespace App;


class Part
{

    public static function get($part_id)
    {
        return Api::getData([
            'method' => 'getpart',
            'part_id' => $part_id
        ]);
    }

    public static function getList($subgroup_id, $engine_id)
    {
        return Api::getData([
            'method' => 'getparts',
            'engine_id' => $engine_id,
            'subgroup_id' => $subgroup_id
        ]);
    }

    public static function getName(array $part)
    {
        return $part['name_rus'] ? $part['name_rus'] : $part['name'];
    }
}
