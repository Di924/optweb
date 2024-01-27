<?php
        //1.Получаем из формы
        $body=strip_tags($_POST['body']);
        $num=$_POST['num'];
        echo $body;
        echo $num;
        //2.Создаем XML файл
        $dom = new DOMDocument();
            $dom->encoding = 'utf-8';
            $dom->xmlVersion = '1.0';
            $dom->formatOutput = true;
            //Часовой пояс
            date_default_timezone_set('Asia/Novosibirsk');
            $dt = date("H:i:s");
            //3.Создаем элементы
            $root=$dom->createElement("root");
                $date=$dom->createElement("date",$dt);
                $info=$dom->createElement("info",$body);
            //3.1.Добавить элементы
                $root->appendChild($date);
                $root->appendChild($info);
            $dom->appendChild($root);
            $xml_file_name = $num."/".'blog'.date("H-i-s").'.xml';
            //4.Сохранить XML-документ
            $dom->save($xml_file_name);
            echo "XML file saved at: " . $xml_file_name;
            //5.Редирект откуда пришли с параметром
            if ($_SERVER['HTTP_REFERER'] != null) {
                header("Location: "."../?xml=".$num);
                exit( );
            }
?>