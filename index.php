<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disciplinas</title>
    <style>
        body{
            background-color: black;
        }

        h1{
            text-align: center;
            color: white;
        }

        table{
            margin-left: auto;
            margin-right: auto;
            color: white;
            font-size: 30px;
            padding: 5px;
        }

        th{
            background-color: purple;
            color: whitesmoke;
            padding: 5px;
        }

        td{
            background-color: white;
            color: black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Listar Disciplinas</h1>
    <?php
    $arqDisc = fopen("disciplinas.txt", "r") or die ("erro ao criar arquivo");
    $cabecalho= explode(";", fgets($arqDisc));
    ?>
    <br>
    <table style="border: 1px solid;">
        <tr>
            <th style="border: 1px solid;"><?php echo $cabecalho[0]?></th>
            <th style="border: 1px solid;"><?php echo $cabecalho[1]?></th>
            <th style="border: 1px solid;"><?php echo $cabecalho[2]?></th>
        </tr>
       
        <?php while(!feof($arqDisc)){
            $info= explode(";", fgets($arqDisc));?>
            <tr>
                <td style="border: 1px solid;"><?php echo $info[0]?></td>
                <td style="border: 1px solid;"><?php echo $info[1]?></td>
            <td style="border: 1px solid;"><?php echo $info[2]?></td>
            </tr>
        <?php }?>
    </table>
</body>
</html>