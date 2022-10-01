<?php
function capitalize( $cityName ): string
{
    return mb_convert_case($cityName, MB_CASE_TITLE, "UTF-8");
}
var_dump( capitalize( 'нью-йорк' ) );
var_dump( capitalize( 'киЇв' ) );

function capitalizeSeparator( $newCityName ): string
{
    $newCityName = mb_strtolower($newCityName);
    $newCityNameArray = explode('-', $newCityName);
    $newCityNameMap = array_map(
        function ($text)
        {
            $separator = [ 'на', 'де' ];
            return in_array($text, $separator)
            ? mb_strtolower($text)
            : capitalize($text);
        },
        $newCityNameArray
    );
    return implode('-', $newCityNameMap);
}
echo capitalizeSeparator('ФраНкфурт-На-майні');
