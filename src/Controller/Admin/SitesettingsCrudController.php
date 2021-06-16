<?php

namespace App\Controller\Admin;

use App\Entity\Sitesettings;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class SitesettingsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Sitesettings::class;
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


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            TextField::new('subtitle'),
            TextareaField::new('footertitle'),
            ImageField::new('logo')
            ->setBasePath('uploads')
            ->setUploadDir('public/uploads')

        ];

    }



    public function configureActions(Actions $actions): Actions
    {
        return $actions

        ->update(Crud::PAGE_EDIT, Action::SAVE_AND_CONTINUE, function (Action $action) {
            return $action->setIcon(FALSE)->setLabel('Save Changes');
        })

        ->remove(Crud::PAGE_EDIT, Action::SAVE_AND_RETURN)
        ->disable(Action::NEW, Action::DELETE)
        ;
    }



}
