<!DOCTYPE html>
<html>
<head>
<title>Internship Search</title>

<script>
function searchMode()
{
    var mode = document.getElementById("mode").value;

    if(mode === "")
    {
        document.getElementById("result").innerHTML = "";
        return;
    }

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function()
    {
        if(xhr.readyState == 4 && xhr.status == 200)
        {
            document.getElementById("result").innerHTML = xhr.responseText;
        }
    }

    xhr.open("GET", "ajax_search.php?mode=" + mode, true);
    xhr.send();
}
</script>

</head>

<body>

<h2>Internship Mode Search</h2>

<select id="mode" onchange="searchMode()">
    <option value="">Select Mode</option>
    <option value="online">Online</option>
    <option value="onsite">Onsite</option>
    <option value="hybrid">Hybrid</option>
</select>

<br><br>

<div id="result"></div>

</body>
</html>