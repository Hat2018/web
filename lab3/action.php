<?PHP 
$Surname = $_POST['Surname']; 
$Name = $_POST['Name'];
$Patronymic = $_POST['Patronymic'];
$DateBirth = $_POST['DateBirth'];
$sex = $_POST['sex'];
$nation = $_POST['nation'];
$Textarea1 = $_POST['Textarea1'];
$Addres = $_POST['Addres'];
$Check_1 = $_POST['Check_1'];
$Check_2 = $_POST['Check_2'];
$Check_3 = $_POST['Check_3'];
$Check_4 = $_POST['Check_4'];
$Email = $_POST['Email'];
$Skype = $_POST['Skype'];
$Tel = $_POST['Tel'];
$touch = $_POST['touch'];
$photo = $_POST['photo'];
$Yes = $_POST['Yes'];

$text .= "Фамилия: $Surname \n"; 
$text .= "Имя: $Name \n"; 
$text .= "Отчество: $Patronymic \n";
$text .= "Дата рождения: $DateBirth \n"; 
$text .= "Пол: $sex \n";
$text .= "Национальность: $nation \n"; 
$text .= "Краткая информация: $Textarea1 \n"; 
$text .= "Адрес: $Addres \n"; 
$text .= "Увлечение 1: $Check_1 \n"; 
$text .= "Увлечение 2: $Check_2 \n";
$text .= "Увлечение 3: $Check_3 \n"; 
$text .= "Увлечение 4: $Check_4 \n"; 
$text .= "Email: $Email \n";
$text .= "Skype: $Skype \n"; 
$text .= "Телефон: $Tel \n"; 
$text .= "Связываться по: $touch \n";
$text .= "Получать рассылку: $Yes \n"; 
$text .= "Фото: $photo \n"; 


    $file = fopen ('./data.txt', 'w+') or die("Ошибка создания/открытия файла."); 
    fwrite($file, $text); 
    fclose ($file); 
    sleep(1);
    
?>