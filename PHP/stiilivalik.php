<!doctype html>

<?php
$text="Kui kaua sellega veel minna saab?"; 
$colortext="black";
$colorback="yellow";
$textsize="14px";

if (isset($_POST['text']) && $_POST['text']!="") {
    $text=htmlspecialchars($_POST['text']);
} 
if (isset($_POST['colortext']) && $_POST['colortext']!="") {
    $colortext=htmlspecialchars($_POST['colortext']);
} 
if (isset($_POST['colorback']) && $_POST['colorback']!="") {
    $colorback=htmlspecialchars($_POST['colorback']);
}
if (isset($_POST['textsize']) && $_POST['textsize']!="") {
    $textsize=htmlspecialchars($_POST['textsize']);
}
?>

<head>
    <meta charset="utf-8">
    <title>Stiilivalik</title>

    <style>
        .window {
             height: auto;
             min-height: 100px;
             width: 200px;
             border: 15px outset green;
             border-radius: 15px;
             color: <?php echo $colortext; ?>;
             background-color: <?php echo $colorback; ?>;
             font-size: <?php echo $textsize; ?>px;
        }
        button {
            border: 5px outset green;
            border-radius: 5px;
        }
        caption {
            font-size: 24px;
            font-weight: bold;
            padding: 10px;
            color: green;
        }
    </style>
</head>

<body>
   
    <div class="window">
        <?php echo $text; ?>
    </div>
    <form method="post" action="stiilivalik.php">
<table>
    <caption>Kirjuta ja vorminda</caption>
    <tr>
        <th>
            <label for="text">Kirjuta tekst:</label>
        </th>
        <td>
            <input type="text" name="text" id= "text" placeholder="tekst">
        </td>
    </tr>
    <tr>
        <th>
            <label for="colortext">Teksti värv</label>
        </th>
        <td>
            <input type="color" name="colortext" id="colortext">
        </td>
    </tr>
    
 <tr>
        <th>
            <label for="colorback">Taust</label>
        </th>
        <td>
            <input type="color" name="colorback" id="colorback">
        </td>
    </tr>
     <tr>
        <th>
            <label for="textsize"><Kirja suurus</label>
        <td>
            <input type="number" name="textsize" id="textsize">
        </td>
    </tr>
       
                <tr>
        <td colspan="2">
            <button type="submit">Muuda</button>
        </td>
        
    </tr>
   
</table>
</form>

</body>
</html>