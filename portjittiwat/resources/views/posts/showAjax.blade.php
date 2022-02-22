<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>basic-ajax</title>
    <script>
        const loadDoc = () => {
            const xhttp = new XMLHttpRequest()
            xhttp.onload = () => {
                const j = JSON.parse(xhttp.responseText)
                document.getElementById("basic").innerHTML = j.message;
            }
            xhttp.open("GET", "http://localhost:8000/api/project")
            xhttp.send();
        }
    </script>
</head>
<body>
    <h1 style="background: green;" id="basic"></h1>
        <button onclick="loadDoc()">Show Content</button>

        <button onclick="window.history.back();">Go back</button>
</body>
</html>