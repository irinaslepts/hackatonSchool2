<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Diary</title>
</head>
<body style="background-color: rgb(224, 215, 171);">
<?php 
$con = mysqli_connect('127.0.0.1', 'root','','hackaton');
$query = mysqli_query($con, "SELECT * FROM user");
$result = $query->fetch_assoc();
$result2 = $query->fetch_assoc();

 ?>

    <div class="col-12" style="height: 100px; background-color: rgb(231, 170, 57);"><!-- шапка нач-->
        <div class="row">
            <div class="col-4">
                <div class="row">
                    <form action="main_page.php" target="_blank">
                    <button  class="btn d-block border" style="margin-top: 30px; margin-left: 20px; background-color: rgb(231, 170, 57);">Назад</button>
                    </form>
                    <h1 class="" style="text-align: center; margin-top: 10px; color: rgb(255, 255, 255); margin-top: 20px; margin-left: 50px;">CoolSchool</h1>
                </div>
    
            </div>
            <div class="col-4 px-0">
    
            </div>
            <div class="col-4 px-0">
                <div class="row">
                           <?php
                echo "<h1 class='' style = 'text-align: center; color: rgb(255, 255, 255); margin-top: 30px; margin-left: 230px;'>".$result2['login']."</h1>";
            ?>
                    <img src="avatar.png" alt="" class="" style="width: 50px; height: 50px; margin-top: 30px; margin-left: 20px;">
                </div>
    
            </div>
        </div>
    </div><!-- шапка кон-->






                                           <!-- контейнер, Главный кол -->
                    
                        <h1 style="text-align: center; color:rgb(119, 56, 15);">Дневник</h1>
                        <div class="row">
                            <div class="col-3 border"  style="height: 50px; background-color: rgb(231, 170, 57);">
                                <h3 style="text-align: center; margin-top: 7px; color: rgb(119, 56, 15);">Урок</h3>
                            </div>
                            <div class="col-3 border"  style="height: 50px; background-color: rgb(231, 170, 57);">
                                <h3 style="text-align: center; margin-top: 7px; color: rgb(119, 56, 15);">Задание</h3>
                            </div>
                            <div class="col-3 border"  style="height: 50px; background-color: rgb(231, 170, 57);">
                                <h3 style="text-align: center; margin-top: 7px; color: rgb(119, 56, 15);">Домашнее задание</h3>
                            </div>
                            <div class="col-3 border"  style="height: 50px; background-color: rgb(231, 170, 57);">
                                <h3 style="text-align: center; margin-top: 7px; color: rgb(119, 56, 15);">Оценка</h3>
                            </div>
                        </div>
                        <div class="col-12 border"  style="height: 50px; background-color: rgb(231, 170, 57);;">
                            <h3 style="text-align: center; color:rgb(119, 56, 15);">Понедельник, 9 Ноября</h3>
                        </div>
                        <div class="row">
                            <div class="col-3 border"  style="">
                                <h2 style="text-align: center; color:rgb(82, 90, 89);">1.  Алгебра</h2>
                            </div>
                            <div class="col-3 border"  style="background-color: rgb(224, 215, 171);">
                                <h2 style="text-align: center; color:rgb(82, 90, 89);">Выполнить тест: </h2>
                                <a href="https://edu.skysmart.ru/student/ramatezute" class="stretched-link" style="">https://edu.skysmart.ru/student/ramatezute</a>

                            </div>
                            <div class="col-3 border"  style="">
                                <h2 style="text-align: center; color:rgb(82, 90, 89);">№46, 47, 48; стр 26</h2></div>
                            <div class="col-3 border"  style="">
                                <h1 style="text-align: center; color:rgb(82, 90, 89);">5</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 border"  style="">
                                <h2 style="text-align: center; color:rgb(82, 90, 89);">2.  Химия</h2>
                            </div>
                            <div class="col-3 border"  style="">
                                <h2 style="text-align: center; color:rgb(82, 90, 89);">Просмотреть видео урок: </h2>
                                <a href="https://edu.skysmart.ru/student/ramatezute" class="stretched-link" style="">https://edu.skysmart.ru/student/ramatezute</a>

                            </div>
                            <div class="col-3 border"  style="">
                                <h2 style="text-align: center; color:rgb(82, 90, 89);">Параграв 11, вопросы в конце параграфа</h2></div>
                            <div class="col-3 border"  style="">
                                <h1 style="text-align: center; color:rgb(82, 90, 89);">4</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 border"  style="">
                                <h2 style="text-align: center; color:rgb(82, 90, 89);">3.  Литература</h2>
                            </div>
                            <div class="col-3 border"  style="">
                                <h2 style="text-align: center; color:rgb(82, 90, 89);">Написать сочинение-рассуждение на тему: "Дума о Тарасе Бульбе" </h2>


                            </div>
                            <div class="col-3 border"  style="">
                                <h2 style="text-align: center; color:rgb(82, 90, 89);">Прочитать бмографию М.Ю Лермонтова</h2></div>
                            <div class="col-3 border"  style="">
                                <h1 style="text-align: center; color:rgb(82, 90, 89);">5/5</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 border"  style="">
                                <h2 style="text-align: center; color:rgb(82, 90, 89);">4.  Физкультура</h2>
                            </div>
                            <div class="col-3 border"  style="">
                                <h2 style="text-align: center; color:rgb(82, 90, 89);">Конспкет</h2>


                            </div>
                            <div class="col-3 border"  style="">
                                <h2 style="text-align: center; color:rgb(82, 90, 89);">Сделать зарядку тазобедренного сустава</h2></div>
                            <div class="col-3 border"  style="">
                                <h1 style="text-align: center; color:rgb(82, 90, 89);">5</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 border"  style="">
                                <h2 style="text-align: center; color:rgb(82, 90, 89);">5.  Английский язык</h2>
                            </div>
                            <div class="col-3 border"  style="">
                                <h2 style="text-align: center; color:rgb(82, 90, 89);">Выполнить тестовое задание в учебнике на стр 106</h2>


                            </div>
                            <div class="col-3 border"  style="">
                                <h2 style="text-align: center; color:rgb(82, 90, 89);">Подготовка к К/Р</h2></div>
                            <div class="col-3 border"  style="">
                                <h1 style="text-align: center; color:rgb(82, 90, 89);">4</h1>
                            </div>
                        </div>
                        




                        
                    

                    
              


                  


</body>
</html>