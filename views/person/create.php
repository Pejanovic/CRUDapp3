<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'CRUDapp2';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">CRUD APP - PERSON/CREATE</h1>
    </div>

    <div class="body-content">
<?php
    $form = ActiveForm::begin()
?>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-12">
        <?= $form->field($model, 'name')->textInput() ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-12">
        <?= $form->field($model, 'lastname')->textInput() ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-12">
        <?= $form->field($model, 'birthdate')->textInput() ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-12">
        <?= $form->field($model, 'birthplace')->textInput() ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-12">
        <?= $form->field($model, 'education')->textInput() ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-12">
        <?= $form->field($model, 'privatelife')->textInput() ?>
                </div>
            </div>
        </div>
                <div class="row">
            <div class="form-group">
                <div class="col-lg-12">
        <?= $form->field($model, 'work')->textInput() ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-12">
        <?= $form->field($model, 'achievements')->textInput() ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-12">
                <?= Html::submitButton('Create Post', ['class' => 'btn btn-primary']);?>
                </div>
                <div class="col-lg-12">
               <a href= <?php echo yii::$app->homeUrl;?> class="btn btn-primary">Come Back</a>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
        </div>
        </div>
