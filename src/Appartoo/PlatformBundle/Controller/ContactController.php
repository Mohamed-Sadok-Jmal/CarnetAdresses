<?php

// src/Appartoo/PlatformBundle/Controller/ContactController.php

namespace Appartoo\PlatformBundle\Controller;

use Appartoo\PlatformBundle\Entity\Contact;
use Appartoo\PlatformBundle\Form\ContactType;
use Appartoo\PlatformBundle\Form\ContactEditType;
use Appartoo\PlatformBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends Controller
{
  public function indexAction($page)
  {
  	if(!$this->getUser()){
  	}

    if ($page < 1) {
      throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
    }

    // Ici je fixe le nombre d'annonces par page à 3
    // Mais bien sûr il faudrait utiliser un paramètre, et y accéder via $this->container->getParameter('nb_per_page')
    $nbPerPage = 3;

    $listContacts = $this->getDoctrine()
    	->getManager()
    	->getRepository('AppartooPlatformBundle:Contact')
    	->getContacts($page, $nbPerPage, $this->getUser()->getId());

    // On calcule le nombre total de pages grâce au count($listAdverts) qui retourne le nombre total d'annonces
    $nbPages = ceil(count($listContacts) / $nbPerPage);

    // Si la page n'existe pas, on retourne une 404
    if ($page > $nbPages) {
      throw $this->createNotFoundException("La page ".$page." n'existe pas.");
    }

    // On donne toutes les informations nécessaires à la vue
    return $this->render('AppartooPlatformBundle:Contact:index.html.twig', array(
      'listContacts' => $listContacts,
      'nbPages'     => $nbPages,
      'page'        => $page,
    ));
  }

  public function viewAction($id)
  {
    $em = $this->getDoctrine()->getManager();

    // Pour récupérer une seule annonce, on utilise la méthode find($id)
    $contact = $em->getRepository('AppartooPlatformBundle:Contact')->find($id);

    if (null === $contact) {
      throw new NotFoundHttpException("Le contact d'id ".$id." n'existe pas.");
    }

    if ($this->getUser()->getId() != $contact->getUser()->getId()) {
    	return $this->forward('AppartooPlatformBundle:Contact:index', array(
        'page'  => 1,
    ));
    }

    return $this->render('AppartooPlatformBundle:Contact:view.html.twig', array('contact' => $contact));
  }

  public function addAction(Request $request)
  {

  	//$request = $this->getRequest();
    $contact = new Contact();
    $em = $this->getDoctrine()->getManager();
    $user = $em->getRepository('AppartooPlatformBundle:User')->find(1);
    $contact->setUser($user);

    // On crée le FormBuilder grâce au service form factory
    $form = $this->get('form.factory')->create(ContactType::class, $contact);

    // Si la requête est en POST
    if ($request->isMethod('POST')) {
      // On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
      $form->handleRequest($request);

      // On vérifie que les valeurs entrées sont correctes
      // (Nous verrons la validation des objets en détail dans le prochain chapitre)
      if ($form->isValid()) {
        // On enregistre notre objet $advert dans la base de données, par exemple
        $em = $this->getDoctrine()->getManager();
        $em->persist($contact);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Contact bien enregistré.');

        // On redirige vers la page de visualisation de l'annonce nouvellement créée
        return $this->redirectToRoute('appartoo_platform_view', array('id' => $contact->getId()));
      }
    }

    // À ce stade, le formulaire n'est pas valide car :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire contient des valeurs invalides, donc on l'affiche de nouveau
    return $this->render('AppartooPlatformBundle:Contact:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }

  public function editAction($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    $contact = $em->getRepository('AppartooPlatformBundle:Contact')->find($id);

    if (null === $contact) {
      throw new NotFoundHttpException("Le contact d'id ".$id." n'existe pas.");
    }

    $form = $this->get('form.factory')->create(ContactEditType::class, $contact);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      // Inutile de persister ici, Doctrine connait déjà notre annonce
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Contact bien modifié.');

      return $this->redirectToRoute('appartoo_platform_view', array('id' => $contact->getId()));
    }

    return $this->render('AppartooPlatformBundle:Contact:edit.html.twig', array(
      'contact' => $contact,
      'form'   => $form->createView(),
    ));
  }

  public function deleteAction(Request $request, $id)
  {
    $em = $this->getDoctrine()->getManager();

    $contact = $em->getRepository('AppartooPlatformBundle:Contact')->find($id);

    if (null === $contact) {
      throw new NotFoundHttpException("Le contact d'id ".$id." n'existe pas.");
    }

    // On crée un formulaire vide, qui ne contiendra que le champ CSRF
    // Cela permet de protéger la suppression d'annonce contre cette faille
    $form = $this->get('form.factory')->create();

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
    	$em->remove($contact->getImage());
      $em->remove($contact);
      $em->flush();

      $request->getSession()->getFlashBag()->add('info', "Le contact a bien été supprimé.");

      return $this->redirectToRoute('appartoo_platform_home');
    }
    
    return $this->render('AppartooPlatformBundle:Contact:delete.html.twig', array(
      'contact' => $contact,
      'form'   => $form->createView(),
    ));
  }

  public function menuAction($limit)
  {
    $em = $this->getDoctrine()->getManager();

    $listContacts = $em->getRepository('AppartooPlatformBundle:Contact')->findBy(
      array('user' => $this->getUser()->getId()),                 // Pas de critère
      array('id' => 'desc'), // On trie par id décroissante
      $limit,                  // On sélectionne $limit annonces
      0                        // À partir du premier
    );

    return $this->render('AppartooPlatformBundle:Contact:menu.html.twig', array(
      'listContacts' => $listContacts
    ));
  }
}