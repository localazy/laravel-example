<h1>{{__('example.welcome')}}</h1>


<?php
echo "<h2>" . __('example.php_fun') . "</h2>";
echo __('example.hello') . "<br>";

$x = 30;

$string_1 = __('example.how_old_question') . "<br>";

$string_2 = __('example.how_old_answer', ['years' => $x]) . "<br>";


echo $string_1;
echo $string_2;


?>

 <br>

 <a href="#"> {{__('example.anchor')}} </a>

  <br><br>

 <?php

 echo "<h2>" . trans_choice('example.users', 5). "<br>" . "</h2>";

  ?>


 <br><br>

 <a href="/example/pt"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/255px-Flag_of_Portugal.svg.png" width="60" height="40" title="Portuguese Flag" ></a>
 <a href="/example/cs"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_Czech_Republic.svg/1280px-Flag_of_the_Czech_Republic.svg.png" width="60" height="40" title="Czech Flag" ></a>
 <a href="/example/en"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/1200px-Flag_of_the_United_Kingdom.svg.png" width="60" height="40" title="UK Flag" ></a>
 <a href="/example/es"><img src="https://www.countryflags.com/wp-content/uploads/spain-flag-png-large.png" width="60" height="40" title="Spanish Flag" ></a>
