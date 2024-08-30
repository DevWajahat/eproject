<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header('Location: login.php');
    exit();
}


include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'navbar.php'; ?>
<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Movies</h6>
                        
                    </div>
                    <a href="addtheatre.php" class="btn btn-outline-primary w-100 m-2" type="button">Add theatre</a>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Id</th>
                                    <th scope="col">name</th>
                                    <th scope="col">location</th>
                                    <th scope="col">created_at</th>
                                    <th scope="col">operations</th>
                                </tr>

                            </thead>
                            <?php
                            include 'conn.php';
                            $query=mysqli_query($conn,"SELECT * FROM `theaters`");
                           while( $fetch=mysqli_fetch_array($query)){;

                            ?>
                          <tbody>         
    <tr>
        <td><?php echo $fetch['id'] ?></td>
        <td><?php echo $fetch['name'] ?></td>
        <td ><?php echo $fetch['location'] ?></td>
        <td><?php echo $fetch['created_at'] ?> </td>
        <td><a href="delete.php?id=<?php echo $fetch['id'] ?>" class="btn btn-primary">Delete</a></td>
    </tr>
</tbody>

                            <?php
                           }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
<?php include 'footer.php';?>
        


           