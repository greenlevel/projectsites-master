<?php

namespace App\Controller\Admin;

use App\Entity\Webcategorie;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;

use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;

use App\Form\WeblinkType;

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


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Category Title'),
            BooleanField::new('enabled', 'Front-End Enable'),
            //ArrayField::new('visits','Wizyty')->onlyOnDetail(),
             //AssociationField::new('weblinks')
                   // ->setFormTypeOptions([
                  //      'by_reference' => false,
                 //   ])
                //    ->autocomplete(),
            ColorField::new('color', 'Header Color'),

            TextField::new('ftitle', 'Footer Title')->hideOnIndex(),
            TextField::new('furl', 'Footer Url')->hideOnIndex(),

        

        ];
    }


    public function createEntity(string $entityFqcn)
    {
        $webcategorie = new Webcategorie();
        $webcategorie->setAuthor($this->getUser());

        return $webcategorie;

    }




}
