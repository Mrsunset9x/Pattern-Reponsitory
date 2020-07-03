<?php

namespace App\Http\Controllers;

use App\reponsitory\CustomerReponsitoryInterface;


class CustomerController extends Controller
{
    private $customerReponsitory;

    public function __construct(CustomerReponsitoryInterface $customerReponsitory)
    {
        $this->customerReponsitory = $customerReponsitory;
    }

    public function index()
    {
        $customer =  $this->customerReponsitory->getAll();

        return $customer;
    }

    public function show($id)
    {
        $customer = $this->customerReponsitory->findById($id);
        return $customer;
    }

    public function update($customerId)
    {
        $this->customerReponsitory->update($customerId);
        return redirect('/customer/'.$customerId);
    }
    public function delete($customerId)
    {
        $this->customerReponsitory->delete($customerId);
        return redirect('/');
    }
}
