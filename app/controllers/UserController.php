
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

            $password = hash('sha256', $_POST['password']);
            $data = [
                'email' => trim($_POST['email']),
                'password' => $password,
            ];

            $this->adminModel->signUp($data);

            header('location:' . URLROOT . '/PageController/signIn');
        }
    }


    public function signIn()
    {
        if (isset($_POST['submitSignin'])) {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $password = hash('sha256', $_POST['password']);
            $data = [
                'email' => trim($_POST['email']),
                'password' => $password,
            ];

            if ($this->adminModel->signIn($data)) {
                session_start();
                $_SESSION['email'] = $data['email'];
                $this->view('pages/admindashboard');
            };
        }
    }

    public function logout()
    {
      
        session_unset();
        session_destroy();
        header('location:' . URLROOT . '/PageController/index');
    }
}
