<?php

/**
 * Rules
 *
 * @package   MyAAC
 * @author    Gesior <jerzyskalski@wp.pl>
 * @author    Slawkens <slawkens@gmail.com>
 * @copyright 2019 MyAAC
 * @link      https://my-aac.org
 */
defined('MYAAC') or die('Direct access not allowed!');
$title = 'Rules';

$twig->display('rules.html.twig', [
	'page' => $_page,
	'nextPage' => $nextPage,
]);
