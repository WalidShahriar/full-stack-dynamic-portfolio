<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>     
        body {
            font-family: Arial, sans-serif; 
        }

        .navbar {
            background-color: black;
            color: white;
            padding: 15px 30px; 
            display: flex;
            justify-content: space-between;
            align-items: center; 
        }

        .brand a {
            color: white;
            text-decoration: none; 
            font-size: 1.5rem; 
            font-weight: bold;
        }

        .nav-links {
            list-style: none; 
            display: flex; 
            gap: 25px; 
        }

        .nav-links a {
            color: white;
            text-decoration: none; 
            font-size: 1rem;
            transition: color 0.3s ease; 
        }

        .nav-links a:hover {
            color: #cccccc;
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