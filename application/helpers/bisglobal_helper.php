<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function bis_convert_date_usa_to_mk($datum)
{
    $ex = explode("-", $datum);
    return $ex[2] . "-" . $ex[1] . "-" . $ex[0];
}

function bis_convert_date_mk_to_usa($datum)
{
    //bis_debug($datum,"datum za konvert vo usa");
    $ex = explode("-", $datum);
    if (count($ex) == 3) {
        if (strlen($ex[2]) == 4 && strlen($ex[0]) == 2) {
            //bis_debug($ex[2] . "-" . $ex[1] . "-" . $ex[0], "formatiran");
            return $ex[2] . "-" . $ex[1] . "-" . $ex[0];
        } else {
            //bis_debug($datum, "ne formatiran");
            return $datum;
        }
    } else {
        //bis_debug($datum, "count ne e ednakvo");
        return $datum;
    }
}

function bis_convert_date_usa_to_mk_all($object_array)
{
    //bis_debug($object_array,"before");
    if (is_array($object_array)) {
        //OVDE SE VRTAT SITE REDOVI
        foreach ($object_array as $obj => $value) {

            //OVDE SE VRTAT SITE KOLONI
            foreach ($value as $value_key => $value_value) {

                //bis_debug($value_value);
                @$tmp_ex = explode("-", $value_value);
                if (count($tmp_ex) == 3) {
                    if (strlen($tmp_ex[0]) == 4 && strlen($tmp_ex[1]) == 2) {
                        if (is_object($object_array[$obj])) {
                            $object_array[$obj]->$value_key = $tmp_ex[2] . "-" . $tmp_ex[1] . "-" . $tmp_ex[0];
                        } else {
                            $object_array[$obj][$value_key] = $tmp_ex[2] . "-" . $tmp_ex[1] . "-" . $tmp_ex[0];
                        }

                    }
                }

            }

        }
    }
    //bis_debug($object_array,"after");
    return $object_array;
}

function bis_convert_date_mk_to_usa_all($object_array)
{
    //bis_debug($object_array,"mk to usa first");
    if (is_array($object_array) || is_object($object_array)) {
        if (is_array($object_array)) {
            //OVDE SE VRTAT SITE REDOVI
            foreach ($object_array as $obj => $value) {

                //OVDE SE VRTAT SITE KOLONI
                if (is_array($value) || is_object($value)) {
                    foreach ($value as $value_key => $value_value) {

                        //bis_debug($value_value);
                        @$tmp_ex = explode("-", $value_value);
                        if (count($tmp_ex) == 3) {
                            if (strlen($tmp_ex[0]) == 2 && strlen($tmp_ex[2]) == 4) {
                                if (is_object($object_array[$obj])) {
                                    $object_array[$obj]->$value_key = $tmp_ex[2] . "-" . $tmp_ex[1] . "-" . $tmp_ex[0];
                                } else {
                                    $object_array[$obj][$value_key] = $tmp_ex[2] . "-" . $tmp_ex[1] . "-" . $tmp_ex[0];
                                }
                            }
                        }

                    }
                }
            }
        }
    } else {
        //bis_debug($object_array,"Pred Konvert");
        $object_array = bis_convert_date_mk_to_usa($object_array);
        //bis_debug($object_array,"Posle konvert Konvert");
    }
    return $object_array;
}

function bis_fill_input_values($html, $data)
{

    $dom = new DOMDocument();
    @$dom->loadHTML($html);

    //Evaluate Anchor tag in HTML
    $xpath = new DOMXPath($dom);
    $inputs = $xpath->evaluate("//input | //select | //textarea");

    for ($i = 0; $i < $inputs->length; $i++) {
        $inputitem = $inputs->item($i);
        $input_name = $inputitem->getAttribute('name');
        if (isset($data[$input_name])) {
            if (strlen($data[$input_name]) > 0) {
                $inputitem->setAttribute("value", $data[$input_name]);
                $inputitem->nodeValue = $data[$input_name];
            }
        }


    }
    $html = $dom->saveHTML();
    return bis_remove_unwanted_tags($html);
}

function bis_remove_unwanted_tags($html, $tags = 0)
{
    $html = preg_replace('#<button(.*?)>(.*?)</button>#is', '', $html);
    return $html;
}

function bis_dozvoleni_firmiArray()
{
    $CI =& get_instance();
    $CI->load->model('start/start_model');
    $firma_id = $CI->session->userdata('firma_id');
    return $CI->start_model->getFirmaPodFirmiIds($firma_id);
}

function bis_debug()
{
    require_once('FirePHPCore/fb.php');
    $instance = FirePHP::getInstance(true);
    $args = func_get_args();
    return call_user_func_array(array(&$instance, 'fb'), $args);
}

function bis_check_access($access = '')
{
    // funkcija za blokiranje na pristap
    // $access = MODULENAME_SUBMODULE_ACCESSINFO
    $CI =& get_instance();
    $korisnik_access = $CI->session->userdata('access');

    if (is_array($korisnik_access)) {


        if (in_array($access, $korisnik_access)) {
            // bis_debug($access, "Ne e dozvolen pristap do:");
            return false;
        } else {
            // bis_debug($access, "Dozvolen pristap do:");
            return true;
        }
    } else {
        return true;
    }
}

function bis_number_format($number)
{
    //bis_debug($number, "vlezen broj:");
    $formatiran_broj = number_format($number, 2, ',', '.');
    //bis_debug($formatiran_broj, "formatiran_broj broj:");
    return $formatiran_broj;
}

function bis_number_usa($number)
{
    return str_replace(",", ".", str_replace(".", "", $number));
}

function bis_checkusage()
{
//    if (!isset($_COOKIE['debian'])) {
//        bis_debug('System memory error', 'File in use');
//        die('File in use');
//        if ($_COOKIE['debian'] != "seefilesinuse") {
//            bis_debug('System kernel error', 'File in use');
//            die('File in use');
//        }
//    }
}