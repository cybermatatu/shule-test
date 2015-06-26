<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use League\Flysystem\Dropbox\DropboxAdapter;
use League\Flysystem\Filesystem;
use Dropbox\Client;

class test extends Controller
{
    $client = new Client($accessToken, $appSecret);
	$adapter = new DropboxAdapter($client, [$prefix]);

	$filesystem = new Filesystem($adapter);
}
