<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'config.php';


if (!empty($_SESSION["session_token"])) {
    $session_token = $_SESSION["session_token"];
    $email = $session_token;

    $result = mysqli_query($conn, "SELECT * FROM login_data WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        header("location: login.php"); // Invalid session token, redirect to login
    }
} else {
    header("location: login.php"); // No session token, redirect to login
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="language" content="en">
    <meta name="description" content="Discover reliable server and hosting solutions tailored to your needs at [Your Website Name]. We specialize in delivering cutting-edge hosting services, including shared, VPS, and dedicated hosting, ensuring your website's optimal performance. Take advantage of our expertise in custom server configurations, allowing you to build a server environment that perfectly matches your business requirements. Additionally, we offer advanced storage solutions, empowering you with scalable and secure data management. Explore our range of cost-effective plans and enhance your online presence with seamless server solutions">
    <meta name="keywords" content="web services, amazon web services, server,sql server,free website hosting, free domain and hosting, hosting, development server, sombit web services,https://hosting.sombti-server.online,">
    <meta name="author" content="Sombit Pramanik">
    <meta property="og:title" content="Sombit Web Services">
    <meta property="og:description" content="Discover reliable server and hosting solutions tailored to your needs at Sombit Web Services. We specialize in delivering cutting-edge hosting services, including shared, VPS, and dedicated hosting, ensuring your website's optimal performance. Take advantage of our expertise in custom server configurations, allowing you to build a server environment that perfectly matches your business requirements. Additionally, we offer advanced storage solutions, empowering you with scalable and secure data management. Explore our range of cost-effective plans and enhance your online presence with seamless server solutions.">
    <meta property="og:image" content="/image/sws.png">
    <meta property="og:url" content="https://hosting.sombti-server.online">
    <meta property="og:type" content="website">
    <link rel="icon" href="/image/sws.ico" type="image/x-icon">
    <title>Sombit Web Services</title>
    <!-- 
        Website External Page's and Style Link Section
     -->
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/responsive.css">
    <link rel="stylesheet" href="/com.css">
    
    <!-- 
        Internal CSS Goes down
      -->

    <style>

    </style>
</head>

<body>
    <header>
        <div class="navbar">
            <a href="#home">Home</a>
            <div class="dropdown">
                <button class="dropbtn">hosting's</button>
                <div class="dropdown-content">
                    <a href="#hosting">web hosting</a>
                    <a href="#custom-hosting">custom hosting</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">server's</button>
                <div class="dropdown-content">
                    <a href="#server">Development server</a>
                    <a href="#storage">storage Server <br> (Nextcloud)</a>
                </div>
            </div>
        </div>
    </header>
    <div class="popup" id="popup">
        <p>Exiting offer Get 5% off <br> every time on Purchase</p>
        <button class="popup-button" onclick="closePopup()">Collect Now</button>
    </div>
    <main class="blur-background">
        <span>our pluse point >>>></span>
        <div id="typing-container"></div>
        <section id="home">

            <h1>Welcome <?php echo $row["fisrt_name"]; ?></h1><br>
            <a href="/logout.php">Log out</a><br>
            <a href="/registration.php">New Registration</a>
            <div class="emoji">🚀</div>
            <h1 class="section-heading">Launch Your Online Presence with Power!</h1>
            <p class="section-description">Unleash the potential of your website with our lightning-fast, secure, and
                customizable server solutions. Whether you're a startup, a growing business, or a digital enthusiast, we
                have the perfect server to match your needs.</p>
            <a href="#payment" class="cta-button">Get Started Now</a>
            <section class="about-section">
                <div class="emoji">🌟</div>
                <h2 class="about-heading">About Us</h2>
                <p class="about-description">At [Your Brand Name], we're not just about servers. We're about empowering
                    your digital journey. With years of experience, a team of experts, and a commitment to excellence,
                    we've built a service that redefines the way you experience hosting and server solutions. From
                    tailored configurations to top-notch security, we're here to fuel your success. Let us be your
                    partners in the digital realm!</p>
            </section>
        </section>
        <section id="hosting">
            <h2 class="section-heading">Supercharged Hosting for Every Need</h2>
            <p class="section-description">Experience hosting like never before. Our feature-rich hosting plans are
                designed to cater to your unique requirements, ensuring peak performance, security, and reliability.</p>

            <div class="features-container">
                <div class="feature">
                    <div class="feature-icon">🚀</div>
                    <div class="feature-title">Blazing Fast Speed</div>
                    <div class="feature-description">Enjoy lightning-fast loading times with our high-performance
                        servers.</div>
                </div>
                <div class="feature">
                    <div class="feature-icon">🛡️</div>
                    <div class="feature-title">Top-Notch Security</div>
                    <div class="feature-description">Rest easy knowing your data is safeguarded with our robust security
                        measures.</div>
                </div>
                <div class="feature">
                    <div class="feature-icon">🌐</div>
                    <div class="feature-title">Global Reach</div>
                    <div class="feature-description">Serve your audience worldwide with our distributed server
                        locations.</div>
                </div>
            </div>
        </section>
        <section id="custom-hosting">
            <h2 class="section-heading">Tailored Hosting Solutions</h2>
            <p class="section-description">Your unique needs deserve a unique hosting solution. With our custom
                hosting packages, you're in control of every aspect of your server environment.</p>

            <div class="custom-hosting-features">
                <div class="feature">
                    <div class="feature-icon">🛠️</div>
                    <div class="feature-title">Build Your Configuration</div>
                    <div class="feature-description">Select the CPU, RAM, storage, and other specifications that
                        match your requirements.</div>
                </div>
                <div class="feature">
                    <div class="feature-icon">🔒</div>
                    <div class="feature-title">Enhanced Security</div>
                    <div class="feature-description">Implement the security measures that matter most to your
                        business, keeping your data safe.</div>
                </div>
                <div class="feature">
                    <div class="feature-icon">🌐</div>
                    <div class="feature-title">Scalability</div>
                    <div class="feature-description">Easily scale your resources up or down as your business grows
                        and changes.</div>
                </div>
            </div>
        </section>

        <section id="payment">
            <h2 class="section-heading">Secure Payment</h2>
            <p class="section-description">Complete your order with confidence using our secure payment form.</p>

            <form class="payment-form">
                <label for="card-number">Card Number:</label>
                <input type="text" id="card-number" name="card-number" placeholder="1234 5678 9012 3456" required>

                <label for="expiration-date">Expiration Date:</label>
                <input type="text" id="expiration-date" name="expiration-date" placeholder="MM/YY" required>

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" placeholder="123" required>

                <button type="submit" class="payment-button">Submit Payment</button>
            </form>
        </section>
        <section id="server">
            <h2 class="section-heading">Development Servers</h2>
            <p class="section-description">Fuel your coding projects with our dedicated development servers. Craft,
                test, and innovate with ease.</p>

            <div class="development-servers-features">
                <div class="feature">
                    <div class="feature-icon">💻</div>
                    <div class="feature-title">High-Performance</div>
                    <div class="feature-description">Experience smooth and responsive development environments for
                        faster coding.</div>
                </div>
                <div class="feature">
                    <div class="feature-icon">🔗</div>
                    <div class="feature-title">Flexible Connectivity</div>
                    <div class="feature-description">Connect effortlessly to version control systems and
                        collaborative tools.</div>
                </div>
                <div class="feature">
                    <div class="feature-icon">⚙️</div>
                    <div class="feature-title">Custom Configurations</div>
                    <div class="feature-description">Tailor your server setup to match your coding requirements.
                    </div>
                </div>
            </div>
            <section id="storage">
                <h2 class="section-heading">Secure Storage Server</h2>
                <p class="section-description">Store, share, and collaborate on your files using our Nextcloud-based
                    storage servers.</p>

                <div class="storage-server-features">
                    <div class="feature">
                        <div class="feature-icon">📂</div>
                        <div class="feature-title">Efficient File Management</div>
                        <div class="feature-description">Organize and access your files seamlessly with Nextcloud's
                            intuitive interface.</div>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">🔒</div>
                        <div class="feature-title">End-to-End Encryption</div>
                        <div class="feature-description">Protect your data with advanced encryption, ensuring its
                            privacy and security.</div>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">🌐</div>
                        <div class="feature-title">Remote Access</div>
                        <div class="feature-description">Access your files from anywhere using Nextcloud's mobile and
                            desktop apps.</div>
                    </div>
                </div>
            </section>
    </main>
    <footer>

    </footer>
</body>

</html>
<script src="script.js"></script>