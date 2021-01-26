<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>
    <form action="/sapa_post" method="POST">
        @csrf
        <label>First name: </label><br><br>
        <input type="text" name="fname"><br><br>
        <label>Last name: </label><br><br>
        <input type="text" name="lname"><br><br>
        <label>Gender: </label><br><br>
        <input type="radio" name="JK">Male<br>
        <input type="radio" name="JK">Female<br>
        <input type="radio" name="JK">Other<br><br>
        <label>Nationallity: </label><br><br>
        <select name="WN">
            <option value="Indonesia">Indonesian</option>
            <option value="Indonesia">Singapore</option>
            <option value="Indonesia">American</option>
            <option value="Indonesia">Thailand</option>
        </select><br><br>
        <label>Language Spoken: </label><br><br>
        <input type="checkbox">Bahasa Indonesia<br>
        <input type="checkbox">English<br>
        <input type="checkbox">Other<br><br>
        <label>Bio: </label><br><br>
        <textarea name="bio" cols="30" rows="10"></textarea><br><br>
        <input type="submit">
    </form  >
</body>
</html>