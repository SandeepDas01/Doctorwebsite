<?php	if ( ! defined('ABSPATH')) exit('No direct script access allowed');
model('commonDb');
model('dataHandling');
//session_start();
$action = (isset($_REQUEST['action'])) ? $_REQUEST['action'] : '' ;
 $header='common/header';
 
switch($action)
{
 
 	 
	case 'main':
        view($header,'master/main');
	break;
	
	case 'about':
	  
		view($header,'master/about');
	break;

     case 'appointment':
		     view($header,'master/appointment');
			 break;


	 case 'blog':
	    view($header,'master/blog');
	 break;
	 case 'BlogDetails':
	    view($header,'master/blog-details');
	 break;
	 
	 case 'doctor-profile':
	 		view($header,'master/doctor-profile');
	break;
	case 'doctors':
	   
        view($header,'master/doctors');
	    break;

       case 'eror':
	   
        view($header,'master/eror');
	   break;

     case 'gallery':
	   
        view($header,'master/gallery');
	break;
      case 'pricing-1':
	   
        view($header,'master/pricing-1');
	break;
    case 'pricing-2':
	   
        view($header,'master/pricing-2');
	break;
    case 'Services':
        view($header,'master/services');
	break;
    case 'service-detail':
	        view($header,'master/serviceDetail');
	break;
    case 'profile':
         view($header,'master/doctor-profile');
	break;
 	case 'contact':
        view($header,'master/contact');
	break;
	
   
   case 'videogallery':
		view($header,'master/videogallery');
	break;
	
		case 'enquiryCheckDB':
			enquiryCheckDB();
			//$_REQUEST['ContactQueryInsertedDone']="done";
			view($header,'master/contact');
		break;
		
		case 'appoinment':
			appoinment();
			
			view($header,'master/main');
		break;
		
		case 'appoinmentDr':
			appoinmentDr();
			$_SESSION['msg']="thanks";
			view($header,'master/main');
		break;
	
	
	default:
 		view($header,'master/main');
	break;


}
?>
