<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-21
 * Time: 10:29
 */

trait ApprovalTrait
{
    protected $approve;



    public function approve($approve)
    {
        //Set status
       $this->approve = $approve;

    }
}