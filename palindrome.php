<?php

/**
 * A palindrome is a word, phrase, number or sequence of words
 * that reads the same backwards as forwards.
 *
 * example:
 * - mom
 * - level
 * - noon
 * - racecar
 * - solos
 * - 110011
 * - 9986899
 */

$string = 'solos';

/**
 * convert to lowercase
 */
$string = strtolower($string);

/**
 * remove spaces for multiple words
 * example:
 * - No lemon, no melon
 * - Red rum, sir, is murder
 */
$string = str_replace(' ', '', $string);

$is_palindrome = false;

$length = strlen($string) - 1;

for ($i = 0; $i <= $length; $i++) {
  $is_palindrome = ($string[$i] == $string[$length - $i]) ? true : false;
}

echo ($is_palindrome) ? 'palindrome.' : 'not a palindrome.';
