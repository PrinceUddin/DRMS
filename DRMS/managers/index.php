<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .dashboard {
            display: flex;
        }
        .sidebar {
            width: 30%;
            height: 100%;
            background-color: #87CEEB;
            color: #87CEEB;
            padding: 20px;
            box-sizing: border-box;
        }
        .content {
            width: 70%;
            padding: 20px;
            box-sizing: border-box;
        }
        .menu-item {
            margin-bottom: 10px;
        }
        .menu-item a {
            text-decoration: none;
            color: #fff;
            display: block;
            padding: 10px;
            transition: background-color 0.3s ease;
        }
        .menu-item a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
            <div class="menu-item">
                <a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            </div>
            <div class="menu-item">
                <a href="#"><i class="fas fa-table"></i> Tables and Orders</a>
            </div>
            <div class="menu-item">
                <a href="#"><i class="fas fa-clipboard-list"></i> Inventory Report</a>
            </div>
            <div class="menu-item">
                <a href="#"><i class="fas fa-comments"></i> Feedback</a>
            </div>
            <div class="menu-item">
                <a href="#"><i class="fas fa-comments"></i> Feedback</a>
            </div>
        </div>
        <div class="content">
            <p>This is the default dashboard view.</p>
            <img src="pictures/sdbrd.png" alt="Dashboard"></div>
        </div>
        <div>
    </div>
    

    <p><br><a href="../index.html">Logout</a></p>
</body>
</html>
