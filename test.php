<html>
<body>
<form method="post" action="#">
<input type="checkbox" name="txtCheck1" value="your value" <?php if(isset($_POST['txtCheck1'])) echo "checked='checked'"; ?>  />
<input type="checkbox" name="txtCheck2" value="your value" <?php if(isset($_POST['txtCheck2'])) echo "checked='checked'"; ?>  />
<input type="checkbox" name="txtCheck3" value="your value" <?php if(isset($_POST['txtCheck3'])) echo "checked='checked'"; ?>  />
<input type="checkbox" name="txtCheck4" value="your value" <?php if(isset($_POST['txtCheck4'])) echo "checked='checked'"; ?>  />
<input type="checkbox" name="txtCheck5" value="your value" <?php if(isset($_POST['txtCheck5'])) echo "checked='checked'"; ?>  />

<input type="submit" name="submit" value="submit" />

</form>
</body>

</html>