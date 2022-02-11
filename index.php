<!<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>COUNT WORDS NUMBERS</title>
        <link rel="stylesheet" href="newcss.css"/>
    </head>
    <body>
        <form>
        <input type="text" name="words" >
        <input type="submit" >
        </form>
        <?php
        $alfavit=
            'qwertyuiopasdfghjklzxcvbnm';
        $alfaArray = str_split($alfavit);
        asort($alfaArray);
        foreach($alfaArray as $a){
            $arrayAlfa[]=$a;
        }
        $sum=0 ;
if(!empty($_GET['words'])){
    $words = $_GET['words'];
    $wordsArray = str_split($words);
    foreach($wordsArray as $w){
        if(in_array($w, $arrayAlfa)){
            foreach($arrayAlfa as $key=>$simbol){
                if($simbol == $w){
                    
                    $sum+=$key+1;
                    break;
                }
            }
        }
    }
}
  echo '<div>'.$sum.'</div>';
       
        ?>
    </body>
</html>
