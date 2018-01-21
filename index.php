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


$trait = new Photo();
$trait->Approved();

$trait = new Comment();
$trait->Approved();