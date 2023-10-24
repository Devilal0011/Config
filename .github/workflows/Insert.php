<!DOCTYPE html>

  

<head>

    <title>Insert Page page</title>

</head>

  

<body>



        <?php



        $conn = mysqli_connect("localhost", "root", "", "lab13");

          

        // Check connection

        if($conn){

           echo ""; 

        }

                else{

            die("ERROR: Could not connect. ". mysqli_connect_error());

        }

          

        // Taking all 5 values from the form data(input)



            $anum = $_POST['anum'];

            $title = $_REQUEST['title'];

            $author = $_REQUEST['author'];

            $edition = $_REQUEST['edition'];

            $publisher=$_REQUEST['publisher'];



        $sql = "insert into books values('$anum','$title','$author','$edition','$publisher')";



        if ($conn->query($sql) === TRUE) {

            echo "New record created successfully";

          } else {

            echo "Error: " . $sql . "<br>" . $conn->error;

          }

          

        // Close connection

        mysqli_close($conn);

        ?>



</body>

  

</html>

