<script src="<?php echo BASE_URL . JS_PATH; ?>delete.js"></script>
<div class="container ws-container">
    <a href="<?php echo BASE_URL . USER_URL; ?>add" class="btn btn-success">Add User</a>
    <hr/>
    <div class="table-responsive">
        <table class="table table-hover ws-table">
            <thead>
            <tr>
                <th>User Name</th>
                <th>User Position</th>
                <th>User Role</th>
                <th>Login Name</th>
                <th>Actions</th>
            </tr>
            </thead>

            <?php

            foreach($this->userList as $key => $value)
            {
                echo '<tr>';
                echo '<td>' . $value['username'] . '</td>';
                echo '<td>' . $value['user_position'] . '</td>';
                echo '<td>' . $value['role'] . '</td>';
                echo '<td>' . $value['login'] . '</td>';
                echo '<td><a class="btn btn-info ws-table-btn" href="' . BASE_URL . USER_URL .'edit/' . $value['id'] .
                    '">Edit</a>
                <a id="delete" class="btn btn-danger ws-table-btn" href="' . BASE_URL . USER_URL . 'delete/ ' . $value['id'] .
                    '">Delete</a>';
                echo '</tr>';
            }
            ?>

        </table>
    </div>

</div><!-- container -->