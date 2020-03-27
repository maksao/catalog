<?php

namespace App\Http\Controllers;

use App\Api;
use App\Car;
use App\Group;
use App\Part;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use View;

class CatalogController extends Controller
{

    public function setCookie($engine_id)
    {
        return response()->redirectToRoute('catalog.index', $engine_id)->cookie('engine_id', $engine_id, time() + 60*24*30*12);
    }

    public function index($engine_id)
    {
        $data = [
            'page_title' => 'Автозапчасти',
            'breadcrumbs' => Breadcrumbs::render(),
            'engine_id' => $engine_id,
            'groups' => Group::getTree($engine_id),
            's_car' => new Car($engine_id)
        ];

        return view('catalog.index', $data);
    }

    public function showGroup($group_id, $engine_id)
    {

        $group = Group::getTreeFromThis($group_id);
        $subgroups = Group::getSubgroups($group_id, $engine_id);

        $data = [
            'meta_title' => Group::getName($group) . ' для ' . (new Car($engine_id))->getName(),
            'page_title' => Group::getName($group),
            'breadcrumbs' => Breadcrumbs::render('catalog.group', $group, $engine_id),
            'engine_id' => $engine_id,
            'group' => $group,
            'subgroups' => $subgroups,
            's_car' => new Car($engine_id)
        ];

        return view('catalog.group', $data);
    }

    public function showSubgroup($subgroup_id, $engine_id)
    {

        $parts = Part::getList($subgroup_id, $engine_id);

        if( isset($parts['result']) && $parts['result'] == 'fail' ){
            return back()->withNoticeError($parts['message']);
        }

        $subgroup = Group::getTreeFromThis($subgroup_id);

        $subgroup_name = Group::getName($subgroup);

        $s_car = new Car($engine_id);

        $data = [
            'meta_title' => $subgroup_name . ' для ' . $s_car->getName(),
            'page_title' => $subgroup_name,
            'breadcrumbs' => Breadcrumbs::render('catalog.subgroup', $subgroup, $engine_id),
            'engine_id' => $engine_id,
            'subgroup' => $subgroup,
            'parts' => $parts,
            's_car' => $s_car
        ];

        return view('catalog.subgroup', $data);
    }

    public function showPart($part_id, $subgroup_id, $engine_id)
    {
        $part = Part::get($part_id);
        $subgroup = Group::getTreeFromThis($subgroup_id);

        $applicability = [];
        foreach ($part['applicability'] as $item){
            $c = new Car($item);
            $applicability[] = [
                'name' => $c->getName(),
                'engine_id' => $c->engine_id
            ];
        }
        unset($part['applicability']);

        $s_car = new Car($engine_id);

        $data = [
            'meta_title' => Part::getName($part) . ' для ' . $s_car->getName(),
            'meta_keywords' => $part['metakeywords'] ?? 'test',
            'meta_description' => $part['metadescription'] ?? 'test2',
            'page_title' => Part::getName($part),
            'breadcrumbs' => Breadcrumbs::render('catalog.part', $part, $subgroup, $engine_id),
            'engine_id' => $engine_id,
            'subgroup' => $subgroup,
            'part' => $part,
            's_car' => $s_car,
            'applicability' => $applicability
        ];

        return view('catalog.part', $data);
    }

}
