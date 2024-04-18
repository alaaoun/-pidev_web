<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use App\Form\UserType;

use App\Entity\Roles;

use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
#[Route('/security')]

class UserController extends AbstractController
{
   
    private UserPasswordHasherInterface $passwordHasher;
    private $entityManager;
   
    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher)
    {
        $this->entityManager = $entityManager;
        $this->passwordHasher = $passwordHasher;
    }

    #[Route("/login", name: "app_login", methods: ["GET", "POST"])]
    public function login(Request $request): Response
    {
     
        $mail = $request->request->get('mail');
        $mdp = $request->request->get('mdp');

        $userRepository = $this->entityManager->getRepository(User::class);
        $user = $userRepository->findOneBy(['mail' => $mail]);

        if ($user && $this->passwordHasher->isPasswordValid($user, $mdp)) {
            $role = $user->getRole()->getRoleName();
            

            if ($role === 'admin') {
                // Redirection vers la route admin
                return $this->render('security/register.html.twig');

            } else {
                
                // Redirection vers la route utilisateur
                return $this->render('security/register.html.twig');
                

            }
        } else {
            $this->addFlash('error', 'Invalid credentials. Please try again.');
            return $this->render('security/login.html.twig');

        }
    } 
      


 
    #[Route("/register", name: "app_register", methods: ["GET", "POST"])]
    public function register(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Obtenez le rôle "utilisateur" à partir de la base de données
            $roleUtilisateur = $entityManager->getRepository(Roles::class)->findOneBy(['roleName' => 'utilisateur']);

            if ($roleUtilisateur) {
                // Assurez-vous que le rôle "utilisateur" est trouvé
                // Associez le rôle "utilisateur" à l'utilisateur
                $user->setRole($roleUtilisateur);

                // Persistez et enregistrez l'utilisateur dans la base de données
                $entityManager->persist($user);
                $entityManager->flush();

                // Redirigez l'utilisateur vers une autre page après l'enregistrement
                return $this->redirectToRoute('app_home');
            } else {
                // Gérez le cas où le rôle "utilisateur" n'est pas trouvé dans la base de données
                // Vous pouvez afficher un message d'erreur ou prendre une autre action appropriée
                // Dans cet exemple, nous redirigeons l'utilisateur vers une autre page avec un message d'erreur
                $this->addFlash('error', 'Le rôle "utilisateur" n\'a pas été trouvé.');
                return $this->redirectToRoute('app_home'); // Redirigez où vous voulez
            }
        }

        // Si le formulaire n'est pas soumis ou n'est pas valide, affichez le formulaire d'enregistrement
        return $this->render('security/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }


}

