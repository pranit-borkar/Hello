<?php
$json = array();

if ($_POST['type'] == 1)
{
    $json[] = array(
        'value' => '1',
        'text' => 'First Category1'
    );
    $json[] = array(
        'value' => '2',
        'text' => 'First Category2'
    );
    $json[] = array(
        'value' => '3',
        'text' => 'First Category3'
    );
}
elseif ($_POST['type'] == 2)
{
    $json[] = array(
        'value' => '4',
        'text' => 'Second Category1'
    );

    $json[] = array(
        'value' => '5',
        'text' => 'Second Category2'
    );
}

echo json_encode($json);
?>