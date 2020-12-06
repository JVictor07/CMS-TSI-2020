<div class="wrap">
  <h1>My Plug-in Settings</h1>

  <br><br>

  <form method="post" action="options.php">

    <label for="token-api">API Token</label>
    <input 
      type="text" 
      id="token-api"
      name="token-api"
    >

    <br><br>

    <label for="api-url">API URL</label>
    <input 
      type="text" 
      id="api-url"
      name="api-url"
    >

    <br><br>

    <?php submit_button(); ?>

  </form>
</div>