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
                    <h1>Assigned Tickets</h1>
            
                    <!-- Ticket List Section (Basic Info) -->
                    <div class="ticket-list">
                        {{-- onclick="showTicketDetails('ticket1') --}}
                        <div class="ticket-summary">
                            <p><strong>Ticket ID:</strong> 12345</p>
                            <p><strong>Assigned To:</strong> Employee Jane Smith</p>
                            <button>
                                <a class="btn" href="{{ route('progopenticket') }}">View Details</a>
                            </button>
                            </div>
                        
                        <div class="ticket-summary">
                            <p><strong>Ticket ID:</strong> 67890</p>
                            <p><strong>Assigned To:</strong> Employee John Doe</p>
                            <a class="btn" href="{{ route('progopenticket') }}">View Details</a>
                        </div>
                    </div>
                </div>
                    
                

                


            </div>
        </div>
    </div>
</x-app-layout>
