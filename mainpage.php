<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Invetory Management System</title>
</head>
<body>
    <div class="container">
        <div class="main-container">
            <nav>
                <input type="checkbox" id="sidebar-active">
                <button class="ims">iMS</button>

                <label for="sidebar-active" class="open-sidebar-button">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
                </label>
                
                <label id="overlay" for="sidebar-active"></label>
                <div class="links-container">
                    <label for="sidebar-active" class="close-sidebar-button">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                    </label>
                    <a href="#">Home</a>
                    <a href="#">About us</a>
                    <a href="#">Work</a>
                    <a href="#">Info</a>
                    <a href="loginpage.php">Login</a>
                </div>
            </nav>
            <section>
                <div class="container-description">
                    <div class="description">
                        <h1>Inventory Management</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quos modi ipsa assumenda, explicabo blanditiis voluptates quibusdam, labore aspernatur doloremque cupiditate fugiat! Nulla, architecto! Consequuntur optio architecto at. Cumque, qui?</p>
                        <button>Subscribe</button>
                    </div>
                </div>
                <div class="container-img">
                    <div class="storage-img">
                        <img src="references/storage.png" alt="">
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>