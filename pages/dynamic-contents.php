<!DOCTYPE html>
<html>
  <head>
    <?php include('../includes/_head.php') ?>
    <link rel="stylesheet" href="../css/forms.css">
    <link rel="stylesheet" href="../css/dynamic-contents.css">
  </head>
  <body>
    <?php include('../includes/_header.php') ?>
    <main class="main-content">
      <section class="main-content__section form-section form-section--simple">
        <h3>Dynamic contents</h3>

        <div class="dynamic-content-1">
          Dynamic content in that box
        </div>
        <button id="button-1" class="button">LOAD DYNAMIC CONTENT 1</button>
      </section>
    </main>
    <?php include('../includes/_footer.php') ?>

  <script src="../javascript/libraries/jquery-3.4.1.min.js"></script>
  <script src="../javascript/dynamic-contents.js"></script>
  </body>
</html>
