<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Webcategorie;
use App\Entity\Sitesettings;
use Doctrine\ORM\EntityManagerInterface;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }



    /** @var EntityManagerInterface */
    public $em;

    public function __construct(EntityManagerInterface $em) {
        $this->em = $em;
    }

    public function setting()
    {
        $setting = $this->em->getRepository(Sitesettings::class)
            ->findAll()[1];

        return $setting;
    }





    public function configureDashboard(): Dashboard
    {


//$setting = $this->em->getRepository(Sitesettings::class)
           // ->find('2');

            //$logo = $setting->title;

        return Dashboard::new()




            // the name visible to end users
            ->setTitle('ACME Corp.')
            // you can include HTML contents too (e.g. to link to an image)
            ->setTitle('$logo <span class="text-small">Corp.</span>')

      
            ->renderSidebarMinimized(false)

          ;

    }

    public function configureMenuItems(): iterable
    {
         return [

            MenuItem::linktoDashboard('Dashboard', 'fa fa-home'),
            
            MenuItem::section('Links', 'fa fa-list'),
            MenuItem::linkToCrud('All Site Categories', 'fa fa-circle', Webcategorie::class),
            MenuItem::linkToCrud('Add Category', 'fa fa-circle', Webcategorie::class)
            ->setAction('new'),

            MenuItem::section('Settings', 'fa fa-cogs'),
            MenuItem::linkToCrud('Site Settings', 'fa fa-circle', Sitesettings::class)
            ->setAction('edit')
            ->setEntityId(2),

                ];

    }
}
