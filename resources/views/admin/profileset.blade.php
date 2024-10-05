<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

   <style>
    .profile-container {
        width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        text-align: center;
    }
    
    h2 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #333;
    }
    
    .profile-form {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
    
    .form-group {
        margin-bottom: 15px;
        width: 100%;
    }
    
    label {
        font-size: 14px;
        margin-bottom: 5px;
        display: block;
        color: #333;
    }
    
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ddd;
        border-radius: 5px;
        outline: none;
    }
    
    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="tel"]:focus,
    input[type="password"]:focus {
        border-color: #007bff;
    }
    
    .btn-save {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }
    
    .btn-save:hover {
        background-color: #0056b3;
    }
</style>
    <div class="py-6">
        <div class="max-w-12xl mx-auto sm:px-6 lg:px-2">
            {{-- max width for screen set 12x, lg:px padding x y plan etc  --}}
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-welcome /> --}}
                <div class="profile-container">
                    <h2>Admin Profile</h2>
                    <form class="profile-form">
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" id="name" name="name" placeholder="Enter your name" value="Admin Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email" value="admin@example.com">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" value="123-456-7890">
                        </div>
                        
                        <!-- Last password field for verification -->
                        <div class="form-group">
                            <label for="last-password">Current Password:</label>
                            <input type="password" id="last-password" name="last-password" placeholder="Enter your current password" required>
                        </div>
            
                        <!-- New password field for updating -->
                        <div class="form-group">
                            <label for="password">New Password:</label>
                            <input type="password" id="password" name="password" placeholder="Enter new password">
                        </div>
            
                        <button type="submit" class="btn-save">Save Changes</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
