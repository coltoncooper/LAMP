<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sessions extends CI_Controller {

	public function new_session()
	{
		echo "New Session";
	}

	public function destroy()
	{
		echo "Destroy";
	}
}