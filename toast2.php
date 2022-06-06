<div class="<?= isset($custom_class) ? $custom_class : 'position-fixed top-0 start-0 p-3' ?>" style="z-index: 11">
    <div id="toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" <?= (isset($toast_delay)) ? 'data-bs-delay="' . $toast_delay . '"' : '' ?>>
        <div class="toast-header">
            <strong class="me-auto"><?= $toast_title ?></strong>
            <small>a second ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <?= $toast_message ?>
        </div>
    </div>
</div>