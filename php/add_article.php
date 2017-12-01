<?php include '../includes/pdo-conn.php' ?>


<?php 
var_dump($_POST);


//SQL that inserts the data into chat table from form inputs


//$values = array(
//$_POST['article_name[]'],
//$_POST['author_name[]'],
//$_POST['pdf_file[]'],
//$_POST['publication']
//);

$sql = "INSERT INTO articles (name, author, pdf_url, topic)
VALUES (?,?,?,?)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $author);
$stmt->bindParam(3, $pdf_url);
$stmt->bindParam(4, $topic);

$arr = $_POST;

for ($i = 0; $i <= count($arr['article_name'])-1; $i++) {
    $name = $arr['article_name'][$i];
    $author = $arr['author_name'][$i];
    $pdf_url = $arr['pdf_file'][$i];
    $topic = $arr['topic'][$i];
    $stmt->execute();
}
    
?>