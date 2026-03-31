<?php
/*
    AccountNumber
*/
class AccountNumber {
    public int $routing_num;
    public int $account_num;

    public function __construct(
        int $routing_num = 0, int $account_num = 0
    ) {
        $this ->routing_num = $routing_num;
        $this ->account_num = $account_num;
    }
    
}