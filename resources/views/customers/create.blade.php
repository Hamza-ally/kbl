<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <style>
        .form-container {
            width: 100%;
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 15px;
            margin-bottom: 5px;
            color: #333;
        }

        input,
        select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            margin-top: 20px;
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>


    <div class="py-6">
        <div class="max-w-12xl mx-auto sm:px-6 lg:px-2">
            {{-- max width for screen set 12x, lg:px padding x y plan etc  --}}
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-welcome /> --}}
                <div class="form-container">
                    <h2>Customer Information Form</h2>
                    <form action="{{ route('customers.create') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="name">Customer Name:</label>
                            <input type="text" id="name" name="name" placeholder="Enter customer name"
                                required>
                            @if ($errors->has('name'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="contact">Contact:</label>
                            <input type="text" id="contact" name="contact" placeholder="Enter CNIC" required>
                            @if ($errors->has('contact'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('contact') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="cnic">CNIC:</label>
                            <input type="text" id="cnic" name="cnic" placeholder="Enter CNIC" required>
                            @if ($errors->has('cnic'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('cnic') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="address" placeholder="Enter address" required>
                            @if ($errors->has('address'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('address') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" id="city" name="city" placeholder="Enter city" required>
                            @if ($errors->has('city'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('city') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="Enter email" required>
                            @if ($errors->has('email'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="conn_id">Customer Connection ID:</label>
                            <input type="number" id="conn_id" name="conn_id" placeholder="Enter connection ID"
                                required>
                            @if ($errors->has('conn_id'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('conn_id') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="package_type">Customer Package Type:</label>
                            <select id="package_type" name="package_type" required>
                                <option>Select package</option>
                                <option value="basic">Basic</option>
                                <option value="premium">Premium</option>
                                <option value="enterprise">Enterprise</option>
                            </select>
                            @if ($errors->has('package_type'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('package_type') }}
                                </div>
                            @endif
                        </div>

                        <button type="submit">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
