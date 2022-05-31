
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vleresimi</title>
    <link rel="stylesheet" type="text/css" href="../style/stylewelcome.scss">
    <link rel="stylesheet" type="text/css" href="../style/vleresimi.scss">
    <script>
        function showSuggestion(str){
            if(str.length == 0){
                document.getElementById('output').innerHTML = '';
            } else
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if (this.readyState == 4 && this.status == 200)
                    {
                        document.getElementById('output').innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET", "suggest.php?q=" + str, true);
                xmlhttp.send();

            }
        }
    </script>
</head>
<body>
    <div class="container"><h1>Search Users</h1>
<form>Search User : <input type="text" class="form-control" 
onkeyup="showSuggestion(this.value)">

</form>
<p> Suggestion : <span id="output" style="font-weight: blod;"></span></p>
</div>
</body>
</html>
