<?php

namespace Monlib\Controllers\User;

use Monlib\Models\ORM;

class ApiKey extends User {
    
    protected ORM $orm;

	public function __construct(string $table = 'api_keys') {
		$this->orm		=	new ORM($table);
	}

}
