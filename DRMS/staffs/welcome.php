<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .menu-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .menu-category {
            font-size: 24px;
            margin-top: 20px;
        }

        .menu-item {
            display: flex;
            align-items: center;
            margin: 10px 0;
        }

        .menu-icon {
            font-size: 24px;
            margin-right: 10px;
        }

        .menu-list {
            list-style-type: none;
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="menu-container">
        <h1>Food Menu</h1>

        <div class="menu-category">
            <span class="menu-icon">🍽️</span> Appetizers
        </div>
        <ul class="menu-list">
            <li class="menu-item">
                <span class="menu-icon">🫒</span> Olives
            </li>
            <li class="menu-item">
                <span class="menu-icon">🥙</span> Falafel
            </li>
            <li class="menu-item">
                <span class="menu-icon">🧀</span> Greek Cheese
            </li>
        </ul>

        <div class="menu-category">
            <span class="menu-icon">🍕</span> First Dishes
        </div>
        <ul class="menu-list">
            <li class="menu-item">
                <span class="menu-icon">🍝</span> Pasta
            </li>
            <li class="menu-item">
                <span class="menu-icon">🍕</span> Lasagne
            </li>
            <li class="menu-item">
                <span class="menu-icon">🍕</span> Pizza
            </li>
        </ul>

        <div class="menu-category">
            <span class="menu-icon">🍖</span> Second Dishes
        </div>
        <ul class="menu-list">
            <li class="menu-item">
                <span class="menu-icon">🐟</span> Grilled Fish
            </li>
            <li class="menu-item">
                <span class="menu-icon">🍗</span> Chicken
            </li>
            <li class="menu-item">
                <span class="menu-icon">🍛</span> Meat Curry
            </li>
        </ul>

        <div class="menu-category">
            <span class="menu-icon">🍰</span> Desserts
        </div>
        <ul class="menu-list">
            <li class="menu-item">
                <span class="menu-icon">🍦</span> Ice Cream
            </li>
            <li class="menu-item">
                <span class="menu-icon">🍰</span> Tiramisu
            </li>
            <li class="menu-item">
                <span class="menu-icon">🍫</span> Chocolate Cake
            </li>
        </ul>

        <div class="menu-category">
            <span class="menu-icon">🥤</span> Drinks
        </div>
        <ul class="menu-list">
            <li class="menu-item">
                <span class="menu-icon">🥤</span> Coca-Cola
            </li>
            <li class="menu-item">
                <span class="menu-icon">🍋</span> Lemonade
            </li>
            <li class="menu-item">
                <span class="menu-icon">🍊</span> Fanta
            </li>
        </ul>
    </div>
</body>
<p><br><a href="../index.html">Logout</a></p>
</html>
