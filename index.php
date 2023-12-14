<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./style.css">

</head>
<body>

<div class="main">
    <div class="form">
        <form action="register.php" method="post" enctype="multipart/form-data">
            <label for="">Name</label>
            <input type="text" name="name" id="name">
            <label for="price">Price</label>
            <input type="text" name="price" id="price">
            <select name="currency" id="">
                <option value="USD">USD</option>
                <option value="JPY">JPY</option>
                <option value="EUR">EUR</option>
            </select>
            <input type="file" name="file[]" id="file" multiple>
            <input type="submit" value="Register" name="submit-button">
        </form>
    </div>
</div>
    
</body>
</html>