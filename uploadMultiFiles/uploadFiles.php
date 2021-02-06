

<html>
<head></head>
<body>

<form method="post" enctype="multipart/form-data" action="insert.php">
<input placeholder="Your name" type="text" tabindex="1" name = "name" required autofocus>
<input placeholder="Your Email Address" name = "email" type="email" >
<input type="file" name="file[]"  multiple />
<select name="selected" id="cars" name = "selected" >
  <option value="khaled">khaled</option>
  <option value="hazem">hazem</option>
  <option value="mahmoud">mahmoud</option>
  <option value="mohamed">mohamed</option>
</select>
<input type="submit"  value='Upload' name = 'submit'>

</form>

</body>
<htm>
