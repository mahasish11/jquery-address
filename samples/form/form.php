<?php 
    
    function form($name) {
    	if (isset($_REQUEST[$name])) {
            echo($name . ': ' . $_REQUEST[$name] . PHP_EOL);
    	}
    }
    
    form('input');
    form('textarea');
    form('select');
    form('checkbox1');
    form('checkbox2');
    form('checkbox3');
    form('radio');
    
?>