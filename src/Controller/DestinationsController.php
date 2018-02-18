<?php

namespace App\Controller;


use App\Controller\AppController;

class DestinationsController extends AppController{

	public function index(){
		$this->viewBuilder()->layout('defaultview');
		$destinations = $this->paginate($this->Destinations);

        $this->set(compact('destinations'));
        $this->set('_serialize', ['id']);
		
	}
	public function add(){
		$this->viewBuilder()->layout('defaultview');
		$destinations = $this->Destinations->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['is_active']=1;
            $destinations = $this->Destinations->patchEntity($destinations, $this->request->data);
            if ($this->Destinations->save($destinations)) {
                $this->Flash->success(__('Your Destinations has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Destinations.'));
        }
        $this->set('destinations', $destinations);
    
		
	}
	public function view($id=null){
		$this->viewBuilder()->layout('defaultview');
		$destinations = $this->Destinations->get($id, [
            //'contain' => ['Filtervalues']
        ]);

        $this->set('destinations', $destinations);
        $this->set('_serialize', ['destinations']);
		

	}
	public function edit($id=null){
		$this->viewBuilder()->layout('defaultview');
		 $destinations = $this->Destinations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $destinations = $this->Destinations->patchEntity($destinations, $this->request->data);
            if ($this->Destinations->save($destinations)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('destinations'));
        $this->set('_serialize', ['destinations']);

	}
	public function delete($id=null){
		$this->viewBuilder()->layout('defaultview');
		$this->request->allowMethod(['post', 'delete']);
        $destinations = $this->Destinations->get($id);
        if ($this->Destinations->delete($destinations)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

	

}