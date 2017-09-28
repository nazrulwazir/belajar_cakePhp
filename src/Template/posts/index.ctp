<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
</div>

<?php echo $this->Html->link('Add Post', ['action'=>'add'],['class'=>'btn btn-success']); ?> 
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>No.</th>
      <th>Title</th>
      <th>Description</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($posts as $key => $value): ?>
    <tr>
      <td><?= $key+1 ?></td>
      <td><?=$value->title ?></td>
      <td><?=$value->description?></td>
      <td width="110"><div class="btn-group btn-group-justified"><a href="#" class="btn btn-primary">Update</a></div></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table> 