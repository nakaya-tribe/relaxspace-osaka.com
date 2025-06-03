<ul class="navList pc-container">
  <li class="<?php if ($template === 'top') echo 'active'; ?>">
    <a href="<?php echo $path; ?>">
      <span>TOP</span>
    </a>
  </li>
  <li class="<?php if ($template === 'cast') echo 'active'; ?>">
    <a href="<?php echo $path; ?>cast.php">
      <span>CAST</span>
    </a>
  </li>
  <li class="<?php if ($template === 'schedule') echo 'active'; ?>">
    <a href="<?php echo $path; ?>schedule.php">
      <span>SCHEDULE</span>
    </a>
  </li>
  <li class="<?php if ($template === 'system') echo 'active'; ?>">
    <a href="<?php echo $path; ?>system.php">
      <span>SYSTEM</span>
    </a>
  </li>
  <li class="<?php if ($template === 'access') echo 'active'; ?>">
    <a href="<?php echo $path; ?>access.php">
      <span>ACCESS</span>
    </a>
  </li>
  <li class="<?php if ($template === 'recruit') echo 'active'; ?>">
    <a href="<?php echo $path; ?>/recruit" target="_blank">
      <span>RECRUIT</span>
    </a>
  </li>
</ul>