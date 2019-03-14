<?php
	$this->load->helper('url');
?>
<div id="contenu">
  <?php
    $action = base_url("c_visiteur/refuseFiche");
  ?>
  <form action=<?= $action ?> method="post">
    <label for="motif">Motif du refus</label>
    <textarea name="motif" rows="8" cols="80"></textarea>
    <input type="submit" required="required">
  </form>
</div>
