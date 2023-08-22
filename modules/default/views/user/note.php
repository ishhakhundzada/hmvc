<div id="wrapper">
    <form  action="<?=base_url("user/note/add-action")?>" method="POST">
    <div id="note-editor">
      <h2 id="note-editor-title">Create Note</h2>
      <label>Title:</label>
      <input type="text" id="title" name="title" />
      <label>Body:</label>
      <input type="text" id="message" name="body"/>
      <div id="button">
        <button type="submit" name="note"id="add-btn">Create Note</button>
        <div id="error"></div>
      </div>
    </div>
  </form>

    <div id="notes-section">
      <h2>Notes</h2>
      <table id="notes">
        <thead>
          <tr>
            <th>Title</th>
            <th>Body</th>
            <th> #</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($row as $key => $value) {  ?>
            <tr data-id="<?= $value["id"] ?>">
              <td> <input value ="<?= htmlentities($value["title"])?>" /> </td>
              <td> <input value ="<?= htmlentities($value["body"])?>" /> </td>
              <td> <button type="submit" data-role="edit-button" > Save Note </button> </td>
              <td> <button type="submit" data-role="delete-button"> Delete Note </button> </td>
            </tr>
          <?php } ?>
      </tbody>
    </table>
    </div>
  </div>
</body>
<script type="text/javascript" src="<?=assets("js/note.js")?>"> </script>
</html>
