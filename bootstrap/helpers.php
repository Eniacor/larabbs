<?php
/**
 *current routeName replace cssName 
 */
function route_class(){
    return str_replace('.','-',Route::currentRouteName());
}