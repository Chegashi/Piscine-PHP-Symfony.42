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

    function search_by_states($str_state)
    {
        $str_state = "Oregon, trenton, Topeka, NewJersey";
		global $capitals,$states;

        $array = explode(',', $str_state);
        foreach ($array as $word) {
            $word = ltrim($word, ' ');
            if (array_key_exists($word, $states) && array_key_exists($states[$word], $capitals))
                echo $capitals[$states[$word]]."is the capital of ".$word.PHP_EOL;
            else if (($c = array_search($word, $capitals, true)) && ($s = array_search($c, $states, true)))
                echo $word." is the capital of ".$s.PHP_EOL;
            else
                echo $word." is neither a capital nor a state.".PHP_EOL;
        }
	}
?>