<<<<<<< HEAD
<?php

// Khởi tạo ứng dụng file controllers, views , commons, models
// Điều hướng request

// Commons
require_once './commons/helper.php';
=======
<?php 

// Khởi tạo ứng dụng: rquire file controllers, models, connectdb, commons 
// Điều hướng request

// commons
require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect-db.php';
require_once './commons/model.php';

>>>>>>> 20b56e4ae247e3614db09051cb00f9b811da5cd1
// models
require_file('./models/');

// controllers
require_file('./controllers/');

<<<<<<< HEAD

// Điều hướng
$act = $_GET['act'] ?? '/';

match ($act) {
    '/' => homeShow(),
};
=======
// Điều hướng
$act = $_GET['act'] ?? '/';

match($act) {
    '/' => homeShow(),

    'users' => userIndex(),

    'ajax-user-list' => ajaxUserList(),
    'ajax-user-create' => ajaxUserCreate($_POST),
    'ajax-user-show' => ajaxUserShow($_GET['id']),
    'ajax-user-update' => ajaxUserUpdate($_GET['id'], $_POST),
    'ajax-user-delete' => ajaxUserDelete($_GET['id']),
};

require_once './commons/disconnect-db.php';
>>>>>>> 20b56e4ae247e3614db09051cb00f9b811da5cd1