<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
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



public function configureActions(Actions $actions): Actions
{
        $actions->update(Crud::PAGE_INDEX, Action::DELETE, function (Action $action){
            $action->displayIf(function(User $entity) {
                $lastId = $this->getDoctrine()->getManager()->getRepository(User::class)->findOneBy([], ['id' => 'DESC'])->getId();
                $user = $this->getUser()->getId();
                $id = $entity->getId();
                return $id !== $user;
            });
            return $action;
        });

        return $actions;
}



}
