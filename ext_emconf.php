<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "lib_jquery_unveil".
 *
 * Auto generated 19-08-2014 16:34
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'JS Library: jQuery.unveil',
    'description' => 'Provides the "Unveil"-Plugin for jQuery".',
    'category' => 'misc',
    'version' => '0.0.0',
    'state' => 'beta',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => true,
    'author' => 'Stephan Kellermayr',
    'author_email' => 'stephan.kellermayr@gmail.com',
    'author_company' => 'sonority.at - MULTIMEDIA ART DESIGN',
    'constraints' => [
        'depends' => [
            'typo3' => '6.2.0-7.2.99',
        ],
        'conflicts' => [
            'lib_jquery_lazyload' => '0.0.0-'
        ],
        'suggests' => [
            'lib_jquery' => '0.0.1-'
        ],
    ],
];
