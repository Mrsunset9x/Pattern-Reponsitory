<?php


namespace App\reponsitory;


use App\Customer;

class CustomerReponsitory implements CustomerReponsitoryInterface
{
    public function getAll()
    {
        return Customer::orderBy('name')
            ->where('active' ,1 )
            ->with('user')
            ->get()
            ->map->format();

    }
    public function findById($customerID)
    {
        return $customer =  Customer::where('id',$customerID)
            ->where('active',1)
            ->with('user')
            ->firstOrFail()
            ->format()
            ;

    }

    public function update($customerID)
    {
         $customer = Customer::where('id',$customerID)->firstOrFail();
         return $customer->update(request()->only('name'));
    }

    public function delete($CustomerId)
    {
        $customer = Customer::where('id',$CustomerId)->delete();
    }
}
