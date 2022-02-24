<form id="redirectForm" action="<?= base_url($action) ?>" method="post">
    <input hidden name="<?= $post_name ?>" value="<?= $post_value ?>">
</form>

<script type="text/javascript">
    document.getElementById('redirectForm').submit();
</script>