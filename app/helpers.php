<?php
if (!function_exists('sum_even')) {

    function sum_even(array $data)
    {
        $result = 0;
        foreach ($data['number'] as $key => $value) {
            if ($value % 2 === 0) {
                $result += intval($value);
            }
        }
        return $result;
    }
}

if (!function_exists('remove_vowel')) {

    function remove_vowel($text)
    {
        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ");
        $result = str_replace($vowels, "", $text);
        return $result;
    }
}
