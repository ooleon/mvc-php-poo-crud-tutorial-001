<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Contactos</title>
        <style type="text/css">	    
            table.contacts {
                width: 70%;
            }
            
            table.contacts thead {
                text-align: left;
            }
            
            table.contacts thead th {
                background-color: #cccccc;
                border: solid 1px #fff;
                padding: 3px;
            }
            
            table.contacts tbody td {
                background-color: #dddddd;
                border: solid 1px #eee;
                padding: 3px;
            }
            
            a, a:hover, a:active, a:visited {
                color: blue;
                text-decoration: underline;
            }
        </style>
    </head>
    <body>

        <div style="position: relative;" align=center > <a href="index.php?op=new">Nuevo contacto</a></div>
        <table class="contacts" border="0"  cellspacing="0" align=center >
            <thead>
                <tr>
                    <th><a href="?orderby=name">Nombre</a></th>
                    <th><a href="?orderby=phone">Telefono</a></th>
                    <th><a href="?orderby=email">Email</a></th>
                    <th><a href="?orderby=address">Direccion</a></th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($contacts as $contact): ?>
                <tr>
                    <td><a href="index.php?op=show&id=<?php print $contact->id; ?>"><?php print htmlentities($contact->name); ?></a></td>
                    <td><?php print htmlentities($contact->phone); ?></td>
                    <td><?php print htmlentities($contact->email); ?></td>
                    <td><?php print htmlentities($contact->address); ?></td>
                    <td><a href="index.php?op=delete&id=<?php print $contact->id; ?>">borrar</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
