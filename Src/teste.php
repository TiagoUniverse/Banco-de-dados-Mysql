<?php

include "conecta_mysql.inc";

$resultado = mysqli_query("Select * from Usuario");
mysqli_close($conexão);