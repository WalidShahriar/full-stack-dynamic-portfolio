<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* A simple reset for consistent styling */
        

        body {
            font-family: Arial, sans-serif; /* Added a default font */
        }

        .navbar {
            background-color: navy;
            color: white;
            /* Using padding for height and side spacing */
            padding: 15px 30px; 
            display: flex;
            /* This is the magic! */
            justify-content: space-between;
            /* This vertically centers the items */
            align-items: center; 
        }

        /* Style the "Walid" brand link */
        .brand a {
            color: white;
            text-decoration: none; /* Remove underline */
            font-size: 1.5rem; /* Make it larger */
            font-weight: bold;
        }

        /* Style the list containing the nav links */
        .nav-links {
            list-style: none; /* Remove bullet points */
            display: flex; /* Make list items horizontal */
            gap: 25px; /* Modern way to add space between links */
        }

        /* Style the individual links */
        .nav-links a {
            color: white;
            text-decoration: none; /* Remove underline */
            font-size: 1rem;
            /* Add a smooth transition for the hover effect */
            transition: color 0.3s ease; 
        }

        /* Add a hover effect */
        .nav-links a:hover {
            color: #cccccc; /* Lighten the color on hover */
        }

    </style>
</head>
<body>

    <nav class="navbar">
        <div class="brand">
            <a href="#">Walid</a>
        </div>
        
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Skills</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

</body>
</html>