<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'app_admin_dashboard')]
    


    
        public function index(UserRepository $repUser): Response

    {

$arrayUser = array();
$arrayUser = array_merge($repUser->findByUsersRole(User::ROLE_STUDY),
                         $repUser->findByUsersRole(User::ROLE_TEACH));

        return $this->render('admin_dashboard/index.html.twig', [
            'listUsers' => $arrayUser,
        ]);
    }
}
