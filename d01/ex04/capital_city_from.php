<?php
     $states = [
        'Oregon' => 'OR',
        'Alabama' => 'AL',
        'New Jersey' => 'NJ',
        'Colorado' => 'CO',
        ];
    $capitals = [
        'OR' => 'Salem',
        'AL' =>'Montgomery',
        'NJ' => 'trenton',
        'KS' => 'Topeka',
    ];

    function capital_city_from($name_states)
    {
		global $capitals,$states;

        if(array_key_exists($name_states, $states))
            echo($capitals[$states[$name_states]]).PHP_EOL;
    	else
            echo ('Unknown'.PHP_EOL);
	}
?>
