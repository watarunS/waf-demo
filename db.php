$result = mysqli_query($conn, "SELECT amount FROM users3 where id='$id' AND password='$pass'");

//$result = mysqli_query($conn, "SELECT email FROM users3 where id=1");
//$result = 'a@sample.com';
//$row = mysqli_fetch_array($result);
//$result = mysqli_query($conn ,'SELECT * FROM users3';
//print $row;
//while ($row = mysqli_fetch_assoc($result)) {
//      print $row['e-mail'];
//}

if (mysqli_num_rows($result) == 0) {
  echo "<h2>Error either user ID or password, try again.</h2>";
  exit;
}
if (mysqli_num_rows($result) == 1) {
  echo "<h2></h2>";
}
if (mysqli_num_rows($result) >= 2) {
  echo "<h2><font color='red'></font></h2>";
}

//while ($row = mysqli_fetch_assoc($result)) {
  //print('Your e-mail is '.$row['email']);
//echo "<center> <big><big>Your email is a " .$row['email']. "</big></big></center>";
 //print('.<br>');
//}
while ($row = mysqli_fetch_assoc($result)) {
  //print('Your e-mail is '.$row['email']);
echo "<center> <big><big>Your amount is  " .$row['amount']. "</big></big></center>";
 print('.<br>');
}

mysqli_close($conn);
?>
 <center><a href="index.html">Back to previous page.</a></center>
  </body>
</html>