<?php
function capitalize( $cityName ): string
{
    return mb_convert_case($cityName, MB_CASE_TITLE, "UTF-8");
    }
var_dump( capitalize( 'нью-йорк' ) );
var_dump( capitalize( 'киЇв' ) );

/*function capitalizeSeparator( $newCityName ): string
{
    $separator = [ 'на', 'де' ];
    return ... //І тут мені потрібна допомога, бо не розумію, як цей розділювач зробити(((
}
echo capitalizeSeparator('ФраНкфурт-На-майні');