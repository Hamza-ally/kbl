<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DestroyCustomerRequest;
use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        $customer = new Customer();
        $customer->creator_id = Auth::user()->id;
        $customer->last_editor_id = Auth::user()->id;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->contact = $request->contact;
        $customer->cnic = $request->cnic;
        $customer->conn_id = $request->conn_id;
        $customer->package_type = $request->package_type;
        $customer->city = $request->city;
        $customer->address = $request->address;

        if ($customer->save())
            return redirect()->back()
                ->with('message', 'Customer created!')
                ->with('type', 'success')
                ->with('status', 'success')
                ->with('code', 200);
        else
            return redirect()->back()
                ->with('message', 'Customer not created!')
                ->with('type', 'warning')
                ->with('status', 'warning')
                ->with('code', 409);

        return redirect()->back()
            ->with('message', 'Internal server error!')
            ->with('type', 'error')
            ->with('status', 'danger')
            ->with('code', 409);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $query = "
            SELECT cus.id, cus.name, cus.email, cus.contact, cus.cnic, cus.conn_id, cus.package_type, cus.city, cus.address FROM
            customers cus
            ORDER BY cus.id DESC;
        ";

        $customers = collect(DB::select($query))->toArray();
        return view('customers/view', compact('customers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $query = "
            SELECT cus.id, cus.name, cus.email, cus.contact, cus.cnic, cus.conn_id, cus.package_type, cus.city, cus.address FROM
            customers cus
            WHERE cus.id = ?
            LIMIT 1;
        ";
        $customer = collect(DB::select($query, [$id])[0])->toArray();

        return view('customers/edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request)
    {
        if (is_null($request->cus_id) || empty($request->cus_id))
            return redirect()->back()
                ->with('message', 'Internal server error!')
                ->with('type', 'error')
                ->with('status', 'danger')
                ->with('code', 409);


        $customer = Customer::where('id', $request->cus_id)->first();

        $customer->last_editor_id = Auth::user()->id;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->contact = $request->contact;
        $customer->cnic = $request->cnic;
        $customer->conn_id = $request->conn_id;
        $customer->package_type = $request->package_type;
        $customer->city = $request->city;
        $customer->address = $request->address;
        $customer->updated_at = now()->format('Y-m-d H:i:s');

        if ($customer->save())
            return redirect()->back()
                ->with('message', 'Customer updated!')
                ->with('type', 'success')
                ->with('status', 'success')
                ->with('code', 200);
        else
            return redirect()->back()
                ->with('message', 'Customer not updated!')
                ->with('type', 'warning')
                ->with('status', 'warning')
                ->with('code', 409);

        return redirect()->back()
            ->with('message', 'Internal server error!')
            ->with('type', 'error')
            ->with('status', 'danger')
            ->with('code', 409);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DestroyCustomerRequest $request)
    {
        if (is_null($request->cus_id) || empty($request->cus_id))
            return redirect()->back()
                ->with('message', 'Internal server error!')
                ->with('type', 'error')
                ->with('status', 'danger')
                ->with('code', 409);

        $customer = Customer::where('id', $request->cus_id)->first();

        if ($customer->delete()) {
            return redirect()->back()
                ->with('message', 'Customer deleted!')
                ->with('type', 'success')
                ->with('status', 'success')
                ->with('code', 200);
        } else {
            return redirect()->back()
                ->with('message', 'Customer not deleted!')
                ->with('type', 'warning')
                ->with('status', 'warning')
                ->with('code', 409);
        }
        
        return redirect()->back()
            ->with('message', 'Internal server error!')
            ->with('type', 'error')
            ->with('status', 'danger')
            ->with('code', 409);
    }
}
