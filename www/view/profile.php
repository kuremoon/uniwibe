<?php require('partial/header.html');?>
<div class="bg-dark">
  <img/>
  <h2>Nom XX ans</h2>
  <h3>Prototyping using APIs, Application Programming Interfaces can enable all kinds of awesomeness, like Building Voice-Enabled Prototypes or integrate with services like Google Sheets, Twitter. ☎️🎬</h3>
  <!-- carousel -->
  <h3>Tags</h3>
  <?php foreach($results as $genre){ ?>
        <div class="button-labels">
          <label><?php echo $genre['lib_genre'] ?></label>
        </div>
  <?php }?>
</div>
<?php require('partial/nav.html');?>
