<?php include $path . './data/systemData.php'; ?>

<?php foreach ($systems as $system): ?>
  <section class="systemSection">
    <p class="systemSection__title">
      <?php echo $system['title']; ?>
    </p>
    <div class="systemSection__desc">
      <p class="systemSection__desc--text01">
        <?php echo $system['desc']; ?>
      </p>
      <p class="systemSection__desc--text02">
        <?php echo $system['desc02']; ?>
      </p>
    </div>
    <ul class="systemSection__list">
      <?php foreach ($system['lists'] as $list): ?>
        <li>
          <span><?php echo $list['time']; ?>分</span>
          <span><?php echo $list['price']; ?>円</span>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>
<?php endforeach; ?>