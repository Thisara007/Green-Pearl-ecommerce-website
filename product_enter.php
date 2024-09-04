<!DOCTYPE html>
<html lang="en">
<head>
<style>
        .add-item-form-container{
            align-items :center;

        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 1rem 1.5rem;
            box-shadow: 0.5rem 0.5rem rgba(0, 0, 0, 0.1);
            border: 0.1rem solid rgba(0, 0, 0, 0.1);
            background: #fff;
            border-radius: 0.5rem;
            width: 100%;
            max-width: 40rem;
        }
        label {
            color: #000;
            font-size: 1rem;
            align-self: flex-start;
            margin-top: 1rem;
        }
        .box {
            align-self: justify;
            padding: 0.5rem;
            font-size: 1rem;
            color: #333;
            text-transform: none;
            border: 0.1rem solid rgba(0, 0, 0, 0.1);
            margin: 0.7rem 0;
            border-radius: 0.2rem;
            width: 100%;
        }
        input[type="submit"] {
            padding: 1rem 2rem;
            font-size: 1.5rem;
            color: #fff;
            background: #66ff66;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: background 0.3s;
            margin-top: 1rem;
        }

        input[type="submit"]:hover {
            background: #55cc55;
        }
        

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product enter admin</title>
    
</head>
<body>
    <div class="add-item-form-container">
    <form action="includes/productadd.inc.php" method="post" enctype="multipart/form-data">
                <label>Product code :</label>
                <input type="Pcode" id="Pcode" name="Pcode"  class="box"  placeholder ="Product code">
                
                <label>Product Name :</label>
                <input type="text" id="P_name" name="P_name" required class="box" placeholder ="P_name..">
                
                <label>Product Price :</label>
                <input type="number" id="price" name="price" required class="box" placeholder ="price">
                
                <label>Product Image :</label>
                <input type="file" name="image1"  required class="box" placeholder ="image1" >
                
                <label>Product discription :</label>
                <input type="textarea" id="P_details" name="P_details" required class="box" placeholder ="P_details">
                <label>Discount :</label>
                <input type="number" id="p_discount" name="p_discount" required class="box" placeholder =" ">
                
                <input type="submit" value="Add new item" name="submit">
    </form>
    </div>
</body>
</html>