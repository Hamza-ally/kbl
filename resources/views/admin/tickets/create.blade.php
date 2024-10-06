<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tickets') }}

        </h2>
    </x-slot>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        textarea {
            resize: none;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
    <div class="form-container">
        <h2>Create Ticket</h2>
        <form action="#" method="POST">
            <!-- Customer Name -->
            <div class="form-group">
                <label for="customer_name">Customer Name</label>
                <input type="text" id="customer_name" name="customer_name" placeholder="Enter customer name" required>
            </div>

            <!-- Customer ID -->
            <div class="form-group">
                <label for="customer_id">Customer ID</label>
                <input type="text" id="customer_id" name="customer_id" placeholder="Enter customer ID" required>
            </div>

            <!-- Ticket ID -->
            <div class="form-group">
                <label for="ticket_id">Ticket ID</label>
                <input type="text" id="ticket_id" name="ticket_id" placeholder="Enter ticket ID" required>
            </div>

            <!-- Ticket Type -->
            <div class="form-group">
                <label for="ticket_type">Ticket Type</label>
                <select id="ticket_type" name="ticket_type" required>
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                </select>
            </div>

            <!-- Address -->
            <div class="form-group">
                <label for="address">Customer Address</label>
                <textarea id="address" name="address" rows="4" placeholder="Enter customer address" required></textarea>
            </div>

            <!-- Assign To -->
            <div class="form-group">
                <label for="assign_to">Assign To</label>
                <select id="assign_to" name="assign_to" required>
                    <option value="">Select Employee</option>
                    <option value="employee1">Employee 1</option>
                    <option value="employee2">Employee 2</option>
                    <option value="employee3">Employee 3</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit">Create Ticket</button>
            </div>
        </form>
    </div>
</x-app-layout>
