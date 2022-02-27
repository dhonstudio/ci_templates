<div class="<?= isset($custom_class) ? $custom_class : 'position-fixed top-0 start-0 p-3' ?>" style="z-index: 11">
  <?php foreach ($toasts as $key => $t) :?>
    <div id="<?= $t['id'] ?>" class="toast" role="alert" aria-live="assertive" aria-atomic="true" <?= (isset($t['delay'])) ? 'data-bs-delay="'.$t['delay'].'"' : ''?>>
      <div class="toast-header">
        <strong class="me-auto"><?= $t['title'] ?></strong>
        <small>a second ago</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        <?= $t['message'] ?>
      </div>
    </div>
  <?php endforeach?>
</div>