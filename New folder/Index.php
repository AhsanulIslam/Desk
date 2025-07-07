<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>

    
    <a href="D:\Code\Home.html" target="_blank">Home</a>


    <h1>Test</h1>
    <br>
    <b>Hi</b>
    <p style="color: blue;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero hic qui cupiditate expedita unde vitae? Quos quam dicta incidunt voluptas! Sapiente molestiae libero, nulla accusamus illum cupiditate enim voluptatem distinctio.
    </p>

    <a href="https://www.facebook.com">facebook</a>

    <img src="D:/Code/Laravel vs MERN.png" alt="text">
<br>
    <em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, harum?</em>
    <br>
    <strong>Lorem ipsum dolor sit amet.</strong>

    <br>

    <small>Lorem ipsum dolor sit amet.</small>

    <h1 style="background-color: rgb(255, 189, 6); border: 2px solid violet;">Hi color test</h1>

    <a href="mailto:eng.ahsanul.islam@gmail.com">Send email</a>

    <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%; margin-top: 20px; text-align: left;">
        <tr>
            <th>name</th>
            <th>age</th>
            <th>address</th>
        </tr>
        <tr>
            <td>Afif Ahmed</td>
            <td>26</td>
            <td>Dhaka</td>
        </tr>
        <tr>
            <td>Rasel</td>
            <td>27</td>
            <td>Rajshahi</td>
        </tr>
    </table>




    <p>Lorem ipsum <span style="color: blueviolet;">dolor</span> sit amet.</p>

    <p>Lorem ipsum dolor sit amet, <div style="color: blue;">lorem</div>consectetur adipisicing.</p>

    <p id="demo2"> Date & Time </p>
    <button onclick="document.getElementById('demo2').innerHTML = Date()">Date & Time</button>


    <p id="demo"></p>

<button type="button" onclick="displayDateTime()">Click me to display Date and Time.</button>

<script>
    function displayDateTime() {
        document.getElementById("demo").innerHTML = new Date();
    }
</script>

</body>
</html>