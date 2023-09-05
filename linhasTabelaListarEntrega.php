                <?php 
                    while ($linha = mysqli_fetch_array ($qry)){
                        $id=$linha['id'];
                        echo "<tr>";
                        echo "<td>".$linha['id']."</td>";
                        echo "<td>".$linha['remetente']."</td>";
                        echo "<td>".$linha['cod']."</td>";
                        echo "<td>".$linha['hped']."</td>";
                        echo "<td>".$linha['dtentrega']."</td>";
                        echo "<td>".$linha['destin']."</td>";
                        echo "<td>".$linha['statusentrega']."</td>";
                        echo "<td><a href='frmeditentrega.php?id={$id}'><i class='bi bi-pencil-square'></i>Editar</a></td>";
                        echo "<td><a href='excluirentrega.php?id={$id}'><i class='bi bi-trash'></i>Excluir</a></td>";
                        echo "</tr>";
                    }
                ?>