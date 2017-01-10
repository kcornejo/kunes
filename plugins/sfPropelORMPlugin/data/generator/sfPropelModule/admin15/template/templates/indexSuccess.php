[?php use_helper('I18N', 'Date') ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/assets') ?]

<div class="row">
    <div class="col-md-12">
        [?php include_partial('<?php echo $this->getModuleName() ?>/flashes') ?]
    </div>
    <div class="col-md-8">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-sharp">
                    <i class="fa fa-list"></i>
                    [?php echo <?php echo $this->getI18NString('list.title') ?> ?]
                </div>
            </div>
            <div id="portlet-body">
                <div class="scroller">
                    <?php if ($this->configuration->getValue('list.batch_actions')): ?>
                        <form action="[?php echo url_for('<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'batch')) ?]" method="post">
                        <?php endif; ?>
                        [?php include_partial('<?php echo $this->getModuleName() ?>/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?]
                        <div class="row">
                            <div class="col-md-6">
                                [?php include_partial('<?php echo $this->getModuleName() ?>/list_batch_actions', array('helper' => $helper)) ?]
                            </div>
                            <div class="col-md-6">
                                [?php include_partial('<?php echo $this->getModuleName() ?>/list_actions', array('helper' => $helper)) ?]
                            </div>
                        </div>
                        <?php if ($this->configuration->getValue('list.batch_actions')): ?>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
            <div id="sf_admin_footer">
                [?php include_partial('<?php echo $this->getModuleName() ?>/list_footer', array('pager' => $pager)) ?]
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <?php if ($this->configuration->hasFilterForm()): ?>
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption font-red-sunglo">
                        <i class="fa fa-check"></i>
                        Filtros
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="scroller" style="height:200px" data-always-visible="1" data-rail-visible="1" data-rail-color="red" data-handle-color="green">
                        [?php include_partial('<?php echo $this->getModuleName() ?>/filters', array('form' => $filters, 'configuration' => $configuration)) ?]
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>