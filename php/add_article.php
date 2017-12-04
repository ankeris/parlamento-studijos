<?php include '../includes/pdo-conn.php' ?>


<?php 
var_dump($_POST);
                
                // Print the array from getdate()
                //print_r(getdate());
                // Return date/time info of a timestamp; then format the output
                //$mydate=getdate(date("U"));
                //echo "$mydate[year]";

// SQL Finds highest number
$publicationNumber = "SELECT number FROM publications ORDER BY number DESC LIMIT 1";

$statement = $conn->query($publicationNumber);
$number = $statement->fetch(PDO::FETCH_ASSOC);

// gets current highest number
$highestnumber = $number["number"];

// when post is added, ads +1 to highest number on DB. 
// That's because every magazine publishment is numbered like this
$highestnumber += 1;

// print_r($highestnumber);
$target = "../media/covers/".basename($_FILES['image']['name']);

$image = $_FILES['image']['name'];

        if (isset($_POST["upload"])) {
            if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
                $msg = "image uploaded";
            }  else {
                $msg = "There was a problem uploading image";
            }
        }

$sql_publication = "INSERT INTO publications (number, image) VALUES (?,?)";
$nm = $conn->prepare($sql_publication);
$values = array($highestnumber, $image);
$nm->execute($values);

$sql = "INSERT INTO articles (name, author, pdf_url, topic, publication)
VALUES (?,?,?,?,?)";

//$pdf_target = "../media/pdfs/".basename($_FILES['pdf_file']['name']);

$pdf = $_FILES['pdf_file']['name'];

$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $author);
$stmt->bindParam(3, $pdf_url);
$stmt->bindParam(4, $topic);
$stmt->bindParam(5, $highestnumber);

$arr = $_POST;

for ($i = 0; $i <= count($arr['article_name'])-1; $i++) {
    $name = $arr['article_name'][$i];
    $author = $arr['author_name'][$i];
    $pdf_url = $pdf[$i];
    $topic = $arr['topic'][$i];
    $stmt->execute();
}

$msg = "";



?>