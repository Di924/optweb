<?php
    $comment = 0;
        if(isset($_GET['xml'])) {
            $folder_xml = $_GET['xml'];
            $folder = "php/".$folder_xml."/*.xml";
            //1. Читаем файлы *.xml из директории
            $filelist = []; //инициализируем массив
            $filelist = glob($folder);
            //2. Перебираем все файлы
            foreach ($filelist as $value) {
                $xmlstr = file_get_contents($value);
                //2.1. С помощью класса получим доступ к элементу XML
                $movies = new SimpleXMLElement($xmlstr);
                //2.2. Дата и текст комментария
                $dt = $movies->date;
                $text = $movies->info;
                //2.3. Формируем комментарий из файла
                echo "<div class='container p-2'>";
                echo "<ul class='list-group list-group-horizontal'>";
                echo "<li class='list-group-item text-info'>$dt&#160;</li>";
            echo "<li class='col-10 list-group-item text-primary bg-warning'>$text</li>";
                echo "</ul></div>";
        } //end Foreach
    }//end if
?>