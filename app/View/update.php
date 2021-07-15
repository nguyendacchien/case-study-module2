<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            <h3> Update author</h3>
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <?php if (isset($products)) {
                            foreach ($products as $item): ?>
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control"
                                       value="<?php echo $item->name ?>">
                                <?php if (isset($errors['name'])): ?>
                                    <p class="text-danger"><?php echo $errors['name'] ?></p>
                                <?php endif; ?>


                                <label class="form-label">Category:</label>
                                <select name="category" class="form-select">
                                    <option value="2">Sport</option>
                                    <option value="3">Sneaker</option>
                                </select>
                                <?php if (isset($errors['category'])): ?>
                                    <p class="text-danger"><?php echo $errors['category'] ?></p>
                                <?php endif; ?>


                                <label class="form-label">Brand:</label>
                                <select name="brand" class="form-select">
                                    <option value="2">Vans</option>
                                    <option value="3">Nike</option>
                                    <option value="4">Balenciaga</option>
                                    <option value="5">Converse</option>
                                    <option value="6">Puma</option>
                                    <option value="7">Adidas</option>
                                </select>
                                <?php if (isset($errors['brand'])): ?>
                                    <p class="text-danger"><?php echo $errors['brand'] ?></p>
                                <?php endif; ?>


                                <label class="form-label">Size</label>
                                <input type="text" class="form-control" name="size"
                                       value="<?php echo $item->size ?>">
                                <?php if (isset($errors['size'])): ?>
                                    <p class="text-danger"><?php echo $errors['size'] ?></p>
                                <?php endif; ?>


                                <label class="form-label">Price</label>
                                <input type="text" class="form-control" name="price"
                                       value="<?php echo $item->price ?>">
                                <?php if (isset($errors['price'])): ?>
                                    <p class="text-danger"><?php echo $errors['price'] ?></p>
                                <?php endif; ?>

                                <label class="form-label">Avatar</label>
                                <input type="file" class="form-control" name="fileToUpload" value="<?php echo $item->img ?>">
                            <input type="text" class="form-control" value="<?php echo 'uploads/'.$item->img?>" style="display: none">
                                <img width="100px" src="<?php echo 'uploads/'.$item->img?>">
                            <?php endforeach;
                        } ?>

                    </div>

                    <button type="submit" class="btn btn-primary">Lưu</button>
                    <a type="button" href="./index.php?page=list" class="btn btn-secondary">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php //include_once "card.php" ?>
