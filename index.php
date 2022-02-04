<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>AlphaBuddy - Your personal gym assistant!</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet" type="text/css">
        <link href="styles\style.scss" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>AlphaBuddy</h1>
        <img src="images\Saly-40.png" alt="Alphabuddy icon">
        <h2>Your personal assistant</h2>
        <ul>
            <li>Help you accomplish your goals.</li>
            <li>Teach you the correct way to execute your exercises.</li>
            <li>Allows you to keep track of your workouts easily.</li>
            <li>And so much more...</li>
        </ul> 
        <p> Leave your contact information to dive into this new era of exercising:</p>
        <form action="insert.php" method="post">
            <div>
                <label for="firstName">First Name</label>
                <input name="firstName" id="name" placeholder="Your name" required>
            </div>
            <div>
                <label for="lastName">Last Name</label>
                <input name="lastName" id="name" placeholder="Your name" required>
            </div>
            <div>
                <label for="phoneNumber">Phone Number</label>
                <input type="tel" name="phoneNumber" id="name" placeholder="(11)9xxxx-xxxx" pattern="[0-9]{11}" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input name="leadEmail" id="email" type="email" placeholder="example@email.com"  required>  
            </div>
            <div>
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </body>
</html>