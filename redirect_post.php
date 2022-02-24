<form id="redirectForm" action="<?= base_url($action) ?>" method="post">
    <?php foreach ($posts as $key => $p):?>
        <?php $count = $key+1?>
        <input hidden name="<?= $p['post_name'.$count] ?>" value="<?= $p['post_value'.$count] ?>">
    <?php endforeach?>
</form>

<script type="text/javascript">
    document.getElementById('redirectForm').submit();
</script>