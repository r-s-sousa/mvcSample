<?php

$this->layout('_theme', ['title' => $title]); ?>

<div class="row">
    <div class="container">
        <div class="col-md-12 text-center">
            <h2>Página da HOME</h2>
        </div>
        <div class="col-md-12">

        </div>
    </div>
</div>







<?php $this->start('scripts'); ?>

<script>
    $(document).ready(function() {
        document.getElementById('home').classList.add('active');
    });
</script>

<?php $this->stop(); ?>