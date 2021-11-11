<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="/edwin" method="POST">
    @csrf
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" placeholder="first name" required><br>
    <label for="Email">Email:</label><br>
    <input type="text" id="email" name="email" placeholder="Email" required><br>
    <label for="Password"> Password:</label><br>
    <input type="password" id="pwd" name="pwd" placeholder="password" required><br><br>

    <input type="submit" value="INSERT">
</form> 
</body>
</html>

