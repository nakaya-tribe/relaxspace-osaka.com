<?php
$totalPages = ceil(count($girls) / $perPage);
if ($totalPages > 1 && $template === 'cast') :
?>
  <div class="pagination">
    <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
      <a href="?page=<?php echo $i; ?>" class="<?php if ($i === $page) echo 'active'; ?>">
        <?php echo $i; ?>
      </a>
    <?php endfor; ?>
  </div>
<?php endif; ?>