<?PHP
$hostname = "http://localhost/news";

$conn = mysqli_connect("localhost", "root", "", "news-site") or die("Connection failed : " . mysqli_connect_error());
