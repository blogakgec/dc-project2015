<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Students;
use App\Students_info;

class ReportController extends Controller {

	//Report Menu

	function report_menu(){

		return view('Report');
		

	}
//Generate Report

	function generate_report(){
		
		

		 	$fromDate=$_POST['reportFromDate'];
		 	$toDate=$_POST['reportToDate'];
		 	$branch=$_POST['branch'];
		 	
		 	if($branch =='0'){
		 	$entries= Students::latest('entry_time')->where('entry_time', '<=', $toDate)
		 											->where('entry_time', '>=', $fromDate)
		 											->get();
		 	}
		 	else{
		 		
		 		switch ($branch) {
		 			case 1:
		 				$branch="CS";
		 				break;
		 			case 2:
		 				$branch="IT";
		 				break;
		 			case 3:
		 				$branch="EC";
		 				break;
		 			case 4:
		 				$branch="EN";
		 				break;
		 			case 5:
		 				$branch="EI";
		 				break;
		 			case 6:
		 				$branch="CE";
		 				break;
		 			case 7:
		 				$branch="ME";
		 				break;
		 			case 8:
		 				$branch="MCA";
		 				break;
		 			case 9:
		 				$branch="MBA";
		 				break;
		 			
		 			
		 		}

		 		$entries= Students::latest('entry_time')->where('entry_time', '<=', $toDate)
		 											->where('entry_time', '>=', $fromDate)
		 											->get();
		 		}
		 	
		 	return view ('RangeReport',compact('entries', 'branch', 'fromDate', 'toDate'));
		 	

		 

		 
		
	}
	function daily_report_menu(){

		return view ('DailyReport');

	}
	function daily_report(){

		 	$date=$_POST['reportDate'];
		 	
		 	$branch=$_POST['branch'];

		 	if($branch =='0'){
		 	$entries= Students::latest('entry_time')->where('entry_time', '=', $date)
		 											->get();
		 	}
		 	else{
		 		
		 		switch ($branch) {
		 			case 1:
		 				$branch="CS";
		 				break;
		 			case 2:
		 				$branch="IT";
		 				break;
		 			case 3:
		 				$branch="EC";
		 				break;
		 			case 4:
		 				$branch="EN";
		 				break;
		 			case 5:
		 				$branch="EI";
		 				break;
		 			case 6:
		 				$branch="CE";
		 				break;
		 			case 7:
		 				$branch="ME";
		 				break;
		 			case 8:
		 				$branch="MCA";
		 				break;
		 			case 9:
		 				$branch="MBA";
		 				break;
		 			
		 			
		 		}

		 		$entries= Students::latest('entry_time')->where('entry_time', '=', $date)
		 											->get();
		 		}
		 	
		 	return view ('DailyReportGenerated',compact('entries', 'branch','date'));
		 	




	}
	function three_entry(){


			$entries = \DB::table('Counters')->where('temp_counter', '3')->get();

		 	return view ('ThreeEntryReport', compact('entries'));
	}

}
