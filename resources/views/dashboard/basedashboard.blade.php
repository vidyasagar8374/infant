<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .wrapper {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        /* Navbar Styles */
        .navbar {
            width: 100%;
            background-color: #343a40;
            color: white;
            padding: 15px;
            z-index: 1030;
        }
        .navbar .toggle-btn {
            background: none;
            border: none;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }
        .navbar .profile-dropdown {
    position: relative;
    display: inline-block;
    margin-left: auto;
}

.navbar .profile-dropdown img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    cursor: pointer;
}

.navbar .dropdown-menu {
    position: absolute;
    top: 50px; /* Adjust the position below the profile */
    right: 0;
    background-color: white;
    display: none; /* Keep it hidden initially */
    border-radius: 4px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 1000; /* Ensure the dropdown is on top */
}

.navbar .dropdown-menu a {
    display: block;
    padding: 8px 16px;
    text-decoration: none;
    color: black;
}

.navbar .dropdown-menu a:hover {
    background-color: #f1f1f1; /* Hover effect on dropdown items */
}


        /* Sidebar Styles */
        #sidebar {
                    top: 60px;
                    left: 0;
                    bottom: 0;
                    width: 250px;
                    z-index: 996;
                    transition: all 0.3s;
                    padding: 20px;
                    overflow-y: auto;
                    scrollbar-width: thin;
                    scrollbar-color: #aab7cf transparent;
                    box-shadow: 0px 0px 20px rgba(1, 41, 112, 0.1);
                    background-color: #fff;
                    position: fixed;
                    height: 100vh;

        }
        #sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        #sidebar ul li {
            padding: 15px 20px;
            cursor: pointer;
        }
        #sidebar ul li:hover {
            background-color: #495057;
        }
        #sidebar ul li i {
            margin-right: 10px;
        }

        /* Hide sidebar completely on small screens */
        @media (max-width: 768px) {
            #sidebar {
                top: 0;
                margin-left: -250px;
            }
            .sidebar-show {
                margin-left: 0 !important;
            }
            .content {
                margin-left: 0 !important;
            }
        }

        /* Full width Navbar on large screens */
        .content {
            padding: 20px 30px;
            margin-left: 250px;
            margin-top: 60px; /* Adds space for navbar height */
            transition: all 0.3s;
        }
        /* Sidebar hidden for large screens when not toggled */
        .sidebar-hidden {
            margin-left: -250px !important;
        }

        /* Full width when sidebar is hidden */
        .full-width {
            margin-left: 0 !important;
        }

        /* Overlay effect for small screens */
        @media (max-width: 768px) {
            #sidebar.sidebar-show {
                position: absolute;
                z-index: 1000;
            }
        }


        .navbar{
            transition: all 0.5s;
            z-index: 997;
            height: 60px;
            box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);
            background-color: #fff;
            padding-left: 20px;
            color : black;
                }
         .navbar  .toggle-btn{
            color : black;
            font-size : 1.5rem;
            
         }   
         
         
          /* Overlay styles for small screens */
    .sidebar-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 10; /* Ensure it appears above other content */
    }

    /* Show overlay when sidebar is visible on small screens */
    .sidebar-show + .sidebar-overlay {
        display: block;
    }
    #sidebar ul li a{
        text-decoration : none;
        color : black;
    }
    #sidebar ul li:hover{
    padding: 15px 20px;
   background-color : white;
}
    /* Content styles */
    .full-width {
        width: 100%; /* Full-width content when sidebar is hidden */
    }
        .avatar img{
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
            height: 50px;
            width: 50px;
            }

#sidebar ul li.active {
    background-color: #007bff; /* Set your preferred color */
    color: white; /* Optional: Change text color */
}

#sidebar ul li.active a {
    color: white; /* Ensure link text is visible on the background */
}


    </style>
</head>
<body>

<div class="wrapper">
    <!-- Navbar -->
    <nav class="navbar fixed-top">
    <a class="navbar-brand" href="#">
    <img src="{{ asset('inpageimages\png-transparent-infant-jesus-of-prague-religion-christ-child-the-imitation-of-christ-statue-jesus-statue-child-infant-resurrection-of-jesus-thumbnail.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
    Admin
  </a>
        <button class="toggle-btn" id="toggle-btn">
            <i class="bi bi-list"></i>
        </button>
        <div class="profile-dropdown float-end">
            <img src="https://via.placeholder.com/40" alt="Profile">
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Settings</a>
                <a href="#" class="dropdown-item">Activity Log</a>
                @if(auth()->check())
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                @endif

        
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div id="sidebar">
    <ul>
        <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="bi bi-speedometer2"></i>
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        </li>
        <li class="{{ request()->routeIs('admin.getbanners') ? 'active' : '' }}">
            <i class="bi bi-images"></i>
            <a href="{{ route('admin.getbanners') }}">Banners</a>
        </li>
        <li class="{{ request()->routeIs('admin.getposts') ? 'active' : '' }}">
            <i class="bi bi-calendar4-event"></i>
            <a href="{{ route('admin.getposts') }}">Posts</a>
        </li>
        <li class="{{ request()->routeIs('admin.getyoutube') ? 'active' : '' }}">
            <i class="bi bi-youtube"></i>
            <a href="{{ route('admin.getyoutube') }}">Youtube</a>
        </li>
        <li class="{{ request()->routeIs('admin.parishpristlist') ? 'active' : '' }}">
            <i class="bi bi-person-vcard"></i>
            <a href="{{ route('admin.parishpristlist') }}">Parish Prists</a>
        </li>
        <li class="{{ request()->routeIs('admin.contactlist') ? 'active' : '' }}">
            <i class="bi bi-person-rolodex"></i>
            <a href="{{ route('admin.contactlist') }}">Enquiries</a>
        </li>
        <li>
            @if(auth()->check())
            <i class="bi bi-box-arrow-right"></i>
                    <a  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endif
        </li>
    </ul>
</div>


    <div id="sidebar-overlay" class="sidebar-overlay"></div>
    @yield('content')
  

    <!-- end wrapper -->
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<script>
document.getElementById('toggle-btn').addEventListener('click', function () {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        const content = document.querySelector('.content');

        if (window.innerWidth <= 768) {
            // Toggle sidebar and overlay on small screens
            sidebar.classList.toggle('sidebar-show');
            overlay.classList.toggle('sidebar-show');
        } else {
            // Toggle sidebar and content width on larger screens
            sidebar.classList.toggle('sidebar-hidden');
            content.classList.toggle('full-width');
        }
    });

    // Close sidebar on small screens when overlay is clicked
    document.getElementById('sidebar-overlay').addEventListener('click', function () {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        
        // Hide sidebar and overlay
        sidebar.classList.remove('sidebar-show');
        overlay.classList.remove('sidebar-show');
    });


    document.addEventListener('DOMContentLoaded', function() {
    const profileImage = document.querySelector('.profile-dropdown img');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    // Toggle the dropdown menu on click
    profileImage.addEventListener('click', function(event) {
        event.stopPropagation(); // Prevent the event from bubbling up
        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block'; // Toggle visibility
    });

    // Close the dropdown when clicking outside
    document.addEventListener('click', function(event) {
        if (!dropdownMenu.contains(event.target) && !profileImage.contains(event.target)) {
            dropdownMenu.style.display = 'none'; // Hide the dropdown
        }
    });
});

</script>

</body>
</html>
