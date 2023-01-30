<html>
<head>
<title>An HTML form including a SELECT element</title>
</head>
<body>
    <form action="send_formwithselect.php" method="POST">
    <p>
        <strong> Name: </strong><br/>
        <input type="text" name="user"/>
    </p>
    <p>
        <strong>Select Some Products:</strong><br/>
        <!--<select name="products[]" multiple="multiple">
        	<option value="Sonic Screwdriver"> Sonic Screwdriver </option>
        	<option value="Tricoder"> Tricorder </option>
        	<option value="ORAC AI"> ORAC AI </option>
        	<option value="HAL 2000"> HAL 2000 </option>
        </select>-->
        <input type="checkbox" name="products[]" value="Sonic Screwdriver"/>Sonic Screwdriver<br/>
        <input type="checkbox" name="products[]" value="Tricorder"/>Tricorder<br/>
        <input type="checkbox" name="products[]" value="ORAC AI"/>ORAC AI<br/>
        <input type="checkbox" name="products[]" value="HAL 2000"/>HAL 2000<br/>

    </p>
    <p>
        <input type="submit" value="send"/>
    </p>
    </form>
</body>
</html>
