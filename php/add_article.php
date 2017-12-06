<?php include '../includes/pdo-conn.php' ?>

<?php 
var_dump($_POST);


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
$pdf_target = "../media/pdfs/".basename($_FILES['pdf_file']['name'][0]);

$image = $_FILES['image']['name'];
$pdf = $_FILES['pdf_file']['name'];

// looping thru array of pdf files from HTML input
foreach($pdf as $idx){
            if (isset($_POST["upload"])) {
                if(move_uploaded_file($_FILES['image']['tmp_name'], $target) && move_uploaded_file($_FILES['pdf_file']['tmp_name'][$idx], $pdf_target)){
                    $msg = "image uploaded";
                }  else {
                    $msg = "There was a problem uploading image";
                }
            }
        }

print_r($pdf_target);



print_r($msg);

$sql_publication = "INSERT INTO publications (number, image) VALUES (?,?)";

$nm = $conn->prepare($sql_publication);

$values = array($highestnumber, $image);

$nm->execute($values);

$sql = "INSERT INTO articles (name, author, pdf_url, topic, publication)
VALUES (?,?,?,?,?)";


print_r($target);



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