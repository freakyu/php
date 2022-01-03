<!DOCTYPE html>
<html>
  <body>
    <form method="POST">
      <table>
        <tr>
          <td>Nama</td><td>:</td><td><input type="text" name="nama"></td>
          <td><input type="submit" name="submit" value="Cek Nama"></td>
        </tr>
      </table>
    </form>

    <?php
      if(isset($_POST['submit'])) {
      echo "Halo $_POST[nama], apa kabar?";
      }
    ?>



  </body>
</html>