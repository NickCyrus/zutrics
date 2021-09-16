<?php

if (!function_exists('_html')){

        function _html($args = array()){

                extract($args , EXTR_SKIP);

                switch ($e){
                    default:
                       echo "<{$e} "._attr($args)." "._data($args).">{$text}</{$e}>";
                    break;
                }

        }

}

if (!function_exists('_attr')){
    function _attr($args = array()){
            extract($args , EXTR_SKIP);
            $att = '';
            if (isset($atts) && is_array($atts)){
                    foreach($atts as $key=>$value){
                        $att .= " {$key}='".addslashes($value)."'";
                    }
            }

            return $att;

    }
}

if (!function_exists('_data')){
    function _data($args = array()){
            extract($args , EXTR_SKIP);
            $att = '';
            if (isset($data) && is_array($data)){
                    foreach($data as $key=>$value){
                        $att .= " data-{$key}='".addslashes($value)."'";
                    }
            }

            return $att;

    }
}

if (!function_exists('_fecha')){

        function _fecha($fecha = ''){

            return \Carbon\Carbon::parse($fecha)->format('d/m/Y H:i:s');

            /*
            if (count(explode(' ', $fecha))>1){
                list($fecha , $hora) = explode(' ', $fecha);
                list($y,$m,$d)       = explode('-', $fecha);
                // if ($hora) list($h, $m , $s) = explode(':',$hora);
               // if ($s) list($ss,$mm) = explode(":",$s);
                return "{$d}/{$m}/{$y} {$h}:{$m}:{$ss}";
            }else{
                list($y,$m,$d)       = explode('-', $fecha);
                return "{$d}/{$m}/{$y}";
            }
            */


        }
}

if (!function_exists('_fechaInput')){

    function _fechaInput($fecha = ''){
            // list($y,$m,$d)       = explode('-', $fecha);
            return \Carbon\Carbon::parse($fecha)->format('d/m/Y');
            // return "{$d}/{$m}/{$y}";




    }
}
