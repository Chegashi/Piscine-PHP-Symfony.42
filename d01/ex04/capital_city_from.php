//d'idnt work
<?php
    global $capitals,$states;

     $states = [
        'Oregon' => 'OR',
        'Alabama' => 'AL',
        'New Jersey' => 'NJ',
        'Colorado' => 'CO',
        ];
    $capitals = [
        'OR' => 'Salem',
        'AL' =>
        'Montgomery',
        'NJ' => 'trenton',
        'KS' => 'Topeka',
    ];

    function capital_city_from($name_states , $states=$states, $capitals= $capitals )
    {
            if($states[$name_states]) 
                print($capitals[$states[$name_states]]);
            else
                print ('Unknown');
            print_r($states);
        }
?>