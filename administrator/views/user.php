<?php
require_once "./header.php";
require_once "../controller/UserController.php"
?>

<main class="contenido-principal">
<h1>Listado de usuarios registrados</h1>

<form action="#" method="post">
                
                    <ul>        
                             <li>
                                    <label for="id">Nombre</label><br>
                                    <input type="text" id="id" name="id" value="">
                                </li>

                                <li>
                                        <button>buscar</button>

                                </li>
                    </ul>




</form>
        

</main>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Cedula</th>
      <th>Correo</th>
      <th>Direccion</th>
      <th>Telefono</th>
      <th>Pais</th>
      <th>Ciudad</th>
      <th>Insitucion</th>
      <th>Tipo</th>
      <th>Pago</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    

    if (isset($_POST['id'])) {

      if ($_POST['id']!=""){

    $id=$_POST['id'];
    $userCtrl = new UserController();
    $users = $userCtrl->buscar($id);
  }else{

    $userCtrl = new UserController();
    $users = $userCtrl->listUser();

  }

    }else{

      $userCtrl = new UserController();
    $users = $userCtrl->listUser();

    }
    

    foreach ($users as $user) {
      echo "<tr>";
      echo "<td>" . $user->getId() . "</td>";
      echo "<td>" . $user->getNombres() . "</td>";
      echo "<td>" . $user->getApellidos() . "</td>";
      echo "<td>" . $user->getCedula() . "</td>";
      echo "<td>" . $user->getCorreo() . "</td>";
      echo "<td>" . $user->getDireccion() . "</td>";
      echo "<td>" . $user->getTelefono() . "</td>";
      echo "<td>" . $user->getPais() . "</td>";
      echo "<td>" . $user->getCiudad() . "</td>";
      echo "<td>" . $user->getInstitucion() . "</td>";
      echo "<td>" . $user->getTipo() . "</td>";
      if ($user->getPago() == 0) {
        echo "<td> Pendiente </td>";
      }else{
        echo "<td> Pagado </td>";
      }

      echo "<td><a  href='userdown.php?id=" . $user->getId() . "'></a></td>";
      echo "</tr>";
    }

    ?>
    <button type="button" ><a download="archivo.pdf" href="..//archivo.pdf">Descarga</a></button>
  </tbody>
</table>


<?php require_once "./footer.php"; ?>