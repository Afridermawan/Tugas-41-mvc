<div class="Student">
<div class="panel-body">
<center>
		<?= $this->message ?> 
			<div class="panel-heading">
			<table class="table table-striped">
			<?php if (empty($this->index())) :?>
				<tr>
					<td colspan="8">Daftar Student Kosong</td>
				</tr>
			<?php else: ?>
				<tr style="background: #fff; color: #000;">
					<td>No</td>
					<td>Name Student</td>
					<td>Gender</td>
					<td>Phone Number</td>
					<td>Address</td>
					<td>Image</td>
					<td>Option</td>
				</tr>
				<?php $no = 1; ?>
			<?php foreach ($this->index() as $value) : ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $value['name'] ?></td>
					<td><?= $value['gender'] ?></td>
					<td><?="+62". $value['phone_number'] ?></td>
					<td><?= $value['address'] ?></td>
					<td><img src="public/upload/<?=$value['photo']?>" width="100px" height="100px"></td>
					<td align="center" class="tombol">
						<a href="View/edit_collegestudent.php?id=<?=$value['id']?>" class="btn btn-primary btn-default" style="text-decoration: none;color: #fff">
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						</a>
						<a href="View/data_collegestudent.php?id=<?=$value['id']?>" class="btn btn-primary btn-danger" style="text-decoration: none;color: #fff">
							<i class="fa fa-times" aria-hidden="true"></i>
						</a>
					</td>
				</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</table>
	</center>
    </div>
    </div>
    </div>
    </div>
    </div>
   </div>
</div>
    <div class="row">
        <div class="col-lg-12">
            <?php include 'App/View/footer.php' ?>
        </div>
	</div>
</div>

		


