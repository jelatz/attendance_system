 <?php 
    include ("DbHelper.php");

    if(isset($_GET["login"]))
    {
        
        $user = $_GET['username'];  
        $pass = md5($_GET['password']);



        $register = login($user, $pass); 

        if(sizeof($register)>0)
        {
            echo"<label>Logged In</label>";
        }
        else
        {
            echo"<label>Username or Password does not exist</label>";
        }
    }
  

    $result = getAll();

    if(isset($_GET["submit"]))
    {
        addBook($_GET["isbn"], $_GET["title"], $_GET["copyright"], $_GET["edition"], $_GET["price"], $_GET["quantity"]);

        header("location: index.php");
    }

    $isbnVal= "";
    $titleVal= "";
    $isbnVal= "";
    $copyrightVal= "";
    $editionVal= "";
    $priceVal= "";  
    $quantityVal= ""; 


    if(isset($_GET["search"]))
    {
        $search = search($_GET["isbn"]);
        if(sizeof($search)>0)
        {
            echo"<label>Item Found</label>";
            foreach($search as $info)
            {
                $isbnVal= $info[0];
                $titleVal= $info[1];
                $copyrightVal= $info[2];
                $editionVal= $info[3];
                $priceVal= $info[4];  
                $quantityVal= $info[5]; 
            }
        }   
        else
        {
            echo"<label>Item Not  Found</label>";
        }
    }

    if(isset($_GET["delete"]))
    {
        delete($_GET["isbn"]);
        echo"<label>Record Successfully Deleted!</label>";

        header("location: index.php");
    }
    
    if(isset($_GET["edit"]))
    {
        echo"<label>Edited Successfully</label>";
        $test = edit($_GET["isbn"], $_GET["title"], $_GET["copyright"], $_GET["edition"], $_GET["price"], $_GET["quantity"]);
        echo"<label>$test</label>";
        
    } 

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

//*************************************************************/
<style>
	
		
		body {font-family: Arial, Helvetica, sans-serif; color: white;}
		
        body {
			content:"";
			position: fixed;
			width: 100vw;
			height: 100vh;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			/* -webkit-filter:grayscale(100%);
			-moz-filter: blur(10px); */
		
        }
		
		form {
			
			position: absolute;
			top: 50%;
			left: 50%;
			-webkit-transform: translate(-50%, -50%);
			-moz-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			-o-transform: translate(-25%, -50%);
			transform: translate(-50%, -50%);
			width: 400px;
			height: 500px;
			padding: 50px 40px;
			background: rgba(0,0,0,0.8);
			
		}
		

		input[type=text], input[type=password] {
		width: 100%;
		padding: 12px 20px;
		margin: 10px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
	}
</style>

</head>
<body>
    <section>
        <form action="" method="post";>
            <label>ISBN#</label>
            <input type = "number" name="isbn" value=<?php echo "$isbnVal"; ?> /><br>
            <label>Title</label>
            <input type = "text" name="title" value=<?php echo "$titleVal"; ?> /><br>
            <label>Copyright</label>
            <input type = "text" name="copyright" value=<?php echo "$copyrightVal"; ?> /><br>
            <label>Edition</label>
            <input type = "text" name="edition" value=<?php echo "$editionVal"; ?> /><br>
            <label>Price</label>
            <input type = "text" name="price" value=<?php echo "$priceVal"; ?> /><br>
            <label>Quantity</label>
            <input type = "number" name="quantity" value=<?php echo "$quantityVal"; ?> /><br>
            
            <input type = "submit" name = "submit" value="Add"  />
            <input type = "submit" name = "search" value="Search"/>
            <input type = "submit" name = "delete" value="Delete"/>
            <input type = "submit" name = "edit" value="Edit" /><br>

            <label>Username</label>
            <input type = "text" name="username"  /><br>
            <label>Password</label>
            <input type = "password" name="password"  /><br>
            <input type = "submit" name = "login" value="Login" />
        </form>
    </section>
    <section>
    <table>
        <tr>
            <th>ISBN</th>
            <th>Title</th>
            <th>Copyright</th>
            <th>Edition</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
        <?php 
            $totalQuantity= 0;
            $totalPrice= 0;
            foreach($result as $row)
            {
                echo "<tr>";
                    foreach($row as $data)
                    {
                        echo "<td>$data</td>";
                    }
                    $totalQuantity += $row[5];
                    $total = $row[4] * $row[5];
                    $totalPrice = $total;
                    echo "<td>$total</td>";
                echo "</tr>";
            }

            echo "<tr>";
            echo    "<td></td>";
            echo    "<td></td>";
            echo    "<td></td>";
            echo    "<td></td>";
            echo    "<td></td>";
            echo "<td>$totalQuantity</td>";
            echo "<td>$totalPrice</td>";
            echo "</tr>";




        ?>  
    </table>
    </section>
</body>
</html>