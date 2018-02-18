<?php

namespace App\Controller;


use App\Controller\AppController;

class MonthsController extends AppController{

	public function index(){
		$this->viewBuilder()->layout('defaultview');
		$months = $this->paginate($this->Months);

        $this->set(compact('months'));
        $this->set('_serialize', ['id']);
		
	}
	public function add(){
		$this->viewBuilder()->layout('defaultview');
		$months = $this->Months->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['is_active']=1;
            $months = $this->Months->patchEntity($months, $this->request->data);
            if ($this->Months->save($months)) {
                $this->Flash->success(__('Your Months has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Months.'));
        }
        $this->set('months', $months);
    
		
	}
	public function view($id=null){
		$this->viewBuilder()->layout('defaultview');
		$months = $this->Months->get($id, [
            //'contain' => ['Filtervalues']
        ]);

        $this->set('months', $months);
        $this->set('_serialize', ['months']);
		

	}
	public function edit($id=null){
		$this->viewBuilder()->layout('defaultview');
		 $months = $this->Months->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $months = $this->Months->patchEntity($months, $this->request->data);
            if ($this->Months->save($months)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('months'));
        $this->set('_serialize', ['months']);

	}
	public function delete($id=null){
		$this->viewBuilder()->layout('defaultview');
		$this->request->allowMethod(['post', 'delete']);
        $months = $this->Months->get($id);
        if ($this->Months->delete($months)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

	

}