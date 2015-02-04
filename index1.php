<DOCTYPE html>
  <?php $items = array(); var_dump($items) ?>
  <html>
    <head>
      <meta charset="utf-8">
      <meta name="niewport" content="width=device-width">
      <script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
    </head>

    <body>
      <h1>Hello Yo Git!</h1>

      <h2>Chris Brewin</h2>
      <ol>
        <li>Chicken</li>
        <li>Beef</li>
        <li>Apples</li>
        <li>grapes</li>
      </ol>

      <table>
        <thead>
          <tr>
            <td>Type</td>
            <td>Name</td>
            <td>Description</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Frog</td>
            <td>Fred</td>
            <td>Its A Frog.</td>
          <tr>
          <tr>
            <td>Cow</td>
            <td>Lewis</td>
            <td>Its A cow.</td>
          <tr>
          <tr>
            <td>Chicken</td>
            <td>Chuck</td>
            <td>Its A Chicken</td>
          <tr>
          <tr>
            <td>Stick Insect</td>
            <td>Sticky</td>
            <td>Its A Strick Insect.</td>
          <tr>
        </tbody>
      </table>
      <img src="snowboarding_image_index.jpg"  />
      <address><b>Address:</b> 75 Gordonia Drive Regents Park <br /> 4118 QLD Australia</address>
      <a href="secondWebPage.php">Link To Second Page</a>

      <form>
        <textarea name="editor1" id="editor1" rows="10" cols="80">
          This is my textarea to be replaced with CKEditor.
        </textarea>
        <script>
          // Replace the <textarea id="editor1"> with a CKEditor
          // instance, using default configuration.
          CKEDITOR.replace( 'editor1' );
        </script>
      </form>
      
    </body>

  </html>
