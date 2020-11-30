<div class="wrap">
  <h1>Meu CRUD</h1>

  <br><br>

  <form method="post">
    <table border="1" width="50%">
      <tr> 
        <td>Nome</td>
        <td>Whatsapp</td>
        <td></td>
      </tr>
      <?php
        foreach ($contatos as $key => $value) {
          echo "
            <tr>
              <td>{$value->nome}</td>
              <td>{$value->whatsapp}</td>
              <td>
                <a href='?page={$_GET['page']}&apagar={$value->id}'>Apagar</a>
              </td>
            </tr>
          ";
        }
      ?>

      <tr> 
        <td>
          <input type="text" name="nome" placeholder="Nome">
        </td>
        <td>
          <input type="text" name="whatsapp" placeholder="Whatsapp" >
        </td>
        <td>
          <?php submit_button('Gravar'); ?>
        </td>
      </tr>

    </table>
  </form>

</div>