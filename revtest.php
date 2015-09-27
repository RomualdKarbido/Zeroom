<?php
header("Content-Type:text/html; charset=UTF-8");
?>
<h1>Экспресс-проверка защиты сайта</h1>
<ol>
<?php
   
  // проверяем запрещенные функции
   $l_CmdList = explode(',', 'popen,exec,ftp_exec,system,passthru,proc_open,chmod,shell_exec,phpinfo');

   $l_Disabled = true;
   $l_NotDisabled = array();
   foreach ($l_CmdList as $l_F) {
      if (function_exists($l_F) && is_callable($l_F)) {
         $l_Disabled = false;
         $l_NotDisabled[] = $l_F; 
      }
   }

  if ($l_Disabled) {
     echo '<li><font color=green>Системные функции запрещены - безопасно, <br>для отключения защиты поставьте символ "решетка" # перед строкой disable_functions=... в  файле ' .  php_ini_loaded_file() . '</font><br/><br/>';
  } else {
     echo '<li><font color=red>Защита не работает, так как разрешены системные функции PHP: ' . implode(', ', $l_NotDisabled) . '</font><br/>Данные функции должны быть запрещены в файле ' . php_ini_loaded_file() . ' согласно инструкции из отчета.</br><br/>';
  }

  // проверяем выборочные файлы  
  $l_FileList = explode(',', 'index.php,wp-config.php,wp-settings.php,configuration.php,.htaccess');

  $l_Protected = true; 
  $l_UnprotectedList = array();
  foreach ($l_FileList as $l_F) {
      if (file_exists($l_F) && is_writeable($l_F)) {
         $l_Protected = false;
         $l_UnprotectedList[] = $l_F; 
      }
   }

   if ($l_Protected) {
     echo '<li><font color=green>Системные файлы защищены от записи и изменений - безопасно</font><br/><br/>';
  } else {
     echo '<li><font color=red>Защита не работает, так как системные файлы доступны для изменений: ' . implode(', ', $l_UnprotectedList) . '</font><br/>Все системные файлы должны быть сделаны "только для чтения" согласно инструкции из отчета.</br><br/>';
  }
?>
</ol>