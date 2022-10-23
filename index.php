<!DOCTYPE html>
<html lang="en" dir="1tr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <form action="" method="post">
            <p>Berapakah hasil pengurangan 1 - 1 ?</p>
            <input type="text" name="ans1">
            <p>Berapakah hasil 1 + 1 x 0 ?</p>
            <input type="text" name="ans2">
            <p>Berapakah akar dari 4 ?</p>
            <input type="text" name="ans3">
            <p>Berapakah akar dari 9??</p>
            <input type="text" name="ans4">
            <p>Berapakah akar dari 16? ?</p>
            <input type="text" name="ans5">
            <button type="submit" name="submit" id="submit">Lihat Hasil</button>
</form>
<?php
        if(isset($_POST['submit'])){
                $ans1 = $_POST['ans1'];
                $ans2 = $_POST['ans2'];
                $ans3 = $_POST['ans3'];
                $ans4 = $_POST['ans4'];
                $ans5 = $_POST['ans5'];
                $correct = 0;
                $cat = "";
                    if ($ans1 == "0"){
                        $correct+=20;
                        if ($ans2 == "1"){
                            $correct+=20;
                            if ($ans3 == "2") {
                                $correct+=20;
                                if ($ans4 == "3") {
                                    $correct+=20;
                                    if ($ans5 == "4") {
                                        $correct+=20;
                                  }
                                } 
                            }
                        } 
                    }
                    switch ($correct) {
                        case 100:
                          $cat = "Sangat Baik";
                          break;
                        case 80:
                          $cat = "Baik";
                          break;
                        case 60:
                          $cat = "Cukup";
                          break;
                        case 40:
                          $cat = "Kurang";
                          break;
                        case 20:
                          $cat = "Sangat Kurang";
                          break;
                        // case 20:
                        //   $cat = "Sangat Kurang";
                        //   break;
                        default:
                          $cat = "Semua Jawaban Salah";
                          break;
                      }
                      echo "<h4 class='text-primary mt-4'>Nilai anda: $correct</h4>";
                      echo "<h4 class='text-primary' >Keterangan: $cat </h4>";
                }
            ?>
</body>
</html>