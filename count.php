<html>
    <body>
    <h1>word count checker</h1>
    <form action="" method="POST">
        enter a word
        <input type="text" name="words">
        <input type="submit" name="submit">
    </form>
    <h4>strrev-built in fn reverse</h4>
    <h4>max-for max nbr</h4>
    <h4>str_word_count-words countewr</h4>
    </body>
</html>
<?php
if(isset($_POST['submit'])){
    $word=$_POST['words'];
    $count=str_word_count($word);
    echo "word count=$count";

    
}
?>
