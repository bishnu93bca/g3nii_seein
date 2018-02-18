<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class HomesController extends AppController{
	public function index(){
		
		$filtervalues    =   TableRegistry::get('filtervalues');
		$packageFilters    =   TableRegistry::get('Packagefilters');
		$packages    =   TableRegistry::get('Packages');

       	$place = $filtervalues->find("all")->select("filtervalues.id","filtervalues.value","packagefilters.package_id")->contain("Packagefilters")->where(["filtervalues.filter_id"=>1]);

       	 $packagefilters = $packageFilters ->find('all');
        foreach ($packagefilters as $key => $value) {
            $filtervalues_id[]=$value['filtervalue_id'];
        }
        $filtervalue_id=array_unique($filtervalues_id);
       	$themes = $packages->find('all',['limit'=>6,'order'=>array('id DESC')]);
       	$moods = $filtervalues->find('all',['limit'=>6])->where(['filter_id'=>3]);
       	$destinations = $filtervalues->find('all')->where(['filter_id'=>2])->andwhere(['id IN'=>$filtervalue_id]);
       	$last_packages = $packages->find('all',['limit'=>3,'order'=>array('id DESC')]);

      	foreach ($place as $value) {
		    $id=$value['id'];
		    foreach($value['packagefilters'] as $finalValues){
		         $package_id[$id] = $finalValues['package_id'];
		    }
		   
		}
		$packages=$packages->find('all',['limit'=>8])->where(['id IN' => $package_id]);
		$search_val=AppController::filter($this->request->data);
		$result_val=json_decode($search_val,true);
		$filter=$result_val['filter'];
		$this->set('filter',$filter);
		$this->set('last_packages',$last_packages);
		$this->set('packages',$packages);
       	$this->set('themes',$themes);
       	$this->set('moods',$moods);
       	$this->set('destinations',$destinations);
	}

	public function search(){
		$this->viewBuilder()->layout('ajax');
		$this->request->is('post');
		
		$search_val=AppController::filter($this->request->data);
		$result_val=json_decode($search_val,true);
		$search=$result_val['search'];
		$this->set('search',$search);

	}


}?>