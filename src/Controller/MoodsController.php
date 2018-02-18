<?php

namespace App\Controller;


use App\Controller\AppController;

class MoodsController extends AppController{

	public function index(){
		$this->viewBuilder()->layout('defaultview');
		$moods = $this->paginate($this->Moods);

        $this->set(compact('moods'));
        $this->set('_serialize', ['id']);
		
	}
	public function add(){
		$this->viewBuilder()->layout('defaultview');
		$moods = $this->Moods->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['is_active']=1;
            $moods = $this->Moods->patchEntity($moods, $this->request->data);
            if ($this->Moods->save($moods)) {
                $this->Flash->success(__('Your Moods has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Moods.'));
        }
        $this->set('moods', $moods);
    
		
	}
	public function view($id=null){
		$this->viewBuilder()->layout('defaultview');
		$moods = $this->Moods->get($id, [
            //'contain' => ['Filtervalues']
        ]);

        $this->set('moods', $moods);
        $this->set('_serialize', ['moods']);
		

	}
	public function edit($id=null){
		$this->viewBuilder()->layout('defaultview');
		 $moods = $this->Moods->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $moods = $this->Moods->patchEntity($moods, $this->request->data);
            if ($this->Moods->save($moods)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('moods'));
        $this->set('_serialize', ['moods']);

	}
	public function delete($id=null){
		$this->viewBuilder()->layout('defaultview');
		$this->request->allowMethod(['post', 'delete']);
        $moods = $this->Moods->get($id);
        if ($this->Moods->delete($moods)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

	

}