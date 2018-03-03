<?php
namespace AngularFilemanager\LocalBridge;

/**
 *  PHP Local filesystem bridge for angular-filemanager
 *
 *  @author Jakub Ďuraš <jakub@duras.me>
 *  @version 0.2.0
 */
include 'LocalBridge/Response.php';
include 'LocalBridge/Rest.php';
include 'LocalBridge/Translate.php';
include 'LocalBridge/FileManagerApi.php';

/**
 * Takes two arguments
 * - base path without last slash (default: '$currentDirectory/../files')
 * - language (default: 'en'); mute_errors (default: true, will call ini_set('display_errors', 0))
 */
$fileManagerApi = new FileManagerApi(__DIR__ . '/../../../../images');
// echo $fileMAnagerApi->basePath;

$post = array($fileManagerApi, 'postHandler');
$get = array($fileManagerApi, 'getHandler');
$rest = new Rest();
$rest->post($post)
     ->get($get)
     ->handle();

