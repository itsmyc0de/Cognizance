<!doctype html>
<html>
<head>
<style>
input[type=text],input[type=password],input[type=file],select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}

input[type=text]:focus {
    border: 3px solid #555;
}

input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}


</style>
<meta charset="utf-8">
<title>Admin Login</title>
</head>

<body>
<center>
<form method="post" action="config.php">
<table cellpadding="10" cellspacing="10">
<tr align="center">
<td colspan="2">LOGIN</td>
</tr>
<tr align="center">
<td colspan="2"><input type="text" name="name" placeholder="Username" required /></td>
</tr>
<tr align="center">
<td colspan="2"><input type="password" name="password"  placeholder="Password" required/></td>
</tr>
<tr align="center">
<td rowspan="2"><input type="submit" value="LOGIN" /></td>
</tr>
</table>
</form>
</center>
</body>
</html>