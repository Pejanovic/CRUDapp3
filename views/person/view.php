<?php
use yii\helpers\html;

/* @var $this yii\web\View */

$this->title = 'CRUDapp2';
?>
<div class="site-index">
<?php if(yii::$app->session->hasFlash('message')):?>
    <?php echo yii::$app->session->getFlash('message');?>
<?php endif; ?>
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">CRUD APP - PERSON</h1>
    </div>

    <div class="body-content">
        <div class="row">
        <span style="margin:10px;"><?= Html::a('Create', ['/person/create'], ['class' => 'btn btn-primary']) ?></span>

    
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Birth date</th>
      <th scope="col">Birth place</th>
      <th scope="col">Education</th>
      <th scope="col">Private life</th>
      <th scope="col">Work</th>
      <th scope="col">Achievements</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  <?php if(count($model) > 0):?>
    <?php foreach($model as $oneperson):  ?>
    <tr class="table-active">
      <th scope="row"><?php echo  $oneperson->id; ?></th>
      <td><?php echo  substr($oneperson->name,0,10); ?></td>
      <td><?php echo  $oneperson->lastname; ?></td>
      <td><?php echo  $oneperson->birthdate; ?></td>
      <td><?php echo  $oneperson->birthplace; ?></td>
      <td><?php echo  substr($oneperson->education,0,12); echo "..."; ?></td>
      <td><?php echo  substr($oneperson->privatelife,0,12); echo "..."; ?></td>
      <td><?php echo  substr($oneperson->work,0,12); echo "..."; ?></td>
      <td><?php echo  substr($oneperson->achievements,0,12); echo "..."; ?></td>
      <td class="d-flex">
      <span><?= Html::a('View', ['index', 'id' => $oneperson->id], ['class' => 'btn btn-primary'])?></span>
      <span><?= Html::a('Update', ['update', 'id' => $oneperson->id], ['class' => 'btn btn-primary'])?></span>
      <span><?= Html::a('Delete',['delete', 'id' => $oneperson->id], ['class' => 'btn btn-primary'])?></span>
    </td>
    </tr>
    <?php  endforeach; ?>
    <?php else: ?>
      <td>Ovo nije u redu</td>
      <?php endif; ?>
  </tbody>
</table>
        </div>
        </div>
    </div>
</div>
        