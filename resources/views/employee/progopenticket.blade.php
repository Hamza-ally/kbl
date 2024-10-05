<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>
    <style>
        .ticket-container {
    width: 90%;
    max-width: 800px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

h1, h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.ticket-summary {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #f7f7f7;
    padding: 15px;
    margin-bottom: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.ticket-summary p {
    margin: 0;
}

.ticket-info {
    margin-bottom: 20px;
}

.ticket-info label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"], textarea, select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

textarea {
    height: 80px;
    resize: none;
}

input[type="file"] {
    padding: 10px;
}

.btn {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #0056b3;
}

.ticket-details {
    /* display: none; */
    background-color: #f7f7f7;
    padding: 20px;
    border-radius: 10px;
    margin-top: 20px;
}

.hidden {
    display: none;
}

.submit-section, .go-back {
    text-align: center;
}

.ticket-list {
    margin-top: 20px;
}
    </style>

    <div class="py-6">
        <div class="max-w-12xl mx-auto sm:px-12 lg:px-6">
            {{-- max width for screen set 12x, lg:px padding x y plan etc  --}}
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-welcome /> --}}
                <div class="ticket-container">
                    <h1>Ticket Details</h1>
                    <div class="ticket-details">
                        <!-- Placeholder for JavaScript to load ticket details based on URL parameter -->
                        <div class="ticket-info">
                            <label for="ticket-number">Ticket Number:</label>
                            <input type="text" id="ticket-number" readonly>
                        </div>
            
                        <div class="ticket-info">
                            <label for="ticket-title">Title:</label>
                            <input type="text" id="ticket-title" readonly>
                        </div>
            
                        <div class="ticket-info">
                            <label for="assigned-by">Assigned By:</label>
                            <input type="text" id="assigned-by" readonly>
                        </div>
            
                        <div class="ticket-info">
                            <label for="assigned-to">Assigned To:</label>
                            <input type="text" id="assigned-to" readonly>
                        </div>
            
                        <div class="ticket-info">
                            <label for="status">Status:</label>
                            <input type="text" id="status">
                        </div>
            
                        <div class="ticket-info">
                            <label for="priority">Priority:</label>
                            <input type="text" id="priority" readonly>
                        </div>
            
                        <div class="ticket-info">
                            <label for="description">Description:</label>
                            <textarea id="description" readonly></textarea>
                        </div>
            
                        <!-- Employee Status Update Section -->
                        <div class="ticket-info">
                            <label for="employee-status">Update Status:</label>
                            <select id="employee-status">
                                <option value="In Progress">In Progress</option>
                                <option value="Completed">Completed</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>
            
                        <div class="ticket-info">
                            <label for="employee-comment">Comment on the Work Done:</label>
                            <textarea id="employee-comment" placeholder="Enter your comment here..."></textarea>
                        </div>
            
                        <div class="ticket-info">
                            <label for="image-upload">Upload Image (if any):</label>
                            <input type="file" id="image-upload" accept="image/*">
                        </div>
            
                        <div class="submit-section">
                            <button class="btn">Submit Update</button>
                        </div>
            
                        <div class="go-back">
                            <a href="{{ route('openticket') }}" class="btn">Go Back</a>
                        </div>
                    </div>
                </div>
            
                

            </div>
        </div>
    </div>
    <script>
        // Function to get URL parameters
        function getQueryParam(name) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(name);
        }

        // Function to load ticket details based on the ticket ID
        function loadTicketDetails() {
            const ticketId = getQueryParam('ticket_id');
            if (ticketId) {
                // Mock data for demonstration purposes
                document.getElementById('ticket-number').value = ticketId;
                document.getElementById('ticket-title').value = 'System Error';
                document.getElementById('assigned-by').value = 'Manager John Doe';
                document.getElementById('assigned-to').value = 'Employee Jane Smith';
                document.getElementById('status').value = 'In Progress';
                document.getElementById('priority').value = 'High';
                document.getElementById('description').value = 'System error needs urgent attention';
            }
        }

        // Load ticket details on page load
        window.onload = loadTicketDetails;
    </script>
</x-app-layout>
