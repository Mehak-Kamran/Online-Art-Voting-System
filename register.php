<html>
    <head>
        <title>Online voting system - Registratrion</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body id="regbody">
        <center>
            
            <div id="regform">
            <h2 style="color:#13a796;">Registration</h2>
            <form action="../api/register.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Name" required>&nbsp;
    <input type="number" name="mob" placeholder="Mobile" required><br><br>
    <input type="password" name="pass" placeholder="Password" required>&nbsp;
    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
    <input style="width: 42%" type="text" name="add" placeholder="Address" required><br><br>

    <div id="upload" style="width: 80%">
        <input type="file" id="file" name="image">
        <label id="label" for="file">Upload your Art</label>
    </div><br>

    <div id="upload" style="width: 25%">
        <select name="role" id="role" onchange="toggleRequired()">
            <option value="1">Voter</option>
            <option value="2">Artist</option>
        </select><br>
    </div><br>

    <button id="reg" type="submit" name="registerbtn">Register</button><br><br>
    Already a user? <a href="../">Login here</a>
</form>

<script>
    function toggleRequired() {
        var roleSelect = document.getElementById('role');
        var fileInput = document.getElementById('file');

        if (roleSelect.value === '2') {
            fileInput.setAttribute('required', 'required');
        } else {
            fileInput.removeAttribute('required');
        }
    }
</script>
