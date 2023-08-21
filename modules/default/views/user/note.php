<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Stikies</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato|Short+Stack" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="styles.css"> -->
  <link rel = "stylesheet" type = "text/css"
     href = "<?= assets("css/note_style.css") ?>">
  <!-- <script src="main.js"></script> -->
  <script src="<?= assets("js/home.js")  ?>"> </script>
</head>

<body>

      <!-- <ul>
        <li id="how-it-works-btn">How it works</li>
      </ul> -->

<!-- home action add ele -->
  <main id="main">
    <div class="sticky">
      <div class="sticky-header">
        <span class="sticky-header-menu add-button fas fa-plus" title='new sticky'></span>
        <span class="sticky-header-menu notSaved fas fa-check" title='not saved'></span>
        <!-- <button type="button" name="button">Save</button> -->
        <span class="sticky-header-menu drop-button fas fa-paint-brush" title='change color'></span>
        <div class="dropdown-content-hide">
          <div class="pink-color"></div>
          <div class="yellow-color"></div>
          <div class="green-color"></div>
          <div class="blue-color"></div>
          <div class="purple-color"></div>
        </div>
        <span class="sticky-header-menu remove-button fas fa-trash-alt" title='delete sticky'></span>
      </div>
      <textarea class="sticky-content">
        hyasgdhjas
        </textarea>
    </div>
    <div id="createStickyBtn">+</div>
  </main>
  <button class="button-53" id="deleteAll">Delete all</button>
<!-- </form> -->
</body>

</html>
