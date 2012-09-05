<?php
$json = array();

if ($_POST['type'] == 1)
{
    $json[] = array(
        'id' => '1',
        'name' => 'Steve',
        'age' => '31',
        'birthday' => '12/1/1977'
    );
    $json[] = array(
        'id' => '2',
        'name' => 'John',
        'age' => '242',
        'birthday' => '2/1/1985'
    );
    $json[] = array(
        'id' => '3',
        'name' => 'Samantha',
        'age' => '13',
        'birthday' => '1/1/1996'
    );
}
elseif ($_POST['type'] == 2)
{
    $json[] = array(
        'id' => '4',
        'name' => 'James',
        'age' => '31',
        'birthday' => '12/1/1977'
    );
    $json[] = array(
        'id' => '5',
        'name' => 'Tara',
        'age' => '24',
        'birthday' => '2/1/1985'
    );
}else
{
    $json[] = array(
        'id' => '1',
        'name' => 'Steve',
        'age' => '31',
        'birthday' => '12/1/1977'
    );
    $json[] = array(
        'id' => '2',
        'name' => 'John',
        'age' => '242',
        'birthday' => '2/1/1985'
    );
    $json[] = array(
        'id' => '3',
        'name' => 'Samantha',
        'age' => '13',
        'birthday' => '1/1/1996'
    );
    $json[] = array(
        'id' => '4',
        'name' => 'James',
        'age' => '31',
        'birthday' => '12/1/1977'
    );
    $json[] = array(
        'id' => '5',
        'name' => 'Tara',
        'age' => '24',
        'birthday' => '2/1/1985'
    );
    $json[] = array(
        'id' => '6',
        'name' => 'Kim',
        'age' => '13',
        'birthday' => '1/1/1996'
    );
    $json[] = array(
        'id' => '7',
        'name' => 'Steve',
        'age' => '31',
        'birthday' => '12/1/1977'
    );
    $json[] = array(
        'id' => '8',
        'name' => 'John',
        'age' => '242',
        'birthday' => '2/1/1985'
    );
    $json[] = array(
        'id' => '9',
        'name' => 'Samantha',
        'age' => '13',
        'birthday' => '1/1/1996'
    );
    $json[] = array(
        'id' => '10',
        'name' => 'James',
        'age' => '31',
        'birthday' => '12/1/1977'
    );
    $json[] = array(
        'id' => '11',
        'name' => 'Tara',
        'age' => '24',
        'birthday' => '2/1/1985'
    );
    $json[] = array(
        'id' => '12',
        'name' => 'Pankaj',
        'age' => '13',
        'birthday' => '1/1/1996'
    );
}

echo json_encode($json);
?>