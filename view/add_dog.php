<?php
	require_once('../include/cabecalho.php');
	require_once "../model/dog.php";
	require_once "../model/database.php";
?>

        <div id="conteudo">
            <form method="post" action="../controller/dog_controller.php?action=create" enctype="multipart/form-data">
                Nome:<br />
                <input type="text" name="nome" /><br />
                idade:<br />
                <input type="text" name="idade" /><br />
                Origem:<br />
                <input type="text" name="origem" /><br />
                Ingrus:<br />
                <input type="text" name="ingrus" /><br />
                Foto:<br />
                <input type="file" name="arquivo" size="30">
                <input type="submit" name="teste" value="submit">
            </form>
        </div>
    </div>
    </body>
</html>
