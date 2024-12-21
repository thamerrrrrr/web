<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel management system</title>
<link rel="stylesheet" href="main.css" />
    </head>
    <body>
        <header>
            <h1>Hotel management system</h1>
        </header>
    
        <div class="container" id="questionContainer">
            <h2>Do you already have an account?</h2>
            <div class="question-container">
                <button onclick="showLoginForm()">Yes</button>
                <button onclick="showCreateAccountForm()">No</button>
            </div>
        </div>
    
        <div class="container" id="loginContainer" style="display: none;">
            <h2>Login</h2>
            <form action="login.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    
        <div class="container" id="createAccountContainer" style="display: none;">
            <h2>Create Account</h2>
            <form action="create_account.php" method="post" enctype="multipart/form-data">
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                
                <!-- Phone number input -->
                <input type="tel" name="phone" placeholder="Phone Number" required pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number">
    
                <label for="role">Role:</label>
                <select name="role" id="role">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
                
                <!-- Profile photo selection -->
                <div class="image-preview" id="imagePreview">
                    <span>Choose a profile photo</span>
                    <img src="" alt="Image Preview">
                </div>
                <input type="file" name="profile_photo" accept="image/*" id="profilePhoto" required>
                
                <!-- Additional file selection -->
                <div class="image-preview" id="filePreview">
                    <span>Choose an additional file</span>
                </div>
                <input type="file" name="additional_file" accept=".pdf,.doc,.docx,.txt" id="additionalFile">
                
                <button type="submit">Create Account</button>
            </form>
        </div>	
        <script src="main.js"></script>

    </body>
    </html>