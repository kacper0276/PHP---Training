<?php

function dumb($data) 
{
    echo '<div 
    style="
        background: lightgray;
        display: inline-block;
        padding: 0 10px;
        border: 1px solid black;
    "
    > 
    <pre>';
        print_r($data);
    echo '</pre>
    </div>
    </br>';
}