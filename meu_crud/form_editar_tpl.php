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

      <tr>
        <td>
          <input 
            type="text" 
            name="nome" 
            placeholder="Nome" 
            value="<?php echo $contato[0]->nome; ?>"
          >
        </td>
        <td>
          <input 
            type="text" 
            name="whatsapp" 
            placeholder="Whatsapp" 
            value="<?php echo $contato[0]->whatsapp; ?>"
          >
        </td>
        <td>
          <input
            name="id"
            type="hidden"
            value="<?php echo $id; ?>"
          >
          <input
            name="id"
            value="1"
            type="alterar"
          >
          <?php submit_button('Alterar'); ?>
        </td>
      </tr>

    </table>
  </form>

</div>