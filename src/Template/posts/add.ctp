<ul class="breadcrumb">
  <li><?php echo $this->Html->link('Home', ['action'=>'index']); ?> </li>
  <li class="active">Add Post</li>
</ul>

<form class="form-horizontal" method="post">
  <fieldset>
    <legend>Add New Post</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Title</label>
      <div class="col-lg-10">
        <?= $this->Form->input('title',['class'=>'form-control','Placeholder'=>'Add Title','label'=>false]); ?>
      </div>
    </div>
  
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Description</label>
      <div class="col-lg-10">
        <?= $this->Form->textarea('desciption',['class'=>'form-control','Placeholder'=>'Add Title','label'=>false]); ?>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
   
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>