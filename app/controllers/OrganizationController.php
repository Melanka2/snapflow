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

    public function acceptOrganization ()
    {
        
    }

    
}