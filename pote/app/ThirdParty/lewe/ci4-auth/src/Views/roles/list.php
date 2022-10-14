<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">

    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <a href="<?= base_url() ?>/roles/create" class="btn btn-primary"><?= lang('Auth.btn.createRole') ?></a>
                </div>
                <div class="col">
                    <?= bs5_searchform(base_url() . '/roles', (isset($search)) ? $search : false) ?>
                </div>
            </div>
        </div>
    </div>

    <div class="card">

        <?= bs5_cardheader(['icon' => 'fas fa-user-circle', 'title' => lang('Auth.role.roles'), 'help' => '#']) ?>

        <div class="card-body">

            <?= view('CI4\Auth\Views\_alert') ?>

            <?php if (!empty($roles) && is_array($roles)) :
                $i = 1; ?>

                <div class="col-lg-12">

                    <div class="row" style="border-bottom: 1px dotted; margin-bottom: 10px; padding-bottom: 10px; font-weight:bold;">
                        <div class="col-lg-1">#</div>
                        <div class="col-lg-3"><?= lang('Auth.name') ?></div>
                        <div class="col-lg-4"><?= lang('Auth.description') ?></div>
                        <div class="col-lg-3"><?= lang('Auth.permission.permissions') ?></div>
                        <div class="col-lg-1 text-end"><?= lang('Auth.btn.action') ?></div>
                    </div>

                    <?php foreach ($roles as $role) : ?>

                        <form name="form_<?= $role->id ?>" action="<?= base_url() ?>/roles" method="post">
                            <?= csrf_field() ?>

                            <input name="hidden_id" type="hidden" value="<?= $role->id ?>">
                            <div class="row border-bottom mb-2 pb-2">
                                <div class="col-lg-1"><?= $i++; ?></div>
                                <div class="col-lg-3"><?= $role->name ?></div>
                                <div class="col-lg-4"><?= $role->description ?></div>
                                <div class="col-lg-3">...</div>
                                <div class="col-lg-1 text-end">
                                    <div>
                                        <button id="action-<?= $role->id ?>" type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><?= lang('Auth.btn.action') ?></button>
                                        <div class="dropdown-menu" aria-labelledby="action-<?= $role->id ?>">
                                            <a class="dropdown-item" href="roles/edit/<?= $role->id ?>"><i class="far fa-edit fa-sm me-2"></i><?= lang('Auth.btn.edit') ?></a>
                                            <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalDeleteRole_<?= $role->id ?>"><i class="far fa-trash-alt fa-sm me-2"></i><?= lang('Auth.btn.delete') ?></button>
                                        </div>
                                    </div>
                                </div>
                                <?php echo bs5_modal([
                                    'id'           => 'modalDeleteRole_' . $role->id,
                                    'header'       => lang('Auth.modal.confirm'),
                                    'header_color' => 'danger',
                                    'body'         => lang('Auth.role.delete_confirm') . ":<br><br><ul><li><strong>" . $role->name . "</strong></li></ul>",
                                    'btn_color'    => 'danger',
                                    'btn_name'     => 'btn_delete',
                                    'btn_text'     => lang('Auth.btn.delete'),
                                ]); ?>
                            </div>
                        </form>

                    <?php endforeach; ?>

                </div>

            <?php else : ?>

                <div class="alert alert-warning" role="alert">
                    <?= lang('Auth.role.none_found') ?>
                </div>

            <?php endif ?>

        </div>
    </div>
</div>

<?= $this->endSection() ?>