<?php

/**
 * Takes passed data and returns it three times.
 * e.g, [1,2,3] would return [1,2,3,1,2,3,1,2,3]
 *
 * @param $data
 * @return array
 * @throws Exception if invalid input passed
 */
function repeat($data) {
    if (!is_array($data)) {
        throw new Exception('Invalid data provided to repeat function');
    }

    return array_merge($data, $data, $data);
}

var_dump(repeat([1,2,3]));
