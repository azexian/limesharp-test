<?php

/**
 * Takes input string, removes all vowels, makes string lowercase and then returns with only the first letter uppercase
 *
 * @param $string string
 * @return string
 */
function reformat($data) {
    return ucfirst(strtolower(str_replace(['a', 'e', 'i', 'o', 'u'], '', $data)));
}

var_dump(reformat("liMeSHArp DeveLoper TEST"));
