<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Webcategorie;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            // the name visible to end users
            ->setTitle('ACME Corp.')
            // you can include HTML contents too (e.g. to link to an image)
            ->setTitle('ACME <span class="text-small">Corp.</span>')

      
            ->renderSidebarMinimized(false)

          ;

    }

    public function configureMenuItems(): iterable
    {
         return [

            MenuItem::linktoDashboard('Dashboard', 'fa fa-home'),
            
            MenuItem::section('Links'),
            MenuItem::linkToCrud('Links Categories', 'fa fa-tags', Webcategorie::class),





                ];
    }
}
