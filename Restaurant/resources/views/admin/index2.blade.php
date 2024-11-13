<html>
<head>
    <title>GoMeal</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
    body {
            font-family: 'Poppins', sans-serif;
            background-color: #D76C82;
        }
        .sidebar {
            background-color: #D76C82;
            height: 100vh;
            padding: 20px;
            border-right: 1px solid #e0e0e0;
        }
        .sidebar .nav-link {
            color: #333;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .sidebar .nav-link.active {
            background-color: #D76C82;
            color: #fff;
            border-radius: 5px;
        }
        .sidebar .upgrade-box {
            background-color: #D76C82;
            color: #D76C82;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-top: 20px;
        }
        .sidebar .upgrade-box button {
            background-color: #fff;
            color: #ffcc00;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }
        .content {
            padding: 20px;
        }
        .content .search-bar {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .content .search-bar input {
            flex: 1;
            padding: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
        }
        .content .search-bar button {
            background-color: #D76C82;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-left: 10px;
        }
        .content .category, .content .popular, .content .best-seller, .content .promo {
            margin-bottom: 20px;
        }
        .content .category .category-item, .content .popular .popular-item, .content .best-seller .best-seller-item, .content .promo .promo-item {
            background-color: #D76C82;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 10px;
        }
        .content .category .category-item img, .content .popular .popular-item img, .content .best-seller .best-seller-item img, .content .promo .promo-item img {
            max-width: 100%;
            border-radius: 10px;
        }
        .content .category .category-item h5, .content .popular .popular-item h5, .content .best-seller .best-seller-item h5, .content .promo .promo-item h5 {
            margin-top: 10px;
            font-weight: bold;
        }
        .content .category .category-item p, .content .popular .popular-item p, .content .best-seller .best-seller-item p, .content .promo .promo-item p {
            margin-top: 5px;
            color: #888;
        }
        .content .category .category-item .view-all, .content .popular .popular-item .view-all, .content .best-seller .best-seller-item .view-all, .content .promo .promo-item .view-all {
            color: #ffcc00;
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }
        .content .promo .promo-item .discount {
            background-color: #ff0000;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            position: absolute;
            top: 10px;
            left: 10px;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar">
            <h2>
                GoMeal
            </h2>
            <nav class="nav flex-column">
                <a class="nav-link active" href="#">
                    Dashboard
                </a>
                <a class="nav-link" href="#">
                    Menu
                </a>
                <a class="nav-link" href="#">
                    Food Order
                </a>
                <a class="nav-link" href="#">
                    Reviews
                </a>
                <a class="nav-link" href="#">
                    Setting
                </a>
            </nav>
            <div class="upgrade-box">
                <p>
                    Upgrade your Account to get more benefits
                </p>
                <button>
                    Upgrade
                </button>
            </div>
        </div>
        <div class="content flex-grow-1">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>
                    Menu
                </h1>
                <button class="btn btn-warning">
                    Add New Menu
                </button>
            </div>
            <div class="search-bar mb-4">
                <input placeholder="Search" type="text" />
                <button class="btn btn-warning">
                    Search
                </button>
            </div>
            <div class="category mb-4">
                <h4>
                    Category
                </h4>
                <div class="d-flex justify-content-between">
                    <div class="category-item">
                        <img alt="Bakery icon" height="50" src="https://storage.googleapis.com/a1aa/image/f1NeZmmWAui7B0Vf2zAKrH8akVKuVz0DxMy5j05msnwVOvGnA.jpg" width="50" />
                        <h5>
                            Bakery
                        </h5>
                    </div>
                    <div class="category-item">
                        <img alt="Burger icon" height="50" src="https://storage.googleapis.com/a1aa/image/fHwIzsdwbC0lQSIfpRJide3eojzeCHeVOBQgnn8eCpLbmzrxJA.jpg" width="50" />
                        <h5>
                            Burger
                        </h5>
                    </div>
                    <div class="category-item">
                        <img alt="Beverage icon" height="50" src="https://storage.googleapis.com/a1aa/image/iUazIGBRVL4qMprefXVwE4e5r6Qe9wlOUNYiBNJfVkLZ38acC.jpg" width="50" />
                        <h5>
                            Beverage
                        </h5>
                    </div>
                    <div class="category-item">
                        <img alt="Chicken icon" height="50" src="https://storage.googleapis.com/a1aa/image/jgeTTdvT6uUOU6mbUVe6Mi3brsDJjzm79nOOtMkZkea1NvGnA.jpg" width="50" />
                        <h5>
                            Chicken
                        </h5>
                    </div>
                    <div class="category-item">
                        <img alt="Pizza icon" height="50" src="https://storage.googleapis.com/a1aa/image/JK5HSjeDpoSkKKk4PlImOedpzq6BeeM4T0YvpPJJHFGLceacC.jpg" width="50" />
                        <h5>
                            Pizza
                        </h5>
                    </div>
                    <div class="category-item">
                        <img alt="Seafood icon" height="50" src="https://storage.googleapis.com/a1aa/image/W16o0meAfSpHLkL1J3x5uViaKv2hMIVfsJLOrA6ynDRGOvGnA.jpg" width="50" />
                        <h5>
                            Seafood
                        </h5>
                    </div>
                </div>
            </div>
            <div class="popular mb-4">
                <h4>
                    Popular This Week
                </h4>
                <div class="d-flex justify-content-between">
                    <div class="popular-item">
                        <img alt="Fish Burger" height="100" src="https://storage.googleapis.com/a1aa/image/BJTCNzHX06KtIRJ0j9qJpKddeEVDGuJe7OZXUksxzKJFnXjTA.jpg" width="100" />
                        <h5>
                            Fish Burger
                        </h5>
                        <p>
                            $5.59
                        </p>
                        <p>
                            ⭐⭐⭐⭐⭐ 10 User Reviews
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...
                        </p>
                    </div>
                    <div class="popular-item">
                        <img alt="Double Burger" height="100" src="https://storage.googleapis.com/a1aa/image/mJAvAWAVX5beHqOdNy2cGE5iJOOsrLP0k8FGQQAtRfi5mXjTA.jpg" width="100" />
                        <h5>
                            Double Burger
                        </h5>
                        <p>
                            $5.59
                        </p>
                        <p>
                            ⭐⭐⭐⭐⭐ 10 User Reviews
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...
                        </p>
                    </div>
                    <div class="popular-item">
                        <img alt="Beef Burger" height="100" src="https://storage.googleapis.com/a1aa/image/JEDmN6WZEh6lFRrizuaVow8Fq8FXMmGnCvezdr6k2llbzrxJA.jpg" width="100" />
                        <h5>
                            Beef Burger
                        </h5>
                        <p>
                            $5.59
                        </p>
                        <p>
                            ⭐⭐⭐⭐⭐ 10 User Reviews
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...
                        </p>
                    </div>
                    <div class="popular-item">
                        <img alt="Cheese Burger" height="100" src="https://storage.googleapis.com/a1aa/image/7oLxjngssNqOEFqmRhCbEX02nGwdLGqOrQcArqFUbA5v514E.jpg" width="100" />
                        <h5>
                            Cheese Burger
                        </h5>
                        <p>
                            $5.59
                        </p>
                        <p>
                            ⭐⭐⭐⭐⭐ 10 User Reviews
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...
                        </p>
                    </div>
                </div>
            </div>
            <div class="best-seller mb-4">
                <h4>
                    Best Seller
                </h4>
                <div class="d-flex justify-content-between">
                    <div class="best-seller-item">
                        <img alt="Pepperoni Pizza" height="100" src="https://storage.googleapis.com/a1aa/image/m7KRlH33ZHqWOp3HVVRn0g2XkBHjD1Tdrhu8QD43L9jx514E.jpg" width="100" />
                        <h5>
                            Pepperoni Pizza
                        </h5>
                        <p>
                            $5.59
                        </p>
                        <p>
                            Sold: 15
                        </p>
                    </div>
                    <div class="best-seller-item">
                        <img alt="Japanese Ramen" height="100" src="https://storage.googleapis.com/a1aa/image/bqSTSOEwFso4PxolNCdda7jA1rTlbojM3MjMkQpmOgYy514E.jpg" width="100" />
                        <h5>
                            Japanese Ramen
                        </h5>
                        <p>
                            $5.59
                        </p>
                        <p>
                            Sold: 15
                        </p>
                    </div>
                    <div class="best-seller-item">
                        <img alt="Fried Rice" height="100" src="https://storage.googleapis.com/a1aa/image/o4IZ6RIhnvauH9kne6JfBLkSRYWtP9hSTa0NL1XcC0fAOvGnA.jpg" width="100" />
                        <h5>
                            Fried Rice
                        </h5>
                        <p>
                            $5.59
                        </p>
                        <p>
                            Sold: 15
                        </p>
                    </div>
                    <div class="best-seller-item">
                        <img alt="Vegan Pizza" height="100" src="https://storage.googleapis.com/a1aa/image/DhzAw7Hcc7b5GF06zIrNzYs4Phc4xKZNunfA8GTWJ8gjzrxJA.jpg" width="100" />
                        <h5>
                            Vegan Pizza
                        </h5>
                        <p>
                            $5.59
                        </p>
                        <p>
                            Sold: 15
                        </p>
                    </div>
                    <div class="best-seller-item">
                        <img alt="Beef Burger" height="100" src="https://storage.googleapis.com/a1aa/image/some-image.jpg" width="100" />
                        <h5>
                            Beef Burger
                        </h5>
                        <p>
                            $5.59
                        </p>
                        <p>
                            Sold: 15
                        </p>
                    </div>
                </div>
            </div>
            <div class="promo mb-4">
                <h4>
                    Promotions
                </h4>
                <div class="d-flex justify-content-between">
                    <div class="promo-item position-relative">
                        <img alt="50% Off Burger" height="100" src="https://storage.googleapis.com/a1aa/image/some-image.jpg" width="100" />
                        <h5>
                            50% Off Burger
                        </h5>
                        <p>
                            $2.79
                        </p>
                        <span class="discount">50% OFF</span>
                    </div>
                    <div class="promo-item position-relative">
                        <img alt="Buy 1 Get 1 Pizza" height="100" src="https://storage.googleapis.com/a1aa/image/some-image.jpg" width="100" />
                        <h5>
                            Buy 1 Get 1 Pizza
                        </h5>
                        <p>
                            $5.99
                        </p>
                        <span class="discount">BOGO</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-abc123..." crossorigin="anonymous"></script>
</body>
