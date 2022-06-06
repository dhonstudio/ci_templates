<form method="post" action="<?= $action ?>">

    <?php foreach ($formGroup as $formControl) : ?>

        <?php if ($formControl['column'] == 'single') : ?>
            <div class="form-floating mb-3">
                <input type="<?= $formControl['type'] ?>" class="form-control" id="<?= $formControl['name'] ?>" name="<?= $formControl['name'] ?>" placeholder="<?= $formControl['placeholder'] ?>" value="<?= set_value($formControl['name']); ?>">
                <label for="<?= $formControl['name'] ?>"><?= $formControl['label'] ?></label>
                <?= form_error($formControl['name'], '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

        <?php elseif ($formControl['column'] == 'split1') : ?>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input type="<?= $formControl['type'] ?>" class="form-control" id="<?= $formControl['name'] ?>" name="<?= $formControl['name'] ?>" placeholder="<?= $formControl['placeholder'] ?>" value="<?= set_value($formControl['name']); ?>">
                        <label for="<?= $formControl['name'] ?>"><?= $formControl['label'] ?></label>
                        <?= form_error($formControl['name'], '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

            <?php elseif ($formControl['column'] == 'split2') : ?>
                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input type="<?= $formControl['type'] ?>" class="form-control" id="<?= $formControl['name'] ?>" name="<?= $formControl['name'] ?>" placeholder="<?= $formControl['placeholder'] ?>" value="<?= set_value($formControl['name']); ?>">
                        <label for="<?= $formControl['name'] ?>"><?= $formControl['label'] ?></label>
                        <?= form_error($formControl['name'], '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            </div>
        <?php endif ?>
    <?php endforeach ?>

    <button type="submit" class="btn btn-<?= $submit['bg'] ?> col-12 mt-2"><?= $submit['label'] ?></button>

</form>