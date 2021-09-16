<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ToolsController extends Controller
{

        public static function getAllInfoTable($model){
            $model = 'App\Models\\'.$model;
            return $model::all();
        }

        public static function getInfoTableById($model , $id){
            $model = 'App\Models\\'.$model;
            return $model::find($id);
        }

        public static function getInfoTableByIdField($model , $id, $field){
            $model = 'App\Models\\'.$model;
            $rs    = $model::find($id);
            return $rs->$field;
        }

        public static function getConfig($key, $field=''){
            $model = 'App\Models\\Config';
            $rs    = $model::where('keyconf',$key)->get();
            return ($field) ? $rs[0] : $rs[0]->value;
        }

        public static function paginacion(){
            $model = 'App\Models\\Config';
            $rs    = $model::where('keyconf','paginacion')->get('value');
            return $rs[0]->value;
        }

        public static function selectHTML($args){
            extract($args , EXTR_SKIP);
            $object = "App\Models\\{$model}";

            if (!isset($where)){
                $rs = $object::all(["{$key} as value","{$label} as label"]);
                return view('component.select',["items"=>$rs,
                                                "name"=>$name,
                                                "class"=>(isset($class) ? $class : ''),
                                                "required"=>(isset($required) ? $required : ''),
                                                "onchange"=>(isset($onchange) ? $onchange : ''),
                                                "dataattr"=>(isset($dataattr) ? $dataattr : ''),
                                                "multiple"=>(isset($multiple) ? $multiple : false),
                                                "selected"=> (isset($selected) ? $selected : '')]);
            }else{
                list($w, $c) = explode('|',$where);
                $rs = $object::where($w,$c)->get(["{$key} AS value"  , "{$label} AS label"]);

                return view('component.select', ["items"=>$rs,
                                                    "name"=>$name,
                                                    "class"=>(isset($class) ? $class : ''),
                                                    "required"=>(isset($required) ? $required : ''),
                                                    "onchange"=>(isset($onchange) ? $onchange : ''),
                                                    "dataattr"=>(isset($dataattr) ? $dataattr : ''),
                                                    "multiple"=>(isset($multiple) ? $multiple : false),
                                                    "selected"=> (isset($selected) ? $selected : '')]);
            }

            return $rs[0]->value;
        }



}
