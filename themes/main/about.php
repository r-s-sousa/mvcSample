<?php $this->layout("_theme", ['title' => $title]); ?>

<h1>Página Sobre</h1>

<?php
$this->start('scripts');
?>

<script>
    $(document).ready(function(){
        document.getElementById('about').classList.add('active');
    })
</script>

<?php
$this->end();
?>