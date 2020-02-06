<?php
    include 'dbh.inc.php'
    include 'comments.inc.php'
    date_default_timezone_set('America/New_York');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
   <title>i complain about stuff</title>
    


  </head>  
  <body>
      <h2>blog where i complain. </h2>
      <p> I know this site sucks but I just started it so shut up.</p>
    <h1>Topic 2.5.2020</h1>
    <p>
      today was a decent day but I really dislike how some people call you toxic after starting multiple arguements about stupid ass shit. smh.
    </p>
<?php
    echo "<form method='POST' action='".setComments()."'>
        <input type='hidden' name='uid' value='Anonymous'> 
        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'> 
        <textarea name='message'></textarea><br>
        <button type='submit'name='submit'>Comment</button>
</form>";
?>
 
  </body>
</html>
