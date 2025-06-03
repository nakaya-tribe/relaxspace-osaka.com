<?php
$date = "<li class='scheduleTab'>
          <div class='scheduleTab__date'>
            <span class='scheduleTab__date--month'></span>/
            <span class='scheduleTab__date--day'></span><br class='tab'>
            <span class='scheduleTab__date--week'></span>
          </div>
        </li>";
echo str_repeat($date, 7);
