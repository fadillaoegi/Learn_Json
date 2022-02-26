<?php

    // Convert Json To Array
    $dataJson = file_get_contents('test.json');

    $dataSembarang = json_decode($dataJson, true);

    var_dump($dataJson);

    echo $dataSembarang[0]["nama"];