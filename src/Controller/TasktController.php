<?php

namespace App\Controller;
use App\Entity\Task;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class TasktController extends AbstractController
{
    #[Route('/taskt', name: 'app_taskt')]
    public function index(): Response
    {
        return $this->render('taskt/index.html.twig', [
            'controller_name' => 'TasktController',
        ]);
    }

    #[Route('/taskt', name: 'create_task')]
    public function createTask(EntityManagerInterface $entityManager): Response
    {
        $task = new Task();
        $task->setName('Task 1');
        $task->setDetails('abc');
        $task->setStatus(1);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($task);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new Task with id '.$task->getId());
    }
}
