
<?php
class UserController extends Controller
{

    var $adminModel;

    public function __construct()
    {
        $this->adminModel = $this->model('Admin');
    }

    public function signUp()
    {

        if (isset($_POST['submitSignup'])) {

            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            var_dump($_POST);
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
            ];

            $this->adminModel->signUp($data);
        }
    }
}
