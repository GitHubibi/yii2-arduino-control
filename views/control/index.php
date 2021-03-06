<?php
/* @var $this yii\web\View */

use app\assets\ControlAsset;
use rmrevin\yii\fontawesome\FA;

ControlAsset::register($this);

$this->title = 'Control Panel';
?>
<div class="control-panel-index">
    <h1 class="page-header"><?= $this->title ?></h1>

    <div id="loader">
        <div class="loader-spinner">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10"/>
            </svg>
        </div>

        <div class="loader-error-text"></div>
    </div>

    <div id="content">
        <div class="row">

            <div class="col-md-4 col-sm-6 led">
                <div class="panel panel-default panel-led">
                    <div class="panel-body text-center">
                        <h1>LED</h1>

                        <?= FA::i('lightbulb-o', [
                            'class' => 'panel-icon',
                        ]) ?>
                    </div>

                    <div class="panel-footer">
                        <a class="btn btn-block btn-lg btn-raised" data-type="led"><span class="ledStatus text-uppercase">off</span></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 relay">
                <div class="panel panel-default panel-relay">
                    <div class="panel-body text-center">
                        <h1>Relay</h1>

                        <?= FA::i('toggle-on', [
                            'class' => 'panel-icon',
                        ]) ?>
                    </div>

                    <div class="panel-footer">
                        <a class="btn btn-block btn-lg btn-raised" data-type="relay"><span class="relayStatus text-uppercase">off</span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>