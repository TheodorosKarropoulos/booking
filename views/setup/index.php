<script src="<?php echo BASE_URL . JS_PATH; ?>delete.js"></script>
<div class="container ws-container">
    <a href="<?php echo BASE_URL . SETUP_URL; ?>add" class="btn btn-success">Setup</a>
    <hr/>
    <div class="table-responsive">
        <table class="table table-hover ws-table">
            <thead>
            <tr>
                <th>Setup Name</th>
                <th>From Hour</th>
                <th>To Hour</th>
                <th>Actions</th>
            </tr>
            </thead>

            <?php

            foreach($this->setupList as $key => $value)
            {
                echo '<tr>';
                echo '<td>' . $value['setup_name'] . '</td>';
                echo '<td>' . $value['from_hour'] . '</td>';
                echo '<td>' . $value['to_hour'] . '</td>';
                echo '<td><a class="btn btn-info ws-table-btn" href="' . BASE_URL . SETUP_URL .'edit/' . $value['setup_id'] .
                    '">Edit</a>
                <a id="delete" class="btn btn-danger ws-table-btn" href="' . BASE_URL . SETUP_URL . 'delete/ ' . $value['setup_id'] .
                    '">Delete</a>';
                echo '</tr>';
            }
            ?>

        </table>
    </div>

</div><!-- container -->