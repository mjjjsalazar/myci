<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8">

                <?php if (validation_errors()): ?>
                <div class="panel panel-danger">
                    <div class="panel-heading">Message</div>
                    <div class="panel-body">

                    <?php echo validation_errors(); ?>
                    </div>
                    </div>
                <?php endif; ?>
        



                <form class="form-horizontal" role="form" action="<?=base_url().'item/store'?>" method="post">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail3">Name</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail3" placeholder="Name">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputPassword3">Description</label>
                    <input name="description" type="text" class="form-control" id="exampleInputPassword3" placeholder="Description">
                </div>
                <div class="form-group">
                    <div class="input-group">
                    <div class="input-group-addon">PHP</div>
                    <input name="price" type="text" class="form-control" id="exampleInputAmount" placeholder="Price">
                    <div class="input-group-addon">.00</div>
                    </div>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-default">Add Item</button>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>