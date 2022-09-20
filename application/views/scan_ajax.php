<?php
foreach ($scan_ajax as $list) :
    if ($list->epc != '[]') {
        $list_epc = preg_replace('/[^A-Za-z0-9]/', '', explode(',', $list->epc));
        $epc = array_chunk($list_epc, 2);
        foreach ($epc as $key => $value) {
            // foreach ($value as $key => $nilai) {
            print_r(json_encode($value));
            // }
        }
    }
endforeach;
