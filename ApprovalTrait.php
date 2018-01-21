<?php
/**
 * Created by PhpStorm.
 * User: Darek P
 * Date: 2018-01-21
 * Time: 10:29
 */

trait ApprovalTrait
{
    protected $Approved;
    protected $NotApproved;


    public function Approved()
    {
        $this->Approved = $Approved;
        $this->NotApproved=$NotApproved;
    }
}