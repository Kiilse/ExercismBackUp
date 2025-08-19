<?php

function language_list(...$list)
{
    $newList = [];

    foreach ($list as $item) {
        array_push($newList, $item);
    }
    
    return $newList;
}

function add_to_language_list($list, $language)
{
    array_push($list, $language);
    return $list;
}

function prune_language_list($list)
{
    array_shift($list);
    return $list;
}

function current_language($list)
{
    return array_shift($list);
}

function language_list_length($list)
{
    return count($list);
}
