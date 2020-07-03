<?php

namespace App\reponsitory;

interface CustomerReponsitoryInterface
{
    public function getAll();

    public function findById($customerID);

    public function update($customerID);

    public function delete($CustomerId);
}
