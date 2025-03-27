<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wise Education</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Power English Notice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        /* Navbar Styling */
            .custom-navbar {
                background-color: white;
                padding: 15px 0;
                border-bottom: 2px solid #e60000; /* Red bottom border */
            }

            /* Brand Text */
            .brand-text {
                font-size: 1.2rem;
                font-weight: bold;
                color: black;
            }

            .sub-brand {
                font-size: 1rem;
                color: #007bff; /* Bootstrap primary blue */
            }

            /* Navigation Links */
            .navbar-nav .nav-link {
                font-size: 0.95rem;
                color: black;
                padding: 8px 15px;
                font-weight: 500;
                transition: color 0.3s ease;
            }

            .navbar-nav .nav-link:hover {
                color: #007bff;
            }

            /* Separator Style */
            .separator {
                color: #ccc;
                font-weight: bold;
                padding: 0 10px;
            }

            /* "My Page" Button */
            .custom-button {
                background-color: #009688; /* Custom teal color */
                border: none;
                padding: 8px 16px;
                font-size: 0.95rem;
                font-weight: bold;
            }

            .custom-button:hover {
                background-color: #00796b; /* Darker shade on hover */
            }

        /* Responsive Adjustments */
        /* @media (max-width: 992px) {
            .navbar-nav {
                text-align: center;
            }
            .separator {
                display: none;
            }
        } */
        .hero-section {
            background: #f8f9fa;
            padding: 60px 15px;
            text-align: center;
        }
        .notice-list {
            margin-top: 20px;
        }
        .table-responsive {
            overflow-x: auto;
        }
         /* Fixed Footer */
         .footer {
            background: #343a40;
            color: white;
            padding: 15px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
        @media (max-width: 768px) {
            .hero-section h2 {
                font-size: 24px;
            }
            .hero-section p {
                font-size: 14px;
            }
        }
    </style>
    
</head>
<body class="font-sans antialiased sb-nav-fixed">
    <div  id="app">
        <router-view/>
        {{-- <route-view></route-view> --}}
        {{-- <index-component></index-component> --}}
    </div>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
