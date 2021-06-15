<?php require('partial/header.html');?>
<div class="bg-blue">
    <div class="btn-group">
        <h2>Quels genres musicaux écoutes-tu ?</h2>
        <h4>Sélectionne les genre musicaux qui te font vivre et découvre des profils et des musiques qui te correspondent</h4><br/>
        <?php foreach($results as $genre){ ?>
        <div class="button-labels">
          <input type="checkbox" id="genre<?php echo $genre['code_genre']?>" value="<?php echo $genre['code_genre']?>">
          <label for="genre<?php echo $genre['code_genre']?>"><?php echo $genre['lib_genre'] ?></label>
        </div>
        <?php }?>
        <br/>
        <a href="index.php?action=artists" class="btn-long btn-blue">CONTINUER 1/3</a>
        <button class="btn-long btn-spotify"><i class="fab fa-spotify"></i>  CONTINUER AVEC SPOTIFY</button>
      </div>
</div>
