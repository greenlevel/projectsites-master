<?php

namespace App\Controller\Admin;

use App\Entity\Webcategorie;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class WebcategorieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Webcategorie::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
