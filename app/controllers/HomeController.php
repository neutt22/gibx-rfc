<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getCars()
	{
		return Cars::distinct('brand')->get()->toJson();
	}

	public function getYears()
	{
		$brand = e(Input::get('brand'));

		return Cars::where('brand', '=', $brand)->get()->toJson();
	}

	public function getModels()
	{
		$brand = e(Input::get('brand'));
		$year = e(Input::get('year'));
		return Cars::where('brand', '=', $brand)->where('year', '=', $year)->get()->toJson();
	}

	public function getCompare(){
		$brand = e(Input::get('car'));
		$year = e(Input::get('year'));
		$model = e(Input::get('model'));
		$location = e(Input::get('location'));
		$usage = e(Input::get('usage'));
		$coverage = e(Input::get('coverage'));

		$car_id = Cars::where('brand', '=', $brand)->where('year', '=', $year)->where('model', '=', $model)->get()->first()->id;

		$insurers =  Cars::find($car_id)->insurers;

		$message = "Sending an email with the following:<br/><br/>";
		$message .= "Your Car: $brand<br/>";
		$message .= "Year: $year<br/>";
		$message .= "Model: $model<br/>";
		$message .= "Location: $location<br/>";
		$message .= "Usage: $usage<br/>";
		$message .= "coverage: $coverage<br/><br/>";

		$message .= "<table border=1>";
		$message .= "<tr>";
		$message .= "<th>";
		$message .= "Original FMV";
		$message .= "</th>";
		$message .= "<th>";
		$message .= "Computed Qoutes";
		$message .= "</th>";
		$message .= "<th>";
		$message .= "Insurer";
		$message .= "</th>";
		$message .= "<th>";
		$message .= "";
		$message .= "</th>";
		$message .= "</tr>";

		$additional = 0;

		if($location === "luzon"){
			$additional += 0.01;
		}

		if($usage === "private"){
			$additional += 0.02;
		}

		if($coverage === "yes"){
			$additional += 0.024;
		}

		foreach ($insurers as $insurer) {
			$message .= "<tr>";
			$message .= "<td>";
			$message .= number_format($insurer->fmv * 1000000, 2);
			$message .= "</td>";
			$message .= "<td>";

			$fmv_computed = $insurer->fmv + $additional;

			$message .= number_format($fmv_computed * 1000000, 2);
			$message .= "</td>";
			$message .= "<td>";
			$message .= $insurer->insurer;
			$message .= "</td>";
			$message .= "<td>";
			$message .= "<button>buy now</button>";
			$message .= "</td>";
			$message .= "</tr>";
		}

		$message .= "</table>";

		return $message;
	}

}
