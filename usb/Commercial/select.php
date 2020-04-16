<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="utf-8" />
 
</head>
<body>
    <select id="ddl">
        <option value="test">TEST</option>
        <option value="other">AUTRE</option>
    </select>
    <input type="text" name="name" id="inputToDisplay" style="display:none" />
    <script>
        var select = document.getElementById( "ddl" )
        select.addEventListener( "change", function ( e )
        {
            var input = document.getElementById( "inputToDisplay" )
 
            if ( e.target.value == "other" )
                input.style.display = "inline-block"
            else
                input.style.display = "none"
        } )
    </script>
</body>
</html>