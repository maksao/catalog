<?php

namespace App;


use Illuminate\Support\Str;

class Group
{

    public static function getName(array $group)
    {
        return $group['name_rus'] ? $group['name_rus'] : $group['name'];
    }

    public static function slug($group)
    {
        return Str::slug(self::getName($group));
    }

    public static function getTreeFromThis($group_id)
    {
        return Api::getData([
            'method' => 'getgroupowners',
            'group_id' => $group_id
        ]);
    }

    public static function getTree($engine_id)
    {
        return Api::getData([
            'method' => 'getgroupstree',
            'engine_id' => $engine_id
        ]);
    }

    public static function getSubgroups($group_id, $engine_id)
    {
        return Api::getData([
            'method' => 'getsubgroups',
            'engine_id' => $engine_id,
            'group_id' => $group_id
        ]);
    }



}
