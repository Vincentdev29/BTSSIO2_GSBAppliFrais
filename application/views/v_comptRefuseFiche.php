<?php
	$this->load->helper('url');
?>
<div id="contenu">
  <?php
    $action = 'c_visiteur/refuseFiche/'.$mois;
  ?>
  <form action=<?= $mois ?> method="post">
    <label for="motif">Motif du refus</label>
    <textarea name="motif" rows="8" cols="80"></textarea>
    <input type="submit">
  </form>
</div>
