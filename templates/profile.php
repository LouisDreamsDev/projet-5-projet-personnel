<?php $this->title = 'Mon profil'; ?>

<?= $this->session->show('update_password'); ?>
<div class="card">
    <h2 class="card-header">
    <p class="alert alert-info">Rôle : <strong><?= $this->session->get('role'); ?></strong></p>
    <div class="actions d-flex justify-content-end">
        <a id="profile-actions" class="btn btn-outline-secondary" href="../public/index.php?route=updatePassword">Modifier le mot de passe</a>
    </div>
</div>
<br>