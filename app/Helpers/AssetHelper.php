<?php

/**
 * AssetHelper
 *
 * @author Muhammad Shahab <shahab@inoviotech.com>
 * @date   09/06/21
 */

/**
 * Used to generate URL of the CSS file for front end
 */
function frontCss($file = '')
{
    return asset('assets/front/css/' . $file);
}

/**
 * Used to generate URL of the fonts file for front end
 */
function frontFont($file = '')
{
    return asset('public/assets/front/fonts/' . $file);
}

function frontSass($file = '')
{
    return asset('assets/front/sass/' . $file);
}

/**
 * Used to generate URL of the image file for front end
 */
function frontImage($file = '')
{
    return asset('assets/front/images/' . $file);
}

/**
 * Used to generate URL of the JavaScript file for front end
 */
function frontJs($file = '')
{
    return asset('assets/front/js/' . $file);
}

function frontSlick($file = '')
{
    return asset('assets/front/slick/' . $file);
}
