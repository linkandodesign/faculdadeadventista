<?php

$dadosHeader['title'] = "404 - Página não encontrada!";
echo view('/templates/header', $dadosHeader);
?>
<section class="default">
    <div>
        <h1>404</h1>
        <p>PÁGINA NÃO ENCONTRADA</p>
    </div>
</section>
<?php
echo view('/templates/footer');