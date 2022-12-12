<div class="contain-to-grid">
  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name">
        <h1><a href="/study/index.php">Apache Friends</a></h1>
      </li>
    </ul>

    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        <li class="<?php if($_SERVER['SCRIPT_NAME']=="/study/index.php"): ?>active<?php endif;?>"><a href="/study/index.php">Home</a></li>
        <li class="<?php if($_SERVER['SCRIPT_NAME']=="/study/students.php"): ?>active<?php endif;?>"><a href="/study/students.php">Student List</a></li>
        <li class="<?php if($_SERVER['SCRIPT_NAME']=="/study/phpinfo.php"): ?>active<?php endif;?>"><a href="/study/phpinfo.php">PHPInfo</a></li>
        <li class=""><a href="/phpPgAdmin/">phpPgAdmin</a></li>
      </ul>
    </section>
  </nav>
</div>