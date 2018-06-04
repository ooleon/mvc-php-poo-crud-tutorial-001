<!DOCTYPE html>
<html>
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>
	<?php print htmlentities($title) ?>
      </title>

      <style type="text/css">
      table.contacts {
      width: 100%;
      }

      table.contacts thead {
      background-color: #eee;
      text-align: left;
      }

      table.contacts thead th {
      border: solid 1px #fff;
      padding: 3px;
      }

      table.contacts tbody td {
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
        <?php
/*        if ( $errors ) {
            print '<ul class="errors">';
            foreach ( $errors as $field => $error ) {
                print '<li>'.htmlentities($error).'</li>';
            }
            print '</ul>';
        }
*/        
        ?>

<div><a href="index.php?op=new">Agregar un nuevo contacto</a></div>

<form method="POST" action="">

            <label for="name">Nombre:</label> <br/>
            <input type="text" name="name" value="<?php print htmlentities($contact->name) ?>"/>
            <br/>
            <label for="phone">Telefono:</label><br/>
            <input type="text" name="phone" value="<?php print htmlentities($contact->phone) ?>"/>
            <br/>
            <label for="email">Email:</label><br/>
            <input type="text" name="email" value="<?php print htmlentities($contact->email) ?>" />
            <br/>
            <label for="address">Direccion:</label><br/>
            <textarea name="address"><?php print htmlentities($contact->address) ?></textarea>
            <br/>
            
            <input type="hidden" name="id" value="<?php print htmlentities($contact->id) ?>" />
            <input type="hidden" name="formUpdate-submitted" value="1" />
            <input type="submit" value="Submit" />
        </form>

</body>
</html>