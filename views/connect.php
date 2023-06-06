<?php
/**
 * @var array $options
 * @var array $plugin
 */


define('ELFINDER_IMG_PARENT_URL', \igorkri\elfinder\Assets::getPathUrl());

// run elFinder
$connector = new elFinderConnector(new \igorkri\elfinder\elFinderApi($options, $plugin));
$connector->run();

//array(
//    [roots] => array(
//        [0] => array(
//            [driver] => LocalFileSystem
//            [plugin] => array()
//            [defaults] => array(
//                [read] => 1
//                [write] => 1
//            )
//            [alias] => Files
//            [tmpPath] => /home / igor / develop / iknet_mod / backend / runtime / elFinderTmpPath
//            [tmbPath] => /home / igor / develop / iknet_mod / backend / web / assets / 7d2a6ad7 / aac4216dd75ccc531088fca1f20ccd4c
//            [tmbURL] => http://iknetmod.loc/admin/assets/7d2a6ad7/aac4216dd75ccc531088fca1f20ccd4c
//            [mimeDetect] => internal
//            [imgLib] => auto
//            [attributes] => Array (
//                [0] => Array ( [pattern] => #.*(\.tmb|\.quarantine)$#i [read] => [write] => [hidden] => 1 [locked] => ) )
//                [path] => /home/igor/develop/iknet_mod/frontend/web/img/posts
//                [URL] => /admin/img/posts ) ) )