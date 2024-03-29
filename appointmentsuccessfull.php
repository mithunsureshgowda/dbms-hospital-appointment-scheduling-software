<!DOCTYPE html>
<html lang="en">
<head>
    <title>Automatic Popup</title>
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--Stylesheets-->
    <link rel="stylesheet" href="style.css">
</head>
<style>
*,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.body{
    background-color: #0f72e5;
}
.popup{
    background-color: #ffffff;
    width: 450px;
    padding: 30px 40px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
    border-radius: 8px;
    font-family: "Poppins",sans-serif;
    display: none;
    text-align: center;
}
.popup button{
    display: block;
    margin:  0 0 20px auto;
    background-color: transparent;
    font-size: 30px;
    color: #c5c5c5;
    border: none;
    outline: none;
    cursor: pointer;
}
.popup p{
    font-size: 14px;
    text-align: justify;
    margin: 20px 0;
    line-height: 25px;
}
a{
    display: block;
    width: 150px;
    position: relative;
    margin: 10px auto;
    text-align: center;
    background-color: #0f72e5;
    color: #ffffff;
    text-decoration: none;
    padding: 5px 0;
}</style>
<body>
    <div class="popup">
        <button id="close">&times;</button>
        <h2>This Is The Title</h2>
        <p>
            thank you
        </p>
        <a href="#">Let's Go</a>
    </div>
    <!--Script-->
    <script src="script.js"></script>
</body>
</html>