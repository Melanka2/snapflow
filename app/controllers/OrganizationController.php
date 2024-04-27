<?php
class OrganizationController extends Controller
{
    var $organizationModel;

    public function __construct()
    {
        $this->organizationModel = $this->model('Organization');
    }

    public function getOrganizations()
    {
        $organizations = $this->organizationModel->getOrganizations();

        return $organizations;
    }

    public function getNotAcceptedOrganizations()
    {
        $organizations = $this->organizationModel->getNotAcceptedOrganizations();

        return $organizations;
    }

    public function acceptOrganization()
    {

        if (isset($_POST['submitAccept'])) {
            $data = [
                'id' => $_POST['id'],
            ];
        
            if ($this->organizationModel->acceptOrganization($data)) {
                header('location:' . URLROOT . '/PageController/admintable');
            }
            else{
                die('Something went wrong');
            }
        }
    }
}
