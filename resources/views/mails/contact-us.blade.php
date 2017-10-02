<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
</head>
<body>
    <div class="container">
        Hello, <b>Admin</b>
        <p>
           <b>{{ $name }}</b> of phone number <b>{{ $phone_number }}</b> sent you a message via sharper-innovations.co.ke contact form. Find the message below
        </p>
        <div class="container">
            <p>{{ $user_message }}</p>
        </div>
    </div>
</body>
</html>