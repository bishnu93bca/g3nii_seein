<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use App\Controller\AppController;
use Cake\Network\Session\DatabaseSession;
class PackagesController extends AppController{




    public function search(){
       
        $this->viewBuilder()->layout('other');
        $filtervalues =TableRegistry::get('filtervalues');

        $this->request->is('post');
        $packages = $this->Packages->find('all');
        $filtervalues = $filtervalues ->find('all');
        
        $search_val=AppController::filter($this->request->data);
        $result_val=json_decode($search_val,true);
        $filter=$result_val['filter'];
        $search=$result_val['search'];
        $this->set('search',$search);
        $this->set('filter',$filter);
        // $this->set('filtervalues',$filtervalues);
        $this->set('filtervalues',$this->paginate($filtervalues, ['limit'=>5]));
        $this->set(compact('packages'));
        $this->set('_serialize', ['packages']);
    }
    
      
    public function view($id=null){
        $this->viewBuilder()->layout('other');
        $package = $this->Packages->get($id);
        $search_val=AppController::filter($this->request->data);
        $result_val=json_decode($search_val,true);
        $filter=$result_val['filter'];
        $this->set('filter',$filter);
        $this->set(compact('package'));

    }
    public function filtervalue($id=null){
        $this->viewBuilder()->layout('menu');

        $filters =TableRegistry::get('filters');
        $filtervalues =TableRegistry::get('filtervalues');
        $packagefiltersTable =TableRegistry::get('packagefilters');

        $packages = $this->Packages->find('all');
        $filters = $filters ->find('all');
        $packagefilters = $packagefiltersTable ->find('all');
        foreach ($packagefilters as $key => $value) {
            $filtervalues_id[]=$value['filtervalue_id'];
        }
        $filtervalue_id=array_unique($filtervalues_id);
      
        $filtervalues = $filtervalues->find('all')->where(['filter_id'=>$id])->andwhere(['id IN'=>$filtervalue_id]);

        $this->set('filters',$filters);
        $this->set('packagefilters',$packagefilters);
        $this->set('filtervalues',$filtervalues);
        $this->set(compact('packages'));
        $this->set('_serialize', ['packages']);

    }
    

     public function months($id=null, $page=null){
        $this->viewBuilder()->layout('other'); 
       $filtervalues =TableRegistry::get('filtervalues');

       $filtervalue = $filtervalues->get($id, [
            'contain' => ['Packagefilters']
        ]);
       foreach ($filtervalue->packagefilters as $key => $value) {
            $package_id[]=$value['package_id'];
       }
       if(empty(!$package_id)){
         $packages = $this->Packages->find('all')->where(['id IN' => $package_id]);
        }
       $search_val=AppController::filter($this->request->data);
        $result_val=json_decode($search_val,true);
        $filter=$result_val['filter'];
        $this->set('filter',$filter);
        $this->set('packages',$this->paginate($packages, ['limit'=>5]));
        //$this->set(compact('packages'));
        $this->set('_serialize', ['packages']);

    }

     
}
?>