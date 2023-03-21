
<h2>Insert Window</h2>

<form action="" method="post"  enctype="multipart/form-data"  >
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input type="text" name="name" value="" class="form-control" id="exampleInputPassword1" >
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input  type="email" name="email" value="" class="form-control" id="exampleInputPassword1" >
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input  type="text" name="password" value="" class="form-control" id="exampleInputPassword1" >
        </div>
        <input type="hidden" name="<?=Yii::$app->request->csrfParam?>" value="<?=Yii::$app->request->getCsrfToken()?>"/>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Insert</button>
    </div>
</form>
