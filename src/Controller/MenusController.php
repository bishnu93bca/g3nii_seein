<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use App\Controller\AppController;

class MenusController extends AppController{
	public function index(){
		$this->viewBuilder()->layout('menu');
		$search_val=AppController::filter($this->request->data);
		$result_val=json_decode($search_val,true);
		$filter=$result_val['filter'];
		$this->set('filter',$filter);
	}
	public function search(){
		 $this->viewBuilder()->layout('ajax');
		$Filter    =   TableRegistry::get('packages');
       // $query = $Filter->find('all')
       //  ->where(['package_name LIKE' => '%' . $this->request->query('q') . '%'])
       //  ->orWhere(['content LIKE' => '%' . $this->request->query('q') . '%']);
      
        $this->set('filter',$Filter);
	
	}
	public function filter($id=null){
		$this->viewBuilder()->layout('defaultview');
		$filtersTable =TableRegistry::get('filters');
		$filters = $filtersTable->get($id, [
            'contain' => ['Filtervalues']
        ]);
        $this->set('filters', $filters);
        $this->set('_serialize', ['filters']);


	}
	public function package($id=null){
		$this->viewBuilder()->layout('defaultview');
		$filtervaluesTable =TableRegistry::get('filtervalues');
		$packagesTable =TableRegistry::get('packages');
		$filtervalues = $filtervaluesTable->get($id, [
            'contain' => ['Filters','Packagefilters']
        ]);
		foreach ($filtervalues->packagefilters as $packagefilter){
			$package_id[]=$packagefilter->package_id;
		}
		if(!empty($package_id)){
		$packages=$this->paginate($packagesTable->find('all')->where(['id IN'=>$package_id]));
		$this->set('packages',$packages);
		}
        $this->set('filtervalues', $filtervalues);
        $this->set('_serialize', ['filtervalues']);

	}


}?>