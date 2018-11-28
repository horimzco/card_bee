<?php
require_once('../../../private/initialize.php');
require_login();
$admin_set = find_all_admins();
?>

<?php $page_title = 'Admins'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="colorlib-main">
	<div class="colorlib-work">
		<div class="colorlib-narrow-content">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
					<span class="heading-meta">Admin</span>
						<h2 class="colorlib-heading">Staff area</h2>
                        <a class="action" href="<?php echo url_for('/staff/admins/new.php'); ?>">Create New Admin</a>
                        
                        <table class="">
                            <tr>
                                <th>ID</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>

                            <?php while($admin = mysqli_fetch_assoc($admin_set)) { ?>
                                <tr>
                                <td><?php echo h($admin['id']); ?></td>
                                <td><?php echo h($admin['first_name']); ?></td>
                                <td><?php echo h($admin['last_name']); ?></td>
                                <td><?php echo h($admin['email']); ?></td>
                                <td><?php echo h($admin['username']); ?></td>
                                <td><a class="action" href="<?php echo url_for('/staff/admins/show.php?id=' . h(u($admin['id']))); ?>">View</a></td>
                                <td><a class="action" href="<?php echo url_for('/staff/admins/edit.php?id=' . h(u($admin['id']))); ?>">Edit</a></td>
                                <td><a class="action" href="<?php echo url_for('/staff/admins/delete.php?id=' . h(u($admin['id']))); ?>">Delete</a></td>
                                </tr>
                        <?php } ?>
                        </table>

                            <?php
                            mysqli_free_result($admin_set);
                            ?>

				</div>
			</div>
		</div>
	</div>
</div>
</div> <!-- close id='olorlib-page' -->


<?php include(SHARED_PATH . '/staff_footer.php'); ?>

