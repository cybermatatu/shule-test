<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Storage;
use Flysystem;

use GAMP;

//use League\Flysystem\Filesystem;


class test extends Controller
{
	function __construct() {
		
	}

	public function index() {

	}

	public function s3() {

		$file = 'desert.jpg';
		$file2 = 'demo/desert.jpg';

		if(Storage::disk('s3')->exists($file2)) {
			echo 'File Exists';
			Flysystem::put('hi.txt', 'This is a test');
			//echo Storage::size($file);

		} else {
			echo 'Doesnt exist';
			Storage::copy($file, $file2);
		}
	}

	public function analytics() {

		$gamp = GAMP::setClientId( '123456ABCD' );
		$gamp->setProtocolVersion('1');
		$gamp->setDocumentPath( '/' );
		$gamp->sendPageview();
	}
}
