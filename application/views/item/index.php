

        

    <div class="container-fluid">
        <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2>Welcome to CI</h2>
                <?= $message ?>

                <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>ACTION</th>
                </tr>
                    <?php foreach($items as $item): ?>
                    <tr>
                        
                    <td><?=$item->id ?></td>
                    <td><?=$item->name ?></td>
                    <td><?=$item->price ?></td>
                    <td>
                    <a href="#" class="btn btn-primary btn-md" role="button">
                        <span class="glyphicon glyphicon-search"></span> VIEW</a>
                    <a href="#" class="btn btn-warning btn-md" role="button"> 
                        <span class="glyphicon glyphicon-pencil"></span> VIEW</a>
                    <a href="<?=base_url().'item/delete/'.$item->id?>" class="btn btn-danger btn-md" role="button"> 
                        <span class="glyphicon glyphicon-trash"></span> DELETE</a>
                    </td>

                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-8">
                    <a href="<?=base_url().'item/add'?>" class="btn btn-success btn-md" role="button"> 
                        <span class="glyphicon glyphicon-plus"></span> NEW ITEM</a>
                
                </div>
        </div>

    </div>
