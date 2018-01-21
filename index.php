<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-21
 * Time: 10:35
 */

require_once 'ApprovalTrait.php';
require_once 'AbstractMedia.php';
require_once 'AbstractText.php';
require_once 'Entry.php';
require_once 'Comment.php';
require_once 'Photo.php';
require_once 'Video.php';


$photo = new Photo();
$photo->Approve(1).PHP_EOL;

$comment = new Comment();
$comment->Approve(3).PHP_EOL;