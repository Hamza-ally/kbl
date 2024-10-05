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

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.ticket-list {
    max-height: 200px;
    overflow-y: scroll;
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 20px;
}

.ticket-item {
    display: flex;
    justify-content: space-between;
    padding: 10px;
    margin-bottom: 10px;
    background-color: #f9f9f9;
    border-radius: 5px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.ticket-info p {
    margin: 5px 0;
}

.view-button {
    padding: 10px 15px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.view-button:hover {
    background-color: #0056b3;
}

.ticket-details {
    display: none;
}

.ticket-info label {
    display: block;
    margin-top: 10px;
}

input[type="text"], textarea {
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

</style>

    <div class="py-6">
        <div class="max-w-12xl mx-auto sm:px-12 lg:px-6">
            {{-- max width for screen set 12x, lg:px padding x y plan etc  --}}
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-welcome /> --}}
                <div class="ticket-container">
                    <h1>Assigned Tickets</h1>
                    
                    <!-- Scrollable List of Tickets -->
                    <div class="ticket-list">
                        <!-- Ticket 1 -->
                        <div class="ticket-item">
                            <div class="ticket-info">
                                <p><strong>Ticket ID:</strong> 12345</p>
                                <p><strong>Assigned To:</strong> Employee Jane Smith</p>
                            </div>
                            <div class="ticket-actions">
                                <button class="view-button" onclick="openTicket(12345)">View</button>
                            </div>
                        </div>
            
                        <!-- Ticket 2 -->
                        <div class="ticket-item">
                            <div class="ticket-info">
                                <p><strong>Ticket ID:</strong> 12346</p>
                                <p><strong>Assigned To:</strong> Employee John Doe</p>
                            </div>
                            <div class="ticket-actions">
                                <button class="view-button" onclick="openTicket(12346)">View</button>
                            </div>
                        </div>
            
                        <!-- More tickets can be added in the same structure -->
                    </div>
            
                    <!-- Ticket Details (This will show after clicking the "View" button) -->
                    <div class="ticket-details" id="ticket-details" style="display:none;">
                        <h2>Assigned Ticket</h2>
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
                            <input type="text" id="status" readonly>
                        </div>
            
                        <div class="ticket-info">
                            <label for="priority">Priority:</label>
                            <input type="text" id="priority" readonly>
                        </div>
            
                        <div class="ticket-info">
                            <label for="description">Description:</label>
                            <textarea id="description" readonly></textarea>
                        </div>
            
                        <div class="go-back">
                            <button onclick="closeTicketDetails()" class="btn">Go Back</button>
                        </div>
                    </div>
                </div>
            
                <script>
                    // Sample data (in real case, fetched dynamically)
                    const tickets = {
                        12345: {
                            title: 'System Error',
                            assigned_by: 'Manager John Doe',
                            assigned_to: 'Employee Jane Smith',
                            status: 'In Progress',
                            priority: 'High',
                            description: 'System error needs urgent attention'
                        },
                        12346: {
                            title: 'Database Issue',
                            assigned_by: 'Manager Mary Jane',
                            assigned_to: 'Employee John Doe',
                            status: 'Pending',
                            priority: 'Medium',
                            description: 'Database needs optimization'
                        }
                    };
            
                    function openTicket(ticketId) {
                        const ticket = tickets[ticketId];
                        if (ticket) {
                            document.getElementById('ticket-number').value = ticketId;
                            document.getElementById('ticket-title').value = ticket.title;
                            document.getElementById('assigned-by').value = ticket.assigned_by;
                            document.getElementById('assigned-to').value = ticket.assigned_to;
                            document.getElementById('status').value = ticket.status;
                            document.getElementById('priority').value = ticket.priority;
                            document.getElementById('description').value = ticket.description;
                            
                            document.querySelector('.ticket-list').style.display = 'none';
                            document.getElementById('ticket-details').style.display = 'block';
                        }
                    }
            
                    function closeTicketDetails() {
                        document.getElementById('ticket-details').style.display = 'none';
                        document.querySelector('.ticket-list').style.display = 'block';
                    }
                </script>


            </div>
        </div>
    </div>
</x-app-layout>
