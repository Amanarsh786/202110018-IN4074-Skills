<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }

        table tr td:last-child {
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
     <link rel="stylesheet" href="style.css">
    <style>
        /* Basic styling for the new sections */
        #about-me {
            background-color: #f9f9f9;
            padding: 20px;
            text-align: center;
        }

        #about-me img {
            max-width: 200px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        #about-me h2 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        #about-me p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        #about-me .button {
            padding: 10px 20px;
            background-color: #f2a800;
            color: red;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 1em;
        }

        #skills {
            padding: 20px;
            background-color: #f2f2f2;
            text-align: center;
        }

        #skills h2 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        #skills ul {
            list-style-type: none;
            padding: 0;
        }

        #skills li {
            font-size: 1.2em;
            margin: 10px 0;
        }

        /* Styling for existing elements */
        .button-link {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            background-color: #f2a800;
            border-radius: 5px;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #f2a800;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Aman Sparkling Gems Logo">
        </div>
        <div class="site-name">
            <h1>Aman Sparkling Gems</h1>
        </div>
    </header>
    <main>
        <section class="hero">
            <h2>Welcome to Aman Sparkling Gems</h2>
            <p>Experience the sparkle of luxury with our exquisite collection of fine jewelry. From elegant earrings to stunning necklaces, our pieces are designed to make you shine.</p>
            <button><a href="explore.html" class="button-link">Explore Our Collections</a></button>
        </section>
        
        <!-- About Me Section -->
        <section id="about-me">
            <img src="amandeep.jpg" alt="Profile Picture">
            <h2>About Me</h2>
            <p>Hello! I'm Aman, the owner of Aman Sparkling Gems. My passion for exquisite jewelry led me to start this venture, where we offer a curated collection of fine jewelry to make every occasion special. Feel free to explore our collection and contact me if you have any questions.</p>
            <a href="contact us.html" class="button">Get in Touch</a>
        </section>
        
        <!-- Skills Background Section -->
        <section id="skills">
            <h2>Our Expertise</h2>
            <ul>
                <li>Custom Jewelry Design</li>
                <li>High-Quality Gemstones</li>
                <li>Expert Craftsmanship</li>
                <li>Personalized Customer Service</li>
                <li>Timely Delivery</li>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Aman Sparkling Gems</p>
    </footer>
    
    <!-- Registration Form -->
    <form id="register-form">
        <h2>Create an Account</h2>
        <label for="reg-username">Username:</label>
        <input type="text" id="reg-username" name="username" required><br><br>
        <label for="reg-email">Email:</label>
        <input type="email" id="reg-email" name="email" required><br><br>
        <label for="reg-password">Password:</label>
        <input type="password" id="reg-password" name="password" required><br><br>
        <label for="reg-confirm-password">Confirm Password:</label>
        <input type="password" id="reg-confirm-password" name="confirm-password" required><br><br>
        <input type="submit" value="Create Account">
    </form>
    
    <!-- Login Form -->
    <form id="login-form">
        <h2>Login</h2>
        <label for="login-username">Username:</label>
        <input type="text" id="login-username" name="username"><br><br>
        <label for="login-password">Password:</label>
        <input type="password" id="login-password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
    
    <!-- Success Message -->
    <div id="success-message" style="display: none;">
        <h2>Your account has been created successfully!</h2>
        <p>You can now log in to your account.</p>
    </div>
    
    <!-- Reviews Section -->
    <div class="reviews">
        <h3>Customer Reviews</h3>
        <ul>
            <li>
                <p>I bought a Royal engagement ring from here. It looks very good and fits my finger very well. Will buy again.</p>
                <p class="rating">
                    <span class="star active">&#x2605;</span>
                    <span class="star active">&#x2605;</span>
                    <span class="star active">&#x2605;</span>
                    <span class="star active">&#x2605;</span>
                    <span class="star active">&#x2605;</span>
                    Rating: 5/5
                </p>
            </li>
            <li>
                <p>There are many jewelry options. I bought many like a pearl bracelet and a boho chic necklace. I liked these most. Will shop again.</p>
                <p class="rating">
                    <span class="star active">&#x2605;</span>
                    <span class="star active">&#x2605;</span>
                    <span class="star active">&#x2605;</span>
                    <span class="star active">&#x2605;</span>
                    <span class="star active">&#x2605;</span>
                    Rating: 5/5
                </p>
            </li>
            <li>
                <p>I didn't give 5 stars because I bought an anklet from here and one stone was missing. But still, it looks beautiful.</p>
                <p class="rating">
                    <span class="star active">&#x2605;</span>
                    <span class="star active">&#x2605;</span>
                    <span class="star active">&#x2605;</span>
                    <span class="star">&#x2605;</span>
                    Rating: 4/5
                </p>
            </li>
            <li>
                <p>Very good jewelry shop.</p>
                <p class="rating">
                    <span class="star active">&#x2605;</span>
                    <span class="star active">&#x2605;</span>
                    <span class="star active">&#x2605;</span>
                    <span class="star active">&#x2605;</span>
                    <span class="star active">&#x2605;</span>
                    Rating: 5/5
                </p>
            </li>
            <li>
                <p>If you want to buy any gift for your loved ones, then you can visit here because their prices are very good.</p>
                <p class="rating">
                    <span class="star active">&#x2605;</span>
                    <span class="star active">&#x2605;</span>
                    <span class="star active">&#x2605;</span>
                    <span class="star active">&#x2605;</span>
                    <span class="star active">&#x2605;</span>
                    Rating: 5/5
                </p>
            </li>
        </ul>
    </div>

    <!-- FAQ Section -->
    <section id="faq">
        <h2>Frequently Asked Questions</h2>
        <ul>
            <li>
                <h3>Q: What is your return policy?</h3>
                <p>A: We accept returns within 30 days of purchase. Please see our full return policy for details.</p>
            </li>
            <li>
                <h4>Why should I provide my real email and phone number when I order? I don’t want spam.</h4>
                <p>Your information stays private with us and we wouldn’t ever want to spam you. It’s important to have a way for our customer service team to contact you about your order so nothing surprising happens! Inaccurate credit card information is a finger’s slip away and occasionally your selection is so stellar that it’s on backorder. We also want to make sure you get our email confirmation as a record of the order. Working with customers makes us happy; we just need a way to keep the lines of communication open.</p>
            </li>
            <li>
                <h4>Why didn’t I receive an E-mail confirmation when I made my order?</h4>
                <p>Good for you for keeping your inbox safe with a tough spam filter. Though our confirmations are not spam, check there first. If the email isn’t there, please call our customer service team at <a href="tel:18004349905">808 434 9905</a> or email <a href="mailto:amansparklinggems@gmail.com">amansparklinggems@gmail.com</a>. Don't forget to add us to your safe Email List.</p>
            </li>
            <li>
                <h4>How will I know if my order has been shipped?</h4>
                <p>As soon as your order leaves our warehouse, our system automatically sends you a shipping confirmation email with your UPS tracking number. Click on the tracking number and you can access to-the-minute location information.</p>
            </li>
        </ul>
    </section>

    <!-- Contact Information Section -->
    <section id="contact-info">
        <h2>Get in Touch</h2>
        <p>Have a question or concern? We're here to help!</p>
        <ul>
            <li>
                <h3>Address:</h3>
                <p>9460 The Gore Rd, Brampton, Canada 65835</p>
            </li>
            <li>
                <p>Contact: <a href="tel:8083439905">808-343-9905</a></p>
            </li>
            <li>
                <p>Email Address: <a href="mailto:amansparklinggems@gmail.com">amansparklinggems@gmail.com</a></p>
            </li>
        </ul>
    </section>
</body>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Customers Details</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Customer</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM customers";
                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo '<table class="table table-bordered table-striped">';
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>#</th>";
                            echo "<th>Name</th>";
                            echo "<th>Phone</th>";
                            echo "<th>Address</th>";
                            echo "<th>Email</th>";
                            echo "<th>Jewelry Category</th>";
                            echo "<th>Price</th>";
                            echo "<th>Action</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['phone'] . "</td>";
                                echo "<td>" . $row['address'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['jewelry_category'] . "</td>";
                                echo "<td>" . $row['price'] . "</td>";
                                echo "<td>";
                                echo '<a href="read.php?id=' . $row['id'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                echo '<a href="update.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="delete.php?id=' . $row['id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else {
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>