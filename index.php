<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            color: navy;
        }

        label{
            width: 10em;
            padding-right: 1em;
            float: left;
        }

        #data input{
            float: left;
            width: 15em;
            margin-bottom: 5em;
        }

        #buttons input{
            float: left;
            margin-bottom: .5em;
        }
        br{
            clear: left;
        }
    </style>
</head>
<body>
<h1>Product Discount Calculator</h1>
<form method="post" action="display_discount.php">
<label>Product Description: </label>
<input type="text" name="product"><br>
<label>List Price: </label>
<input type="text" name="price"><br>
<label>Discount Percent: </label>
<input type="text" name="discount">(%)<br>
<input type="submit" value="Calculate Discount">
</form>
</body>
</html>
