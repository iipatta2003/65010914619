<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
    <h1>Insert Product Form</h1>
    <form method="post" action="" enctype="multipart/form-data">
        Product Name: <input type="text" name="pname" required autofocus><br>
        Product Price: <input type="text" name="pprice" required><br>
        Product Detail: <textarea name="pdetail" rows="5" cols="30" required></textarea><br>
        Product Image: <input type="file" name="pimage" accept="image/*" required><br>
        <button type="submit">Save</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include_once("../connectdb.php");

        $pname = $_POST['pname'];
        $pprice = $_POST['pprice'];
        $pdetail = $_POST['pdetail'];

        // Insert data to get the new product ID
        $sql = "INSERT INTO products (p_name, p_detail, p_price, p_ext, c_id) VALUES ('$pname', '$pdetail', '$pprice', '', 0)";
        if (mysqli_query($conn, $sql)) {
            $newProductId = mysqli_insert_id($conn); // Get the newly generated product ID

            // Handle file upload
            if (isset($_FILES['pimage']) && $_FILES['pimage']['error'] === UPLOAD_ERR_OK) {
                $fileTmpPath = $_FILES['pimage']['tmp_name'];
                $fileName = $_FILES['pimage']['name'];
                $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);

                $newFileName = $newProductId . '.' . $fileExt; // Name file with product ID
                $uploadPath = "../image/" . $newFileName;

                // Check if a file with the same name exists and delete it
                if (file_exists($uploadPath)) {
                    unlink($uploadPath); // Remove existing file
                }

                if (move_uploaded_file($fileTmpPath, $uploadPath)) {
                    // Update the database with the file extension
                    $updateSql = "UPDATE products SET p_ext = '$fileExt' WHERE p_id = $newProductId";
                    if (mysqli_query($conn, $updateSql)) {
                        echo "<script>alert('Product added successfully!');</script>";
                    } else {
                        echo "<script>alert('Failed to update product image details in database.');</script>";
                    }
                } else {
                    echo "<script>alert('File upload failed.');</script>";
                }
            } else {
                echo "<script>alert('Error uploading file.');</script>";
            }
        } else {
            echo "<script>alert('Database error: " . mysqli_error($conn) . "');</script>";
        }

        mysqli_close($conn);
    }
    ?>
</body>
</html>