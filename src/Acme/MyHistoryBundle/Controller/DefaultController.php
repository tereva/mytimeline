<?php


namespace Acme\MyHistoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\MyHistoryBundle\Entity\Event;

use Acme\MyHistoryBundle\Entity\myEvent;
use Acme\MyHistoryBundle\Entity\myMoment;
use Acme\MyHistoryBundle\Form\myMomentType;


use Acme\MyHistoryBundle\Entity\myEvent2;
use Acme\MyHistoryBundle\Entity\myMoment2;
use Acme\MyHistoryBundle\Entity\myStart;
use Acme\MyHistoryBundle\Entity\myEnd;

use Acme\MyHistoryBundle\Entity\Eventmono;
use Acme\MyHistoryBundle\Form\EventmonoType; 

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
	
	Public function monoinAction(Request $request)
	{
		$event = new Eventmono();
		$form=$this->createForm(new EventmonoType(), $event);
		if ($request->getMethod() == 'POST') 
		{
			
                        $form->handleRequest($request);
			if ($form->isValid()) 
			{
				// perform some action, such as saving the task to the database	
				
				$in = microtime();
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($event);
				$em->flush();
				return $this->monoshowAction($in);
			}
		}
		return $this->render('AcmeMyHistoryBundle:Default:mono_in.html.twig', array('form' => $form->createView(),));
	}

	Public function multiinAction(Request $request)
	{
		$event = new myEvent();
		$form = $this->createFormBuilder($event)
		->add('mytitle', 'text',array('label'  => 'EVENT TITLE'))
		->add('startdate', new myMomentType())	
		->add('endate', new myMomentType())	
	 	->getForm();
		
		if ($request->getMethod() == 'POST') 
		{
			
                        $form->handleRequest($request);
			if ($form->isValid()) 
			{
				$in = microtime();
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($event);
				$em->flush();
				return new Response('<html><body>Enregistrement ok / chrono : '. $in .'</body></html>');

			}
		}
		return $this->render('AcmeMyHistoryBundle:Default:new2.html.twig', array('form' => $form->createView(),));
	}


	Public function monoshowAction($t=0)
	{
		$event = $this->getDoctrine()
		->getRepository('AcmeMyHistoryBundle:Eventmono')
		->findAll();
		$chrono1 = microtime()-$t;
		
		if (!$event) {
		throw $this->createNotFoundException('No event found for');
		}
echo "<pre>";
print_r($event);
echo "</pre>";
exit;

               //return new Response(print_r($event));
		//return $this->render('AcmeMyHistoryBundle:Default:allmono.html.twig',
		//array('event' => $event, 'chrono' => $chrono1, 'chrono0' => $t));
	}

	Public function testAction()
	{

		// 2 Tables, 2 Cles par ligne dans la table MyEvent
		// Insertion
		$instant1 = new myMoment();
		$instant1->setMyYear(1789);
		$instant1->setMyPlace("Poudlard");
	

		$instant2 = new myMoment();
		$instant2->setMyYear(2025);
		$instant2->setMyPlace("Taapuna");
		

		$event = new myEvent();
		$event->setMytitle("Ce soir il fait moite");
		$event->setStartdate($instant1);
		$event->setEndate($instant2);
		

		$em = $this->getDoctrine()->getManager();
       		$em->persist($instant1);
       		$em->persist($instant2);
		$em->persist($event);
        	$em->flush();


		echo "<html>\n<body>\n";

		// Consultation un ID
		echo "<br><b>UN ID :</b><br><br>\n";
                $id=7;
		
		$event = $this->getDoctrine()
		->getRepository('AcmeMyHistoryBundle:myEvent')
		->find($id);

		$title = $event->getMytitle();
		$start = $event->getStartdate()->getMyYear(); // lazy load
		$end = $event->getEndate()->getMyYear();// lazy load
		//return new Response('<html><body>' .$id. ' '.$title.' '.$start.' '.$end.'</body></html>');
		echo $id. ' '.$title.' '.$start.' '.$end."<br>\n";

		

		// Consultation de tout avec 2 jointures globales => 2 requetes
		$in=microtime();
		$em = $this->getDoctrine()->getManager();

		$query = $em->createQuery('SELECT e, d,f FROM AcmeMyHistoryBundle:myEvent e JOIN e.startdate d JOIN e.endate f');
		$deb = $query->getResult(); 

	
		echo "<br><br><b>2 JOINTURES :</b><br><br>\n";
	
		foreach ($deb as $item)
		{
			$id_event = $item->getId();
			$title = $item->getMytitle();
			$start = $item->getStartdate()->getMyYear();
			$end= $item->getEndate()->getMyYear();
			echo $id. ' '.$title.' '.$start.' '.$end."<br>\n";
		};
		
				
		echo microtime()-$in;

		// Consultation de tout => 1 requete globale event + 2 requetes/ID event
		$in=microtime();
		$event = $this->getDoctrine()
		->getRepository('AcmeMyHistoryBundle:myEvent')
		->findAll();

		echo "<br><br><b>1 + 2 / ID :</b><br>\n";
		foreach ($event as $item)
		{
			$id_event = $item->getId();
			$title = $item->getMytitle();
			$start = $item->getStartdate()->getMyYear(); // lazy load
			$end = $item->getEndate()->getMyYear();// lazy load

			echo $id. ' '.$title.' '.$start.' '.$end."<br>\n";
		};
echo microtime()-$in;
		echo '</body></html>';
		exit;


	}

	public function addAction(Request $request)
	{
		$event = new Event();	
	
		$form = $this->createFormBuilder($event)
		->add('title', 'text',array('label'  => 'EVENT TITLE'))
		->add('link', 'url', array('label'  => 'URL'))
		->add('start', 'date', array('label'  => 'Date Debut', 'widget' => 'text'))
		->add('end', 'date', array('label'  => 'Date Debut', 'widget' => 'text'))
		/*->add('start', 'date', array('widget' => 'choice','input' => 'timestamp','format' => 'd/M/y',
				'empty_value' => array('year' => 'Année', 'month' => 'Mois', 'day' => 'Jour'),
				'pattern' => "{{ day }}/{{ month }}/{{ year }}",
				'data_timezone' => "Europe/Paris",
				'user_timezone' => "Europe/Paris"))*/
		/*->add('start', 'date', array('label'  => 'START',
									'widget' => 'single_text', 
									'input' => 'datetime', 
									'format' => 'dd/MM/yyyy', 
									'attr' => array('id' => 'datepicker'))
		->add('end', 'date', array('label'  => 'END',
									'widget' => 'single_text', 
									'input' => 'datetime', 
									'format' => 'dd/MM/yyyy', 
									'attr' => array('id' => 'datepicker'))*/
       
		->add('description', 'textarea', array('label'  => 'DESCRIPTION'))			 
		->add('durationEvent', 'checkbox', array('required'  => false, 'label'  => 'IS-IT A DURATION EVENT ? ' ))	
		->add('address', 'text', array('label'  => 'ADDRESS'))
		->add('lat', 'text', array('label'  => 'LATITUDE'))
		->add('lng', 'text', array('label'  => 'LONGITUDE'))
		->getForm();
		
  		

		if ($request->getMethod() == 'POST') 
		{
			
                        $form->handleRequest($request);
			if ($form->isValid()) 
			{
				// perform some action, such as saving the task to the database
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($event);
				$em->flush();
				//return new Response('<html><body>Enregistrement ok, nº ' . $event->getId(). '</body></html>');
				//return $this->redirect($this->generateUrl('event_timeline'));
				return $this->showallAction();
			}
		}
		return $this->render('AcmeMyHistoryBundle:Default:new2.html.twig', array(
		'form' => $form->createView(),));
	} 
	

	
	public function showAction($id)
	{
		$event = $this->getDoctrine()
		->getRepository('AcmeMyHistory:Event')
		->find($id);
		if (!$event) {
		throw $this->createNotFoundException('No event found for id '.$id);
		}
		return $this->render('AcmeMyHistory:Default:all.html.twig',
		array('event' => $event));
	}
	
	public function showallAction()
	{
		$event = $this->getDoctrine()
		->getRepository('AcmeMyHistoryBundle:Event')
		->findAll();
		
		
		if (!$event) {
		throw $this->createNotFoundException('No event found for');
		}
		return $this->render('AcmeMyHistoryBundle:Default:all.html.twig',
		array('event' => $event));
	}
	
	public function timelineAction()
	{
		 $event = $this->getDoctrine()
		->getRepository('AcmeMyHistoryBundle:Event')
		->findAll();
		
		
		if (!$event) {
		throw $this->createNotFoundException('No event found for');
		}
		
		// ecriture du fichier local_data.js
		$fp = fopen ("local_data.js", "w+");		
		fputs($fp, "var timeline_data = { \n 'dateTimeFormat': 'iso8601', \n 'wikiURL': \"http://simile.mit.edu/shelf/\", \n 'wikiSection': \"Simile Cubism Timeline\", \n 'events' : \n[");
		foreach ($event as $item)
		{
			$start = $item->getStart()->format('c');
			$end = $item->getEnd()->format('c');
			$title = str_replace("'","&#039;",$item->getTitle());
			$desc = str_replace("'","&#039;",$item->getDescription());
			$link = $item->getLink();
			$duration = "false";
			if ($item->getDurationEvent()) $duration = "true";
			
			
			fputs($fp,"\n\n\t{'start' : '" . $start . "',");
			fputs($fp,"\n\t'end' : '" . $end . "',");
			fputs($fp,"\n\t'title' : '" . $title . "',");
			fputs($fp,"\n\t'description' : '" . $desc . "',");
			fputs($fp,"\n\t'link' : '" . $link . "',");			
			fputs($fp,"\n\t'durationEvent' : " . $duration . "},");

		};
		
		fputs($fp, "\n]\n}" );
		fclose($fp);

		
		// chargement de la page widget (local_example.html)
		
		//return $this->render('AcmeMyHistoryBundle:Default:local_data.js.twig',
		//array('event' => $event));
		
		return $this->redirect("http://localhost/Symfony/web/local_example.html");
		
	}
	
	
	
}
