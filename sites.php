<!--
        #############  We hire !
        #           #  Become our Mario hero !
        ###       ###   Enter some pipes into
          #       #     the coding world with
          #       #     our team now!                                                    bbb
          #       #                                                                    bbObObb
          #       #                                                                   bbbbbbbbb
          #       #                                                                     o  o
"""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""
Nice idea leboncoin !
-->
<?php
    if($_POST['chercher']){
        $rech = true;
    }
    else{
        unset($rech);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <style type="text/css">
            <!--
                body{
                    margin:auto;
                }
                #sep{
                    height:30px;
                    background:rgba(191, 22, 22, 0.9);
                }
                #chercher{
                    background:#BF1616;
                    width:100%;
                    height:125px;
                    margin:auto;
                }
                
                #chercher table{
                    margin-left: 32px;
                }
                
                input[name="chercher"]{
                    background: url('loupe.png') no-repeat #fff;
                    padding-left:18px;
                    border: 1px solid black;
                    border-radius:6px;
                    width:200px;
                    height:14px;
                }
                input[name="chercher"]:focus{
                    width:400px;
                    height:28px;
                    font-size:1.2em;
                }
                input[name="boutonChercher"]{
                    border: 1px double black;
                }
                #agenda{
                    font-size:0.8em;
                    max-width:200px;
                    cursor: default;
                    float:right;
                }
                #td1{
                    background: #fff;
                }
                #td1:hover{
                    background: #367BBC;
                    color:#fff;
                    cursor: default;
                }
                #td2{
                    background: #84AFD8;
                }
                #td2:hover{
                    background: #367BBC;
                    color:#fff;
                    cursor: default;
                }
                .head{
                    font-weight:bold;
                    color:#fff;
                    padding:8px;
                    background:#84AFD8;
                    border-top-left-radius:12px;
                }
                .head:hover{
                    color:#367BBC;
                }
                
            -->
        </style>
    </head>
    <body>
        <div id="chercher">
            <table>
                <tr>
                    <td><img src="logo.png" /></td>
                    <td>
                        <form action="index.php" method="post">
                            <input placeholder="Rechercher sur le site (ou pas)" name="chercher" type="text" />
                            <input name="boutonChercher" value="Rechercher" type="submit" />
                        </form>
                    </td>
                </tr>
            </table>
            
        </div>
        <div id="sep"><?php if($rech == true){ echo "Non mais, ça va rien chercher y a pas de site hein :v"; } ?></div>
        <div id="agenda">
            <table border=0 cellspacing=0>
                <tr style="border-bottom:#84AFD8;"><td style="height:35px;"><span class="head">Agenda</span></td></tr>
            <?php
                $agenda = [
                    [
                        "nom" => "Route jaune 20XX",
                        "date" => "08/05"
                    ],
                    [
                        "nom" => "Grève de la soif (sponsorisé par Cristalline)",
                        "date" => "12/06"
                    ],
                    [
                        "nom" => "Championnant du Monde de lancé de stylos",
                        "date" => "14/07"
                    ],
                    [
                        "nom" => "Censé se passer quelque chose",
                        "date" => "08/05"
                    ]
                ];
                $i = 0;
                foreach($agenda as $k){
                    if($i%2==0){
                        echo '<tr><td id="td1">Le '.$k['date'].' : '.$k['nom'].'</td></tr>';
                    }
                    else{
                       echo '<tr><td id="td2">Le '.$k['date'].' : '.$k['nom'].'</td></tr>';
                    }
                    $i++;
                }
                // http://www.veloceclubepinal.fr/
            ?>
            </table>
        </div>
    </body>
</html>