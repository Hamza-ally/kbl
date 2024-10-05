<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<style>
    .ticket-system {
    width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  .ticket-system h2 {
    text-align: center;
    margin-bottom: 20px;
  }
  
  .form-group {
    margin-bottom: 15px;
  }
  
  .form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }
  
  .form-group select,
  .form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    border: none;
    color: white;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
  }
  
  button:hover {
    background-color: #0056b3;
  } 
    </style>

    <div class="py-6">
        <div class="max-w-12xl mx-auto sm:px-6 lg:px-2">
            {{-- max width for screen set 12x, lg:px padding x y plan etc  --}}
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-welcome /> --}}
                <div class="ticket-system">
                    <h2>Ticket System</h2>
                
                    <form>
                
                      <!-- Customer Type Dropdown -->
                      <div class="form-group">
                        <label for="customerType">Customer Type</label>
                        <select id="customerType" name="customerType">
                          <option value="existing">Existing User</option>
                          <option value="new">New User</option>
                        </select>
                      </div>
                
                      <!-- Ticket Type -->
                      <div class="form-group">
                        <label for="ticketType">Ticket Type</label>
                        <input type="text" id="ticketType" name="ticketType" placeholder="Enter ticket type">
                      </div>
                
                      <!-- Ticket Type -->
                      <div class="form-group">
                        <label for="Customerid">Customer-ID</label>
                        <input type="text" id="Customerid" name="Customerid" placeholder="Enter Customer ID ">
                      </div>
                      <!-- Origin of Ticket -->
                      <div class="form-group">
                        <label for="originOfTicket">Origin of Ticket</label>
                        <input type="text" id="originOfTicket" name="originOfTicket" placeholder="Enter origin of ticket">
                      </div>
                
                      <!-- Issue Type Dropdown -->
                      <div class="form-group">
                        <label for="issueType">Issue Type</label>
                        <select id="issueType" name="issueType">
                          <option value="billing">Billing</option>
                          <option value="technical">Technical Issue</option>
                          <option value="featureRequest">Feature Request</option>
                          <option value="account">Account Issue</option>
                          <option value="other">Other</option>
                        </select>
                      </div>
                
                      <!-- Opened By -->
                      <div class="form-group">
                        <label for="openedBy">Opened By</label>
                        <input type="text" id="openedBy" name="openedBy" placeholder="Enter name of opener">
                      </div>
                
                      <!-- Assigned To -->
                      <div class="form-group">
                        <label for="assignedTo">Assigned To</label>
                        <input type="text" id="assignedTo" name="assignedTo" placeholder="Enter assignee's name">
                      </div>
                
                      <!-- Closed By -->
                      <div class="form-group">
                        <label for="closedBy">Closed By</label>
                        <input type="text" id="closedBy" name="closedBy" placeholder="Enter name of closer">
                      </div>
                
                      <!-- Reassign To -->
                      <div class="form-group">
                        <label for="reassignTo">Reassign To</label>
                        <input type="text" id="reassignTo" name="reassignTo" placeholder="Enter reassign name">
                      </div>
                
                      <!-- Submit Button -->
                      <button type="submit">Submit Ticket</button>
                
                    </form>
                  </div>


            </div>
        </div>
    </div>
</x-app-layout>
