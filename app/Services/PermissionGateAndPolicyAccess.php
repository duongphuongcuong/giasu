<?php 
namespace App\Services;
use Illuminate\Support\Facades\Gate;
class PermissionGateAndPolicyAccess{
	public function setGateAndPolicyAccess(){
		$this->defineGateSubject();
		
	}
	public function defineGateSubject(){
		Gate::define('subject-list', 'App\Policies\SubjectPolice@view');
        Gate::define('subject-add', 'App\Policies\SubjectPolice@create');
        Gate::define('subject-edit', 'App\Policies\SubjectPolice@update');
        Gate::define('subject-delete', 'App\Policies\SubjectPolice@delete');
	}

	
}