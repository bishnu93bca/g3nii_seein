<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class FiltervaluesController extends AppController{

	
    public function ajax($id=null){
        $this->viewBuilder()->layout('ajax');
        $packages    =   TableRegistry::get('Packages');
        
        $filtervalues = $this->Filtervalues->get($id, [
            'contain' => ['Filters','Packagefilters']
        ]);
            foreach($filtervalues->packagefilters as $key => $value) {
                $package_id[] = $value->package_id;
            }
        $packages=$packages->find('all')->where(['id IN' => $package_id]);
        // foreach ($packages as $key => $value) {
        //     $arr[] = $value;
        // }

        $this->set('val', $packages);
        $this->set('_serialize', ['val']);

    }
	
}