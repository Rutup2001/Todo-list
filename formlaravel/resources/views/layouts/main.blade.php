<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="{{ asset('path-to-your-fontawesome-folder/css/all.min.css') }}">

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }
    .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: .25rem;
    padding-left: 20px;
    padding-right: 20px;
}
    .container {
        width: 100%;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .header {
        background-color: #333;
        color: #fff;
        padding: 1rem;
        text-align: center;
    }
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #ff4264;
        padding: 0.5rem 1rem;
        color: #fff;
    }
    button.btn.btn-primary.mt-3.my-2 {
    background-color: green;
}
    .navbar .logo {
        font-size: 1.5rem;
        font-weight: bold;
    }
    .navbar .profile {
        position: relative;
        display: flex;
        align-items: center;
        cursor: pointer;
    }
    .navbar .profile img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }
    .profile-dropdown {
        display: none;
        position: absolute;
        right: 0;
        top: 100%;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        padding: 1rem;
        color: #333;
        text-align: center;
        z-index: 10;
    }
    .profile-dropdown p {
        margin: 0 0 1rem 0;
    }
    .profile-dropdown a {
        color: #007bff;
        text-decoration: none;
    }
    .profile-dropdown a:hover {
        text-decoration: underline;
    }
    .todo-list {
        padding: 1rem;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .todo-item {

        display: flex;
        align-items: center;
        margin-bottom: 0.5rem;
        padding: 0.5rem;
        background-color: #f0f0f0;
        border-radius: 5px;
    }
    .todo-item input[type="checkbox"] {
        margin-right: 0.5rem;
    }
    .todo-item label {
        flex-grow: 1;
        cursor: pointer;
    }
    .add-task {
        display: flex;
        align-items: center;
        padding: 1rem;
        background-color: #f0f0f0;
        border-bottom-left-radius: 8px;
        justify-content: space-between;
        border-bottom-right-radius: 8px;
    }
    .add-task input[type="text"] {
        flex-grow: 1;
        padding: 0.5rem;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-right: 1rem;
    }
    .add-task button {
        padding: 0.5rem 1rem;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .add-task button:hover {
        background-color: #0056b3;
    }
    .show {
    display: block;
}

</style>
</head>

<body>
<div class="container1">
    <!-- <header class="header">
        <h1>Todo List Dashboard</h1>
    </header> -->
    <div class="navbar">
    <div class="logo flex items-center">
    <i class="fas fa-tasks text-xl mr-2"></i>
    <span></span>
</div>

        <div class="profile" onclick="toggleProfileDropdown()">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="User Avatar">
            <span>{{ auth()->user()->name }}</span>
            <div class="profile-dropdown" id="profile-dropdown">
                <p>Welcome, {{ auth()->user()->name }}</p>
                <a href="{{ route('logout') }}" class="logout" onclick="logout()">Logout</a>
            </div>
        </div>
    </div>

    @yield('main-section')
</div>

<script>
    function toggleProfileDropdown() {
        const dropdownMenu = document.getElementById('profile-dropdown');
        dropdownMenu.classList.toggle('show');
    }

    function logout() {
        // Add your logout logic here
        console.log('Logging out');
    }
</script>

</body>
</html>
